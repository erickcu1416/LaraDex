<?php

use Illuminate\Database\Seeder;
use LaraDex\Role;
use LaraDex\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_user = Role::where('name', 'user')->first();
        $roles_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = "User";
        $user->email = "user@mail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($roles_user);

        $user = new User();
        $user->name = "Amin";
        $user->email = "admin@mail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($roles_admin);

    }
}
