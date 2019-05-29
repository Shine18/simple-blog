mysql -u root 

SHOW DATABASES;

CREATE DATABASE blog;

USE blog;

DROP DATABASE blog;


CREATE TABLE posts (
    id INT NULL AUTO_INCREMENT,
    title VARCHAR(300) NOT NULL,
    content TEXT NULL,
    PRIMARY_KEY(id)
);

DROP TABLE posts;