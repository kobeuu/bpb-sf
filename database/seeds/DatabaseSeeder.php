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
				'name' => 'Kebangsaan',
		]);

		Tag::create([
				'name' => 'Sosial',
		]);

		Tag::create([
				'name' => 'Akhlak',
		]);

		User::create([
			'name' => 'Dede Iskandar',
			'email' => 'kobeuu@gmail.com',
			'password' => bcrypt('rendahhati'),
			'admin' => 1,
		]);
		// $this->call('UserTableSeeder');
	}

}
