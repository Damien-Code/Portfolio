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