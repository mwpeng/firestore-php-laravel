# firestore-php-laravel
laravel wrapper of morrislaptop/firestore-php


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

## Usage

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
