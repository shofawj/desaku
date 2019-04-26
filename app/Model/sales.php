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

    public function customer()
    {
        return $this->belongsTo(customer::class,'id_customer');
    }

    public function product()
    {
        return $this->belongsTo(product::class,'id_product');
    }
}
