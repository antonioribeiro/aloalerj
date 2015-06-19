<?php

Route::get('/', function ()
{
    return view('home');
});

Route::get('{page}', function ($page)
{
	return view('pages.'.$page);
});
