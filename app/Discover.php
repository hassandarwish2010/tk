<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discover extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'details'
    ];

    /**
     * Get products for category
     *
     * @return response
     */

}
