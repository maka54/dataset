<?php namespace Maka\Dataset;

use Illuminate\Support\Facades\Facade;

class DatasetFacade extends Facade{
    
    protected static function getFacadeAccessor() { return 'dataset'; }
    
}