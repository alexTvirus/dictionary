<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 4/12/2018
 * Time: 1:36 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Catagories extends Model {

    protected $table = 'catagories';
    public $timestamps = false;
    protected $fillable = [
        'id'
    ];

}
