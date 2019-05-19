<?php
namespace Wirelab\HttpsProtocol;

    use Illuminate\Support\ServiceProvider;
    class HttpsProtocolServiceProvider extends ServiceProvider {
        public function boot()
        {
        }
        public function register()
        {
            $this->app['router']->middleware('HttpsProtocol', 'wirelab\httpsprotocol\HttpsProtocol');
        }
    }
    ?>