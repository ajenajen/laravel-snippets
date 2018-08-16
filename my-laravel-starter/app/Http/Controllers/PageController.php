<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Auth, Config, Redirect, Request, Validator, View;

class PageController extends Controller
{
	public function showHomePage()
	{
		$data = array();

		return View::make('frontend/home')
			->with($data);
	}

	
}
