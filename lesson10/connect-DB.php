<?php

$connection = new PDO('mysql:host = localhost; dbname = ryaposovsergey_profile; charset = utf8',
        'ryaposovsergey', 'jLsi4g');

$aboutData = $connection->query("SELECT * FROM ryaposovsergey_profile.about")
        ->fetch(PDO::FETCH_ASSOC);
$educData = $connection->query("SELECT * FROM ryaposovsergey_profile.education");
$langData = $connection->query("SELECT * FROM ryaposovsergey_profile.languages");
$intData = $connection->query("SELECT * FROM ryaposovsergey_profile.interests");
$careerData = $connection->query("SELECT * FROM ryaposovsergey_profile.about_career")
        ->fetch(PDO::FETCH_ASSOC);
$jobsData = $connection->query("SELECT * FROM ryaposovsergey_profile.jobs");
$projectsData = $connection->query("SELECT * FROM ryaposovsergey_profile.projects")
        ->fetch(PDO::FETCH_ASSOC);
$myProjectsData = $connection->query("SELECT * FROM ryaposovsergey_profile.my_projects");
$skillsData = $connection->query("SELECT * FROM ryaposovsergey_profile.skills");
//$comments = $connection->query("SELECT * FROM ryaposovsergey_profile.comments");

if (!empty($_POST['comment']))
{
    if( $_POST['comment'])
    {
        $newName = $_POST['name'];
        $newComment = $_POST['comment'];
        $connection->query("INSERT INTO ryaposovsergey_profile.comments(name, comment) VALUES ('$newName', '$newComment')");
    }
}
$comments = $connection->query("SELECT * FROM ryaposovsergey_profile.comments");


$noComments = "Здесь пока нет никаких комментариев :(";


