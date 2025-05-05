
<?php

namespace Kamran\ChatWidget\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id', 'message'];
}
