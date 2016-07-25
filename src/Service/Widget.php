<?php

namespace Orchid\Widget\Service;

use Cache;
use Config;

class Widget implements WidgetContractInterface
{
    /**
     * Cache minutes.
     *
     * @var int
     */
    public $cache = 0;

    /**
     * @param $key
     *
     * @return mixed
     */
    public function get($key)
    {
        $class = config('dashboard.Widgets.'.$key);
        $widget = new $class();

        if ($widget->cache) {
            return Cache::remember('Widgets-'.$key, $widget->cache, function (Widget $widget) {
                return $widget->run();
            });
        } else {
            return $widget->run();
        }
    }

    /**
     * Soother.
     */
    public function run()
    {
    }
}
