<?php

Route::get('/', function ()
{
    $home = view('home')->render();

	session(['animated' => 'true']);

	return $home;
});

Route::get('{page}/{subpage?}', function ($page, $subpage = null)
{
	if ( ! env('APP_DEBUG'))
	{
		if ($view = Cache::get($page.$subpage))
        {
	        return $view;
        }
	}

	$view = view('pages.'.$page . ($subpage ? ".$subpage" : ''))->render();

	if ( ! env('APP_DEBUG'))
	{
		Cache::put($page.$subpage, $view, 60);
	}

	return $view;
});
