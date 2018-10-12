<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = [
        'name', 'phone_no', 'paid','unpaid','product_id',
    ];


    public function product() {
    	return $this->hasOne('App/Product');
    }
}
