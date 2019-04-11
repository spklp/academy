<?php

class Sl
{
    private $letters = 'lkjhgfdsazxcvbnmpoiuytrewq';
    protected $connection;
    public $link;
    public $sl;
    public $resultCheckPostLink;
    public $warningURI;
    public $warningLink;

    // конструктор
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    // получение URI для редикта
    public function getURI ()
    {
        if (!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    // проверка наличия URI в базе данных
    public function checkURI ($uri)
    {
        if($this->parsLink($uri))
        {
            $outLink = $this->connection->query("SELECT link FROM ryaposovsergey_sl.links WHERE sl = '$uri'")
                    ->fetch(PDO::FETCH_ASSOC);
            $outLink = $outLink['link'];
            if ($outLink)
            {
                $this->redirect($outLink);
            }
        }
        else
        {
            $this->warningURI = "Не сломаешь! :)";
        }

    }

    // метод для редикта
    protected function redirect ($outLink)
    {
        header('Location: ' . "$outLink");
        exit();
    }

    // добавление в объект ссылку из POST запроса
    public function addPostLink ()
    {
        $this->link = $_POST['link'];
    }

    // проверка ссылки на ошибку 404
    public function checkPostLink ()
    {
        $link = $this->link;
        $answerLink = @get_headers($link);
        $res = !(preg_match("/404 not found/i", $answerLink[0]));
        if ($res == false)
        {
            $this->resultCheckPostLink = true;
        }
        else
        {
            $this->resultCheckPostLink = false;
        }
        return $res;
    }

    // проверка наличия ссылки в базе данных, если нет то добавление ее и генерация короткой ссылки
    public function checkPostLinkInDBOrGenerate ()
    {
        if ($this->parsLink($this->link))
        {
            $foundLink = $this->connection->query("SELECT sl FROM ryaposovsergey_sl.links WHERE link = '$this->link'")
                    ->fetch(PDO::FETCH_ASSOC);
            if ($foundLink)
            {
                $this->sl = $foundLink['sl'];
                echo "Ваша короткая ссылка : <br>http://sl.mgtest.su/$this->sl<br>";
                return $foundLink['sl'];
            }
            else
            {
                $this->generateLink();
            }
            echo "Ваша короткая ссылка : <br>http://sl.mgtest.su/$this->sl<br>";
            return $foundLink;
        }
        else
        {
            $this->warningLink = "В вашей ссылке есть недопустимые символы";
        }
    }

    // генерация короткой ссылки из максимального id таблицы
    protected function generateLink()
    {
        $keyGen = $this->connection->query("SELECT max(id) as maxid FROM ryaposovsergey_sl.links")
                ->fetch(PDO::FETCH_ASSOC);
        $keyGen = $keyGen['maxid'] + 1;
        $letters = $this->letters;
        $sl = '';
        while ($keyGen > 0)
        {
            $whole = intdiv($keyGen,26);
            $num = $keyGen % 26;
            $sl .= $letters[$num];
            $keyGen = $whole;
        }
        $this->sl = $sl;
        $this->connection->query("INSERT INTO ryaposovsergey_sl.links (link, sl) VALUE ('$this->link', '$this->sl')");
    }

    // проверка на личие (< > ' ")
    protected function parsLink($link)
    {
        $pattern = '/(\<|\>|\'|\")/';
        return !preg_match($pattern, $link);
    }

    // проверка что, пользователь ввел ссылку
    public function parsPostLink()
    {
        $pattern = '/^http(s{0,1}):\/\/.{1,}\..{1,}/';
        return preg_match($pattern, $_POST['link']);
    }

    // проверка наличия таблицы link, если нет создает
    public function checkTableOrCreate ()
    {
        $tables = $this->connection->query("SHOW TABLES FROM ryaposovsergey_sl")->fetch(PDO::FETCH_ASSOC);
        if (array_search('links', $tables) == false)
        {
            $this->connection->query("CREATE TABLE ryaposovsergey_sl.links(id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
link varchar(150) NOT NULL, sl varchar(30) NOT NULL)");
        }
    }
}