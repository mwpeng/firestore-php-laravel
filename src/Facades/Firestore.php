<?php
namespace Mwpeng\FirestorePhpLaravel\Facades;

use Morrislaptop\Firestore\Firestore as fs;

class Firestore extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return fs::class;
    }
}