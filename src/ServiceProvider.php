<?php
namespace Mwpeng\FirestorePhpLaravel;

use Kreait\Firebase\ServiceAccount;
use Morrislaptop\Firestore\Factory;
use Morrislaptop\Firestore\Firestore;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->publishes([
//            __DIR__.'/path/to/config/courier.php' => config_path('courier.php'),
//        ]);
    }


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