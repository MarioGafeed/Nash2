<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Message extends Model
{
  protected $fillable = [
      'name', 'email', 'phone', 'subject', 'body', 
  ];
}
