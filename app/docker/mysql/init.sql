CREATE TABLE tasks
(
    id     INT AUTO_INCREMENT PRIMARY KEY,
    name   VARCHAR(100) NOT NULL,
    status TINYINT(1)   NOT NULL,
    date   DATE         NOT NULL
);

INSERT INTO tasks (name, status, date)
VALUES ('Learn to program in PHP', 1, '2024-02-19');
INSERT INTO tasks (name, status, date)
VALUES ('Create a portfolio site', 0, '2024-09-11');
INSERT INTO tasks (name, status, date)
VALUES ('Clean house', 1, '2024-05-12');
INSERT INTO tasks (name, status, date)
VALUES ('Do back exercises', 0, '2024-12-06');
INSERT INTO tasks (name, status, date)
VALUES ('3 hours without a phone', 0, '2024-03-01');