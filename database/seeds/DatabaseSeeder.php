<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		Tag::create([
				'name' => 'Kebangsaan'
		]);

		Tag::create([
				'name' => 'kepemimpinan'
		]);

		Tag::create([
				'name' => 'Sosial Kemasyarakatan'
		]);

		User::create([
			'name' => 'Sinergi Foundation',
			'email' => 'bpb@sinergifoundation.org',
			'password' => bcrypt('123456'),
			'admin' => 1,
		]);

		$faker = Faker\Factory::create();

		// for ($i=0; $i < 10; $i++) {
		// 	$registrant = new \App\Registrant;
		// 	$registrant->name = $faker->name;
		// 	$registrant->jk = ['Laki-laki', 'Perempuan'][rand(0, 2)];
		// 	$registrant->hp = $faker->phoneNumber;
		// 	$registrant->sma = $faker->company;
		// 	$registrant->lulus = $faker->year;
		// 	$registrant->email = $faker->email;
		// 	$registrant->kampung = $faker->cityPrefix;
		// 	$registrant->desa = $faker->state;
		// 	$registrant->kecamatan = $faker->state;
		// 	$registrant->kota = $faker->city;
		// 	$registrant->provinsi = $faker->state;
		// 	$registrant->universitas = $faker->company;
		// 	$registrant->fakultas = $faker->company;
		// 	$registrant->jurusan = $faker->company;
		// 	$registrant->anak = $faker->randomDigitNotNull;
		// 	$registrant->saudara = $faker->randomDigitNotNull;
		// 	$registrant->penghasilan = $faker->randomDigitNotNull;
		// 	$registrant->tanggungan = $faker->randomDigitNotNull;
		// 	$registrant->tentang_keluarga = $faker->text($maxNbChars = 200);
		// 	$registrant->tentang_sahabat = $faker->text($maxNbChars = 200);
		// 	$registrant->tentang_ekonomi = $faker->text($maxNbChars = 200);
		// 	$registrant->sekolah = $faker->text($maxNbChars = 200);
		// 	$registrant->luar_sekolah = $faker->text($maxNbChars = 200);
		// 	$registrant->organisasi = $faker->sentence($nbWords = 6, $variableNbWords = true);
		// 	$registrant->harapan = $faker->sentence($nbWords = 6, $variableNbWords = true);
		// 	$registrant->potensi = $faker->sentence($nbWords = 6, $variableNbWords = true);
		// 	$registrant->mimpi = $faker->sentence($nbWords = 6, $variableNbWords = true);
		// 	$registrant->moto = $faker->sentence($nbWords = 6, $variableNbWords = true);
		// 	$registrant->save();
		// }

		Model::reguard();



		// $this->call('UserTableSeeder');
	}

}
