<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 4/12/2018
 * Time: 1:36 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Data extends Model {

    protected $table = 'data';
    public $timestamps = true;
    protected $fillable = [
        'id',
		'danh_muc',
		'keyword',
		'ngu_nghia',
		'link_am_thanh',
		'link_hinh_anh',
		'link_lien_ket',
		'created_at',
		'updated_at',
    ];

}
