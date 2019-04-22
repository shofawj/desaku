<?php

namespace Desaku\Model;

use Illuminate\Database\Eloquent\Model;

class sales_detail extends Model
{
    protected $table= 'sales_details';
    protected $gruarderd= ['id'];

    public function product()
    {
        return $this->belongsTo(product::class);
    }

    public function sales()
    {
        return $this->belongsTo(sales::class);
    }
}
