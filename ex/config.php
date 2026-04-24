<?php
declare(strict_types=1);

return [
    'server' => getenv('PHP_EX_DB_HOST') ?: 'localhost',
    'user' => getenv('PHP_EX_DB_USER') ?: 'root',
    'pass' => getenv('PHP_EX_DB_PASS') ?: '',
    'db' => getenv('PHP_EX_DB_NAME') ?: 'php_ex',
    'charset' => getenv('PHP_EX_DB_CHARSET') ?: 'utf8mb4',
];
