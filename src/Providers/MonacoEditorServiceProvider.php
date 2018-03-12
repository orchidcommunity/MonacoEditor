<?php
namespace Orchids\MonacoEditor\Providers;

use Illuminate\Support\ServiceProvider;

class MonacoEditorServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     * After change run:  php artisan vendor:publish --provider="Orchids\MonacoEditor\Providers\MonacoEditorServiceProvider"
     * If need rewrite js files:  php artisan vendor:publish --force --provider="Orchids\MonacoEditor\Providers\MonacoEditorServiceProvider"
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'orchids/monacoeditor');
        $this->publishes([		
				__DIR__.'/../../public/js/' => public_path('orchids/monacoeditor/js'),
				__DIR__.'/../../public/mix-manifest.json' => public_path('orchids/monacoeditor/mix-manifest.json'),
			], 'public'); 
    }
}