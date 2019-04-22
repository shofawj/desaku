<?php

namespace Desaku\Model;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    protected $table= 'sales';
    protected $gruarderd= ['id'];


    public function sales_detail()
    {
        return $this->hasMany(sales_detail::class);
    }
}
