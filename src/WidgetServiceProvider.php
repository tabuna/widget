<?php

namespace Orchid\Dashboard\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;

class WidgetServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     */
    public function boot()
    {
        $this->registerConfig();
        Blade::directive('widget', function ($key) {
            return "<?php echo (new \\Orchid\\Widget\\Service\\Widget)->get({$key}); ?>";
        });
    }

    /**
     * Register config.
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/dashboard.php' => config_path('dashboard.php'),
        ]);
        $this->mergeConfigFrom(
            __DIR__.'/../Config/dashboard.php', 'dashboard'
        );
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->commands(Orchid\Widget\Console\MakeWidget::class);
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [
            Orchid\Widget\Console\MakeWidget::class,
        ];
    }
}
