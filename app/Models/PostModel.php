<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = ‘my_posts’;
 protected $primaryKey = ‘my_id’;
 protected $keyType = ‘string’;
 public $incrementing = false;
=======
protected $table = 'post';
protected $primaryKey = 'id_post';
>>>>>>> 79cd8cfec5bb74f5e47e8efd51eab44986055a7f
}
