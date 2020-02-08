<?php 
namespace App\Models;
use illuminate\Database\Eloquent\Model; 
class Work extends Model
{

	protected $table = 'works';
	protected $fillable  = array( 'nama','jabatan','jenis_kelamin','bagian','alamat','id_barang','id_category','id_detail','id_user');
	public $timetamps =true;
} ?>