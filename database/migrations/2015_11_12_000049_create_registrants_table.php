<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registrants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('jk');
			$table->string('hp');
			$table->string('sma');
			$table->string('lulus');
			$table->string('email');
			$table->string('kampung');
			$table->string('desa');
			$table->string('kecamatan');
			$table->string('kota');
			$table->string('provinsi');
			$table->string('universitas');
			$table->string('fakultas');
			$table->string('jurusan');
			$table->integer('anak');
			$table->integer('saudara');
			$table->integer('penghasilan');
			$table->integer('tanggungan');
			$table->text('tentang_keluarga');
			$table->text('tentang_sahabat');
			$table->text('tentang_ekonomi');
			$table->text('sekolah');
			$table->text('luar_sekolah');
			$table->text('organisasi');
			$table->text('harapan');
			$table->text('potensi');
			$table->text('mimpi');
			$table->text('moto');
			$table->integer('kelulusan')->default(0);
			$table->string('foto')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('registrants');
	}

}
