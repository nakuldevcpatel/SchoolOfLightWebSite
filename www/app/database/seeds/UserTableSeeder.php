<?php

class UserTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Eloquent::unguard();

    DB::table('users')->truncate();

    $password = Hash::make('admin321!');
    User::create(array('username' => 'admin', 'password' => $password));
    $password = Hash::make('neham321!');
    User::create(array('username' => 'neham', 'password' => $password));
  }

}
