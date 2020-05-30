<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'PandaGemuk\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'PandaGemuk\Calculator\CalculatorController@subtract');