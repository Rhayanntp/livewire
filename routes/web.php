<?php

use App\Livewire\Tarefa\Create;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tarefa/create', Create::class);