CREATE DATABASE IF NOT EXISTS portfolioDamienCode;

use portfolioDamienCode;

CREATE TABLE Posts(
                      id INT AUTO_INCREMENT PRIMARY KEY ,
                      Author VARCHAR(32) NOT NULL,
                      Title VARCHAR(32) NOT NULL,
                      Degree VARCHAR(32) NOT NULL,
                      Projects VARCHAR(32) NOT NULL,
                      Languages VARCHAR(32) NOT NULL,
                      Created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                      Updated_at DATETIME DEFAULT  CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                      isDeleted BOOLEAN DEFAULT FALSE);

CREATE TABLE blogs(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    author VARCHAR(32) NOT NULL,
                    title VARCHAR(32) NOT NULL,
                    post VARCHAR(128) NOT NULL,
                    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    isDeleted BOOLEAN DEFAULT FALSE);

-- Dummy data zodat er al data zichtbaar is
INSERT INTO Posts (Author, Title, Degree, Projects, Languages )
VALUES ('Mischa', 'Software Developer', 'ADSD', 'Learning Go', 'JavaScript and PHP'),
       ('Stephan', 'Software Engineer', 'ADSD', 'Teaching how to code', 'Laravel and much more'),
       ('Jan', 'Fullstack engineer', 'ADSD', 'Teaching how to code', 'C and much more'),
       ('Ron', 'Backend developer', 'ADSD', 'Teaching how to code', 'C# and much more');


INSERT INTO blogs (author, title, post)
VALUES ('Mischa', 'Go', 'Learning go is a pain in the ***'),
       ('Damiën', 'What i did this weekend', 'Finished my webapp');
