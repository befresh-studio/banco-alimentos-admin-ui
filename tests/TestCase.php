<?php

namespace Brackets\Admin\Tests;

use Brackets\Admin\AdminProvider;
use File;
use Orchestra\Testbench\BrowserKit\TestCase as OrchestraBrowser;
use Brackets\AdminTranslations\Test\Exceptions\Handler;
use Exception;
use Illuminate\Contracts\Debug\ExceptionHandler;

abstract class TestCase extends OrchestraBrowser
{
    /** @var \Brackets\AdminTranslations\Translation */
    protected $languageLine;

    public function setUp()
    {
        parent::setUp();

        // let's define simple route
        $this->app['router']->get('/admin/test', function(){
            return view('admin.test.index');
        });

        File::copyDirectory(__DIR__.'/fixtures/public', public_path());
        File::copyDirectory(__DIR__.'/fixtures/resources/views', resource_path('views'));
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            AdminProvider::class,
        ];
    }

    public function disableExceptionHandling()
    {
        $this->app->instance(ExceptionHandler::class, new class extends Handler {
            public function __construct() {}

            public function report(Exception $e)
            {
                // no-op
            }

            public function render($request, Exception $e) {
                throw $e;
            }
        });
    }
}
