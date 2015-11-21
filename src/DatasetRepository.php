<?php namespace Maka\Dataset;

use Illuminate\Support\Arr;
use Illuminate\Config\Repository;

class DatasetRepository extends Repository 
{
    /**
     * Merge the specified configuration value.
     *
     * @param  mixed  $args
     * @return mixed
     */
    public function merge()
    {
        $args = func_get_args();
        $mix = [];
        
        foreach ($args as $key) {
            $mix += $this->get($key);
        }
        
        return $mix;
        
    }
}
