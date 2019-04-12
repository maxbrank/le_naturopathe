
DROP DATABASE IF EXISTS le_naturopathe ;

CREATE DATABASE le_naturopathe CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI;

USE le_naturopathe;

CREATE TABLE users(
	id INT NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(50),
	last_name VARCHAR(50),
	user_name VARCHAR(50),
	mail VARCHAR(100),
	pwd VARCHAR(255),
	PRIMARY KEY (id)
);

CREATE TABLE articles (
	id INT NOT NULL AUTO_INCREMENT,
	content TEXT,
	title VARCHAR(255),
	img VARCHAR(255),
	created_at DATETIME,
	PRIMARY KEY (id)
);

CREATE TABLE comments (
	id INT NOT NULL AUTO_INCREMENT,
	content TEXT,
	created_at DATETIME,
	id_user INT,	
	id_article INT,	
	PRIMARY KEY (id),
	CONSTRAINT FK_comment_user FOREIGN KEY (id_user) REFERENCES users(id),
	CONSTRAINT FK_article FOREIGN KEY (id_article) REFERENCES articles(id)
);

CREATE TABLE questions (
	id INT NOT NULL AUTO_INCREMENT,
	question VARCHAR(255),
	PRIMARY KEY (id)
);

CREATE TABLE scores (
	id INT NOT NULL AUTO_INCREMENT,
	questionnaire_score INT,
	created_at DATETIME,
	id_user INT,
	PRIMARY KEY (id),
	CONSTRAINT FK_user FOREIGN KEY (id_user) REFERENCES users(id)
);








