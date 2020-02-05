<?php

namespace Infomaniak\KDrive;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;

class KDriveServiceProvider extends ServiceProvider
{
    /**
     * Extend Storage with the kDrive driver.
     */
    public function boot()
    {
        Storage::extend('kdrive', function ($app, $config) {
            $kdrive = new KDriveAdapter(
                $config['id'],
                $config['username'],
                $config['password'],
                $config['prefix']
            );
            return new Filesystem($kdrive);
        });
    }
}
