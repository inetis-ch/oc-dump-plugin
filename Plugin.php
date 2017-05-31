<?php namespace Inetis\Dump;

use Illuminate\Support\Debug\Dumper;
use System\Classes\PluginBase;

/**
 * Dump Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Twig Dump',
            'description' => 'Add Twig function d() that recursively dump passed variables',
            'author'      => 'inetis',
            'icon'        => 'icon-code'
        ];
    }

    /**
     * Register new Twig function
     *
     * @return array
     */
    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'd' => function () {
                    array_map(function ($x) {
                        (new Dumper)->dump($x);
                    }, func_get_args());
                }
            ]
        ];
    }

}
