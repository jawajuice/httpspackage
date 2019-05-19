<?php
namespace Wirelab\HttpsProtocol;

    use Illuminate\Support\ServiceProvider;
    class HttpsProtocolServiceProvider extends ServiceProvider {
        public function boot()
        {
            $router = $this->app['router'];
            $router->pushMiddlewareToGroup('web', HttpsProtocol::class);
        }
        public function register()
        {
            //$router = $this->app['router'];
        }
    }
    ?>