<?php

namespace App\Models;
use App\Models\Post;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Pcategory extends Model
{
    protected $fillable = [
        'title','image', 'keyword', 'summary', 'desc'
    ];

    public function posts()
    {
      return $this->hasMany(Post::class, 'pcat_id');
    }

    

}
