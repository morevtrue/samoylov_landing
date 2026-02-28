# Лендинг курса Дениса Самойлова

Лендинг-сайт на базе Evolution CMS (PHP 8.1, Apache, MySQL 5.7). Развёртывается через Docker с маршрутизацией через Traefik.

## Стек

- Evolution CMS 3.1.29
- PHP 8.1 (Apache)
- MySQL 5.7
- Bootstrap 5, Swiper.js
- Docker + Traefik (reverse proxy, SSL)

## Структура проекта

```
├── docker-compose.yml    # Конфигурация Docker-сервисов
├── Dockerfile            # Сборка PHP/Apache-контейнера
├── .env.example          # Шаблон переменных окружения
├── evo/                  # Исходники Evolution CMS
│   ├── views/            # Blade-шаблоны лендинга
│   ├── template/         # CSS, JS, изображения шаблона
│   ├── assets/           # Медиафайлы и кэш CMS
│   ├── core/             # Ядро Evolution CMS
│   └── manager/          # Панель управления CMS
└── db_backup/            # Резервные копии БД
```

## Требования

- Docker и Docker Compose
- Запущенный контейнер Traefik с внешней сетью `proxynet`

## Быстрый старт

1. Создайте внешнюю сеть для Traefik (если ещё не создана):

```bash
docker network create proxynet
```

2. Скопируйте файл переменных окружения и отредактируйте его:

```bash
cp .env.example .env
```

3. Восстановите базу данных (при первом запуске):

```bash
docker compose up -d mysql
docker exec -i evo-db mysql -u root -p"$MYSQL_ROOT_PASSWORD" evo < db_backup/16-11-2025_database_backup.sql
```

4. Запустите проект:

```bash
docker compose up -d --build
```

5. Сайт будет доступен по адресу, указанному в переменной `DOMAIN` (по умолчанию: `https://denis.mental-prosvet.ru`).

## Переменные окружения

| Переменная            | Описание                  | Значение по умолчанию         |
|-----------------------|---------------------------|-------------------------------|
| `DOMAIN`              | Домен сайта               | `denis.mental-prosvet.ru`     |
| `MYSQL_ROOT_PASSWORD` | Root-пароль MySQL         | `rootpass`                    |
| `MYSQL_DATABASE`      | Имя базы данных           | `evo`                         |
| `MYSQL_USER`          | Пользователь MySQL        | `evo`                         |
| `MYSQL_PASSWORD`      | Пароль пользователя MySQL | `evopass`                     |
