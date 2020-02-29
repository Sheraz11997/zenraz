<?php

declare(strict_types=1);

use App\Users\Controllers\UserController;

Route::resource('/users', UserController::class);
