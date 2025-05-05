
<?php

use Illuminate\Support\Facades\Route;
use Kamran\ChatWidget\Http\Controllers\ChatController;

Route::middleware(['web', 'auth'])->post('/chat/send', [ChatController::class, 'send']);
