<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table='tbl_products';
    protected $primaryKey='product_id';
    protected $fillable=['category_id','product_name','manufacture_id','product_long_description','product_short_description','product_price','product_image','product_size','product_shipping_price','publication_status'];
}
