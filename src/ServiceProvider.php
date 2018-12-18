<?php
namespace Mwpeng\Debugbar;

use Kreait\Firebase\ServiceAccount;
use Morrislaptop\Firestore\Factory;
use Morrislaptop\Firestore\Firestore;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(Firestore::class, function ($app) {
            $serviceAccount = ServiceAccount::fromJsonFile(env("FIREBASE_CREDENTIALS"));
            $firestore = (new Factory)->withServiceAccount($serviceAccount)->createFirestore();
            return $firestore;
        });

    }
}