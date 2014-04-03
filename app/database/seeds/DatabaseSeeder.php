

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		$user = new User();
		$user->email = 'admin@codeup.com';
		$user->password = Hash::'adminPass123!';
		$user->save();
	}
}