<?php

namespace Desaku\Model;

use Illuminate\Database\Eloquent\Model;

class villager extends Model
{
    protected $table= 'villagers';
    protected $gruarderd= ['id'];

    public function product()
    {
        return $this->hasMany(product::class);
    }
}
