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
			'password' => bcrypt('rendahhati'),
			'admin' => 1,
		]);
		// $this->call('UserTableSeeder');
	}

}
