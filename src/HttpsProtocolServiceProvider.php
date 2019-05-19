<?php
namespace Wirelab\HttpsProtocol;

    use Illuminate\Support\ServiceProvider;
    class HttpsProtocolServiceProvider extends ServiceProvider {
        public function boot()
        {
            //register middleware in kernel
            $router = $this->app['router'];
            $router->pushMiddlewareToGroup('web', HttpsProtocol::class);
        }
        public function register()
        {
        }
    }
    ?>