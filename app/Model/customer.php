<?php

namespace Desaku\Model;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table= 'customers';
    protected $gruarderd= ['id'];

    public function product()
    {
        return $this->belongsToMany(favorite::class)
                    ->withTimestamps();
    }

    public function products()
    {
        return $this->belongsToMany(product::class)
                    ->withPivot(
                        'tanggal_beli',
                        'jumlah_beli',
                        'harga',
                        'total_harga'
                    )
                    ->withTimestamps();
    }
}
