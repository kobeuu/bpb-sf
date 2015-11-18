<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model {

	/**
	 * fillable fields for an Registrant.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'jk',
		'hp',
		'sma',
		'lulus',
		'email',
		'kampung',
		'desa',
		'kecamatan',
		'kota',
		'provinsi',
		'universitas',
		'fakultas',
		'jurusan',
		'anak',
		'saudara',
		'penghasilan',
		'tanggungan',
		'tentang_keluarga',
		'tentang_sahabat',
		'tentang_ekonomi',
		'sekolah',
		'luar_sekolah',
		'organisasi',
		'harapan',
		'potensi',
		'mimpi',
		'moto',
		'foto',
	];

}
