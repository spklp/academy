
/*
 * Console
 */

CREATE TABLE orders
(
  order_id INT AUTO_INCREMENT PRIMARY KEY,
  order_email VARCHAR(40) NOT NULL,
  order_date DATETIME DEFAULT NULL
)
engine = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE users
(
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(40) NOT NULL,
  email VARCHAR(40) NOT NULL
)
engine = InnoDB DEFAULT CHARSET = utf8;

ALTER TABLE users MODIFY email VARCHAR(40) UNIQUE ;
ALTER TABLE orders ADD CONSTRAINT FK_users_orders FOREIGN KEY  (order_email)
REFERENCES users(email) ON UPDATE CASCADE ON DELETE CASCADE ;

INSERT INTO users (name, email) VALUE
  ('Иван', 'ivan@gmail.com'),
  ('Артем', 'aRtem@mail.ru'),
  ('Ирина', 'irochka@yandex.ru');
INSERT INTO orders (order_email) VALUES ('ivan@gmail.com');
INSERT INTO orders (order_email) VALUES ('ivan@gmail.com');
INSERT INTO orders (order_email) VALUES ('aRtem@mail.ru');
INSERT INTO orders (order_email) VALUES ('irochka@yandex.ru');
DELETE  FROM users WHERE id = 1;
UPDATE users SET email = 'update_aRtem@mail.ru' WHERE email = 'aRtem@mail.ru';
ALTER TABLE orders DROP FOREIGN KEY FK_users_orders;

/*
 * Dump database
 */

CREATE TABLE main.users
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(40) NOT NULL,
    email varchar(40)
);
CREATE UNIQUE INDEX email ON main.users (email);
INSERT INTO main.users (id, name, email) VALUES (2, 'Артем', 'update_aRtem@mail.ru');
INSERT INTO main.users (id, name, email) VALUES (3, 'Ирина', 'irochka@yandex.ru');


CREATE TABLE main.orders
(
    order_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    order_email varchar(40) NOT NULL,
    order_date datetime
);
CREATE INDEX FK_users_orders ON main.orders (order_email);
INSERT INTO main.orders (order_id, order_email, order_date) VALUES (3, 'update_aRtem@mail.ru', null);
INSERT INTO main.orders (order_id, order_email, order_date) VALUES (4, 'irochka@yandex.ru', null);