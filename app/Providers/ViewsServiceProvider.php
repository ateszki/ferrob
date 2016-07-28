<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Categoria;
use Schema;

class ViewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if(Schema::hasTable("categorias") && Schema::hasTable("productos")){
            view()->share(["categorias" => Categoria::with('productos')->get()]);    
        }
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
