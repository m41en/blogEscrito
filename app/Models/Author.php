<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Author as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Author extends Authenticatable
{
    //use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;
    protected $table = "authors";
    protected $primaryKey = 'id_author';

    public function posts() {
        return $this->hasMany(Post::class);
    }

    protected $fillable = [
        'username',
        'email',
        'password'
    ];
   
        /*
        * The attributes that are mass assignable.
        *
        * @var array<int, string>

        protected $fillable = [
            'username',
            'email',
            'password',
        ];

        /**
         * The attributes that should be hidden for serialization.
         *
         * @var array<int, string>
         
        protected $hidden = [
            'password',
            'remember_token',
        ];

        /**
         * The attributes that should be cast.
         *
         * @var array<string, string>
         *
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];
        */
}
