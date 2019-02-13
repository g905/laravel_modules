<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CoreDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call("Modules\Core\Database\Seeders\RoleTableSeeder");
        $this->call("Modules\Core\Database\Seeders\PermissionTableSeeder");
        $this->call("Modules\Core\Database\Seeders\UserTableSeeder");
    }
}
