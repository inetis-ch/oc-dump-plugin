<?php namespace Inetis\Dump;

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
            'icon'        => 'icon-code',
            'homepage'    => 'https://github.com/inetis-ch/oc-dump'
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
                        dump($x);
                    }, func_get_args());
                }
            ]
        ];
    }
}
