<?php
namespace Jubairmizan\LaraLTE;
use Illuminate\Support\ServiceProvider; 

class LaraLTEServiceProvider extends ServiceProvider{
	/**
	 * Perform post-registration booting of services.
	 */
	public function boot(){
		/**
		 * If your package contains routes, you may load them using the loadRoutesFrom method. This method will automatically determine if the application's routes are cached and will not load your routes file if the routes have already been cached:
		 */
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		/**
		 * To register your package's views with Laravel, you need to tell Laravel where the views are located. You may do this using the service provider's loadViewsFrom method. The loadViewsFrom method accepts two arguments: the path to your view templates and your package's name. For example, if your package's name is courier, you would add the following to your service provider's boot method:
		 */
		$this->loadViewsFrom(__DIR__.'/resources/views','lara-lte');
	}

}
?>