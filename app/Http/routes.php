<?php

Route::get('/', function ()
{
    $home = view('home')->render();

	session(['animated' => 'true']);

	return $home;
});

Route::get('{page}/{subpage?}', function ($page, $subpage = null)
{
	return view('pages.'.$page . ($subpage ? ".$subpage" : ''));
});
