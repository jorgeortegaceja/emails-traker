<?php
namespace EmailsTraker\Facades;

use Illuminate\Support\Facades\Facade;

class EmailTraker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'EmailTraker';
    }
}