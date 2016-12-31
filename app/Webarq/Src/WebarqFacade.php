<?php namespace App\Webarq\Src;

use Illuminate\Support\Facades\Facade;

class WebarqFacade extends Facade
{

	public static function getFacadeAccessor()
	{
		return 'register-webarq';
	}

}