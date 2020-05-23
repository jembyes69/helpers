<?php

namespace  Jembys;

use Illuminate\Support\ServiceProvider;
use Jembys\JembysInitializer;

class JembysServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        JembysInitializer::loadHelpers();
    }
}
