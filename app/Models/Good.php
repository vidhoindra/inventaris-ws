<?php 
namespace App\Models;
use illuminate\Database\Eloquent\Model; 
class Good extends Model
{
	protected $table = 'goods';
	protected $fillable  = array ('nama_barang');
	public $timetamps =true;
}
 ?>
