CREATE TABLE users
(
    id       INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id  INT          NOT NULL,
    FOREIGN KEY (role_id) REFERENCES roles (id)
);

CREATE TABLE roles
(
    id   INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE book
(
    id         INT AUTO_INCREMENT PRIMARY KEY,
    title      VARCHAR(255) NOT NULL,
    author     VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    user_id    INT          NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users (id)
);

INSERT INTO roles (name)
VALUES ('guest'),
       ('user'),
       ('admin');

INSERT INTO users (username, password, role_id)
VALUES ('John Doe', 'qwe123qwe', 2),
       ('Jim Koe', 'qweqwe123', 2),
       ('Tim Joe', 'qwe123qwe', 2),
       ('Mr Smith', '123qweqe', 3);

INSERT INTO book (title, author, created_at, user_id)
VALUES ('Преступление и наказание', 'Фёдор Достоевский', '2025-01-21 12:00:00', 1),
       ('Мастер и Маргарита', 'Михаил Булгаков', '2025-01-21 12:00:00', 1),
       ('Война и мир', 'Лев Толстой', '2025-01-21 12:00:00', 1),
       ('Герой нашего времени', 'Михаил Лермонтов', '2025-01-21 12:00:00', 2),
       ('Евгений Онегин', 'Александр Пушкин', '2025-01-21 12:00:00', 2),
       ('Отцы и дети', 'Иван Тургенев', '2025-01-21 12:00:00', 3),
       ('Двенадцать стульев', 'Илья Ильф и Евгений Петров', '2025-01-21 12:00:00', 3),
       ('Человек-невидимка', 'Герберт Уэллс', '2025-01-21 12:00:00', 3),
       ('1984', 'Джордж Оруэлл', '2025-01-21 12:00:00', 3),
       ('Три товарища', 'Эрих Мария Ремарк', '2025-01-21 12:00:00', 4);
