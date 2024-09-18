# PHP 8.4 Mimetype Bug

This repository should demonstrate a bug in current PHP 8.4 Beta 5 related to mime_type detection.

In this particular case the method `mime_content_type` returns `application/javascript` instead of `text/x-php`.

To test this with Docker run the following commands:

```bash
docker compose up
```

In a separate terminal

```bash
docker exec -ti cakephp_app /bin/bash
php composer.phar install
php vendor/bin/phpunit tests/SimpleTest.php
```