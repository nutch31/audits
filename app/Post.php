<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Post extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'body',
        'user_type',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
