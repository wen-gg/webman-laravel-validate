<?php

namespace Wengg\WebmanLaravelValidate;

class Install
{
    const WEBMAN_PLUGIN = true;

    public static function install()
    {
        copy_dir(__DIR__ . '/../lang', base_path() . '/resource/translations');
    }
}
