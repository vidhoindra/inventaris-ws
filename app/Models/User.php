<?php 
namespace App\Models;
use illuminate\Database\Eloquent\Model; 
class User extends Model
{
 protected $table ='users';
 protected $fillable= array ( 'usernama','password','email');
 protected $hidden=['password'];
}

?>