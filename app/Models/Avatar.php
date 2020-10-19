<?php

namespace App\Models;

class Avatar extends Base
{
    protected $table = 'avatars';
    public $primarykey = 'id';
    protected $fillable = [
        'image',
        'label',
        'created_by',
        'updated_by'
    ];
}
