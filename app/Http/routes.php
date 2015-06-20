<?php

Route::get('/', function ()
{
    return view('home');
});

Route::get('{page}/{subpage?}', function ($page, $subpage = null)
{
	return view('pages.'.$page . ($subpage ? ".$subpage" : ''));
});
