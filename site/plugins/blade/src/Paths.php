<?php

namespace Leitsch\Blade;

class Paths
{
    public static function getPathTemplates(): string
    {
        $path = option('leitsch.blade.templates');

        if (is_callable($path)) {
            return $path();
        }

        if ($path !== null) {
            return kirby()->roots()->index() . '/' . $path;
        }

        return kirby()->root('templates');
    }

    public static function getPathViews(): string
    {
        $path = option('leitsch.blade.views');

        if (is_callable($path)) {
            return $path();
        }

        return $path;
    }
}
