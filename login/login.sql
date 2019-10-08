/*base datua sortu */
CREATE DATABASE IF NOT EXISTS login;

USE login;
/* tabla sortu*/
CREATE TABLE IF NOT EXISTS users (
    user VARCHAR(50) NOT NULL PRIMARY KEY,
    pass VARCHAR(250)
);

/*insert*/

INSERT INTO users (user, pass) VALUES ('koxme', '$2y$10$HRnWu0Br0teJdknFBvFRHuhcVym2yfl7CoTaZQ.gGphuBb05PbK3S');
INSERT INTO users (user, pass) VALUES ('peru', '');
