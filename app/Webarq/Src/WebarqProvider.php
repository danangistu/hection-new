<?php namespace App\Webarq\Src;

use Illuminate\Support\ServiceProvider;
use App\Webarq\Src\Webarq;

class WebarqProvider extends ServiceProvider
{
	public function boot()
	{
		$this->mergeConfigFrom(config_path('webarq.php'),'webarq');
	}

	public function register()
	{
		$this->app->bind('register-webarq',function(){
			return new Webarq;
		});
	}
}

?>