<?php
namespace App\Models;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Post extends Model
{
    protected $fillable = [
         'pcat_id', 'title', 'image', 'keyword', 'content', 'desc', 'status', 'user_id',          
    ];

    public function pcategory()
    {
        return $this->belongsTo('App\Models\Pcategory', 'pcat_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function ptaqs()
    {
        return $this->belongsToMany('App\Models\Ptaq', 'posts_tags', 'post_id', 'ptaq_id');
    }

    public function title($lang = null)
    {
      $lang = $lang ?? App::getLocale();
      return json_decode($this->title)->$lang;
    }
}
