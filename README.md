# firestore-php-laravel
Laravel wrapper of [morrislaptop/firestore-php].


## Installation

Require this package with composer. 

```shell
composer require mwpeng/firestore-php-laravel 
```

## Setup

Publish package config file. 

```shell
php artisan vendor:publish --provider=Mwpeng\FirestorePhpLaravel\ServiceProvider
```
Config Path to the Firebase JSON key file.
```php
'firebase-credentials' => env('FIREBASE_CREDENTIALS', null),
```

## Usage: 
Check [morrislaptop/firestore-php] for Methods available. 

### 1. Inject firestore to class constructor. 

```php
<?php
use Morrislaptop\Firestore\Firestore;

class ToAccessFirestore {
    /**
     * @var Firestore
     */
    private $firestore;

    /**
     * @param Firestore $firestore
     *
     * @return void
     */
    public function __construct(Firestore $firestore)
    {
        $this->firestore = $firestore;
        $this->firestore->collection("PathToCollection");
    }
    
}

```

### 2. Using Firestore Facade. 
```php
<?php
use Mwpeng\FirestorePhpLaravel\Facades\Firestore;

Firestore::collection("PathToCollection");

```


[morrislaptop/firestore-php]:https://github.com/morrislaptop/firestore-php