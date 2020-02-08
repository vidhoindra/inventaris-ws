<?php 
namespace App\Models;
use illuminate\Database\Eloquent\Model; 
class Detail extends Model
{
	protected $table = 'details';
	protected $fillable = array( 'merk','label_barang','tahun_buat','id_category');
	public $timetamps =true;
}

 ?>
