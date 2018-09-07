<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 4/12/2018
 * Time: 1:36 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ResultScan extends Model {

    protected $table = 'result_scan';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'ip',
        'password',
        'user',
        'country',
        'created_at',
    ];

}
