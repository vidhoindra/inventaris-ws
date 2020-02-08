<?php 
namespace App\Models;

use illuminate\Database\Eloquent\Model; 

class Category extends Model
{
	protected $table = 'categorys';

	protected $fillable = array('Jenis_category');
	
	public $timetamps = true;

} 