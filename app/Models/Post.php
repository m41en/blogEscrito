<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;
    protected $table = "posts";
    protected $primaryKey = 'id_post';

    public function author() {
        return $this->belongsTo(Author::class, 'fk_id_author');
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
