<?php
namespace Elc\Todo\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Elc\Todo\Repositories\Eloquent\TodoRepository;
use Elc\Todo\Repositories\TodoRepositoryInterface;

class TodoServiceProvider extends ServiceProvider
{
	public function register()
	{
		//$this->app->bind('todo', function ($app){return new Todo;});
		$this->app->singleton(TodoRepositoryInterface::class, TodoRepository::class);
	}
	public function boot()
	{
		// loading the routes file
		//require __DIR__ . '/routes/web.php';
		Route::namespace('Elc\Todo\Http\Controllers')->group(__DIR__.'/../Routes/web.php');

		// define the path for the view files
		$this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'todo');

		// carrega as migrações do diretório do pacote
		$this->loadMigrationsFrom(__DIR__.'/../migrations');
		
		// publishes migrations (antigo)
		/*$this->publishes([
			__DIR__ . '/migrations/2017_10_13_000000_create_todo_table.php' => base_path('database/migrations/2017_10_13_000000_create_todo_table.php'),
		]);*/

	}
}