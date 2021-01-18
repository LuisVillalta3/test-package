<?php

use Illuminate\Support\Facades\Route;
use Villalta\Calculator\CalculatorController;

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Devdojo\Calculator\CalculatorController@add');
Route::get('add/{a}/{b}', [CalculatorController::class, 'add']);
Route::get('subtract/{a}/{b}', [CalculatorController::class, 'subtract']);
