<?php

namespace AlexJoffroy\GithubIssuesTab\Tests;

use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;
use AlexJoffroy\GithubIssuesTab\TabServiceProvider;

abstract class TestCase extends Orchestra
{

    protected function getPackageProviders($app)
    {
        return [
            TabServiceProvider::class,
        ];
    }
}
