<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Gepard\User;
use Modules\Core\Entities\Permission;
use Modules\Core\Entities\Role;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->truncate();

        // $this->call("OthersTableSeeder");
        $dev_role = Role::where('slug','developer')->first();
        $manager_role = Role::where('slug', 'manager')->first();
        $dev_perm = Permission::where('slug','create-tasks')->first();
        $manager_perm = Permission::where('slug','edit-users')->first();

        $admin_role = Role::where('slug','admin')->first();


        $developer = new User();
        $developer->first_name = 'Usama Muneer';
        $developer->email = 'usama@thewebtier.com';
        $developer->password = bcrypt('qwerty');
        $developer->save();
        $developer->roles()->attach($dev_role);
        $developer->permissions()->attach($dev_perm);


        $manager = new User();
        $manager->first_name = 'Asad Butt';
        $manager->email = 'asad@thewebtier.com';
        $manager->password = bcrypt('qwerty');
        $manager->save();
        $manager->roles()->attach($manager_role);
        $manager->permissions()->attach($manager_perm);

        $manager = new User();
        $manager->first_name = 'Егор';
        $manager->email = 'crime.person@gmail.com';
        $manager->password = bcrypt('qwerty');
        $manager->save();
        $manager->roles()->attach($admin_role);
    }
}
