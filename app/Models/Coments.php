<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coments extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'coments';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'post_id',
        'comentario',
    ];
}
