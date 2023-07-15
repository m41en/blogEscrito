<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $primaryKey = 'id_post';

    public function user() {
        return $this->belongsTo(User::class, 'fk_id_user');
    }
/*
    public function publicity() {
        return $this->belongsTo(Publicity::class, 'fk_id_publicity');
    }
*/

    protected $fillable = [
        'title',
        'body'
    ];
}