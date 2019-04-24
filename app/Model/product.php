<?php

namespace Desaku\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table= 'products';
    protected $gruarderd= ['id'];

    public function category()
    {
        return $this->belongsTo(category::class, 'id_category');
    }

    public function villager()
    {
        return $this->belongsTo(villager::class, 'id_villager');
    }

    public function customer()
    {
        return $this->belongsToMany(customer::class)
                    ->withTimestamps();
    }

    public function customers()
    {
        return $this->belongsToMany(customer::class)
                    ->withPivot(
                        'tanggal_beli',
                        'jumlah_beli',
                        'harga',
                        'total_harga'
                    )
                    ->withTimestamps();
    }
}
