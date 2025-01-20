# 📚 Проект "Библиотека"

Проект "Библиотека" — это веб-приложение, позволяющее управлять коллекцией книг. Оно реализовано на PHP с использованием архитектуры MVC и использует MySQL для хранения данных. Для удобного развертывания используется Docker и Docker Compose.

---

## 📝 Описание

### Основные возможности:
- Регистрация и авторизация пользователей.
- Добавление, редактирование и удаление книг.
- Просмотр списка книг, принадлежащих конкретному пользователю.
- Роль администратора для управления пользователями и их книгами.

---

## 🏗️ Структура проекта
/project-root
 /app # Исходный код приложения
  /Controllers # Контроллеры (логика обработки запросов)
  /Models # Модели (работа с базой данных)
  /Views # Представления (шаблоны для отображения)
  /public # Точка входа в приложение (index.php)
  /config # Конфигурационные файлы приложения
  /docker # Конфигурация Docker
    /php # Настройки PHP
      Dockerfile # Dockerfile для сборки PHP-образа
      php.ini # Настройки PHP
    /mysql # Настройки MySQL
      Dockerfile # (опционально) Dockerfile для MySQL
      mysqlConfig.cnf # (опционально) Конфигурация MySQL
      init.sql # SQL-скрипт для инициализации базы данных
docker-compose.yml # Конфигурация Docker Compose
README.md # Документация проекта

---

## 🚀 Установка и запуск

### 1. Предварительные требования:
- Установите [Docker](https://www.docker.com/).
- Установите [Docker Compose](https://docs.docker.com/compose/).

### 2. Клонируйте проект:
```bash
git clone https://github.com/your-username/library-project.git
cd library-project
```
### 3. Запустите проект:
docker-compose up --build

### 4. Доступ к приложению:
Приложение: http://localhost:8080

phpMyAdmin: http://localhost:8081
