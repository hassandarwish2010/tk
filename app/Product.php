<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'en_name', 'ar_name', 'en_details', 'ar_details', 'image','image2','image3', 'category_id', 'permalink', 'keywords','position', 'description',
  ];

  /**
   * Category data
   *
   * @return response
   */
  public function category() {
      return $this->hasOne('App\Category', 'id', 'category_id');
  }

  /**
   * Images data
   *
   * @return response
   */
  public function images() {
      return $this->hasMany('App\ProductImages', 'product_id', 'id');
  }
}
