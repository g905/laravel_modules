<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        \Schema::disableForeignKeyConstraints();
        $this->call("Modules\Core\Database\Seeders\RoleTableSeeder");
        $this->call("Modules\Core\Database\Seeders\PermissionTableSeeder");
        $this->call("Modules\Core\Database\Seeders\UserTableSeeder");
        $this->call("Modules\Core\Database\Seeders\CityTableSeeder");
        \Schema::enableForeignKeyConstraints();
    }
}
