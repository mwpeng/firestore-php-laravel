<?php
namespace Mwpeng\FirestorePhpLaravel;

use Morrislaptop\Firestore\Firestore;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return Firestore::class;
    }
}