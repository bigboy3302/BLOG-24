 CREATE DATABASE`BLOG ipb-22`;

CREATE TABLE posts (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL
);


INSERT INTO posts
(TITLE)
VALUE
("My First Blog Post"),
("My Second Blog Post");
/*
-- USE BLOG ipb-22`;


CREATE TABLE posts (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL
);


INSERT INTO posts
(TITLE)
VALUE
("My First Blog Post"),
("My Second Blog Post");



CREATE TABLE categories (
   id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
   description TEXT
	  );


INSERT INTO categories (name, description)
VALUES
    ('sport', ""),
    ('music', ""),
    ('food', "");

ALTER TABLE posts
ADD category_id INT NOT NULL REFERENCES categories(id);

UPDATE posts
SET category_id = (SELECT id FROM categories WHERE name = "sport")
WHERE id = 1;

UPDATE posts
SET category_id = (SELECT id FROM categories WHERE name = "food")
WHERE id = 2;


SELECT * FROM posts;

JOIN categories
ON posts.category_id = category_id;
*/