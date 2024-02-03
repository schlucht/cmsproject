<?php
use ots\api\Users;

// User Routes
$router->register('/api/users', [Users::class, 'getUsers'], 'GET');