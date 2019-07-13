<?php

namespace EmadAlkabi\Ckeditor;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->publishes(
            [
                __DIR__ . '/basic/ckeditor.js' => public_path('vendor/emadalkabi/laravel-ckeditor-4/basic/ckeditor.js'),
                __DIR__ . '/basic/config.js' => public_path('vendor/emadalkabi/laravel-ckeditor-4/basic/config.js'),
                __DIR__ . '/basic/styles.js' => public_path('vendor/emadalkabi/laravel-ckeditor-4/basic/styles.js'),
                __DIR__ . '/basic/contents.css' => public_path('vendor/emadalkabi/laravel-ckeditor-4/basic/contents.css'),
                __DIR__ . '/basic/adapters' => public_path('vendor/emadalkabi/laravel-ckeditor-4/basic/adapters'),
                __DIR__ . '/basic/lang' => public_path('vendor/emadalkabi/laravel-ckeditor-4/basic/lang'),
                __DIR__ . '/basic/skins' => public_path('vendor/emadalkabi/laravel-ckeditor-4/basic/skins'),
                __DIR__ . '/basic/plugins' => public_path('vendor/emadalkabi/laravel-ckeditor-4/basic/plugins'),
            ],
            'ckeditor-basic'
        );

        $this->publishes(
            [
                __DIR__ . '/standard/ckeditor.js' => public_path('vendor/emadalkabi/laravel-ckeditor-4/standard/ckeditor.js'),
                __DIR__ . '/standard/config.js' => public_path('vendor/emadalkabi/laravel-ckeditor-4/standard/config.js'),
                __DIR__ . '/standard/styles.js' => public_path('vendor/emadalkabi/laravel-ckeditor-4/standard/styles.js'),
                __DIR__ . '/standard/contents.css' => public_path('vendor/emadalkabi/laravel-ckeditor-4/standard/contents.css'),
                __DIR__ . '/standard/adapters' => public_path('vendor/emadalkabi/laravel-ckeditor-4/standard/adapters'),
                __DIR__ . '/standard/lang' => public_path('vendor/emadalkabi/laravel-ckeditor-4/standard/lang'),
                __DIR__ . '/standard/skins' => public_path('vendor/emadalkabi/laravel-ckeditor-4/standard/skins'),
                __DIR__ . '/standard/plugins' => public_path('vendor/emadalkabi/laravel-ckeditor-4/standard/plugins'),
            ],
            'ckeditor-standard'
        );

        $this->publishes(
            [
                __DIR__ . '/full/ckeditor.js' => public_path('vendor/emadalkabi/laravel-ckeditor-4/full/ckeditor.js'),
                __DIR__ . '/full/config.js' => public_path('vendor/emadalkabi/laravel-ckeditor-4/full/config.js'),
                __DIR__ . '/full/styles.js' => public_path('vendor/emadalkabi/laravel-ckeditor-4/full/styles.js'),
                __DIR__ . '/full/contents.css' => public_path('vendor/emadalkabi/laravel-ckeditor-4/full/contents.css'),
                __DIR__ . '/full/adapters' => public_path('vendor/emadalkabi/laravel-ckeditor-4/full/adapters'),
                __DIR__ . '/full/lang' => public_path('vendor/emadalkabi/laravel-ckeditor-4/full/lang'),
                __DIR__ . '/full/skins' => public_path('vendor/emadalkabi/laravel-ckeditor-4/full/skins'),
                __DIR__ . '/full/plugins' => public_path('vendor/emadalkabi/laravel-ckeditor-4/full/plugins'),
            ],
            'ckeditor-standard'
        );
    }
    public function register()
    {
    }
}