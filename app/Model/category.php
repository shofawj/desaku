<?php

namespace Desaku\Model;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table= 'categories';
    protected $gruarderd= ['id'];

    public function product()
    {
        return $this->hasMany(product::class);
    }

}