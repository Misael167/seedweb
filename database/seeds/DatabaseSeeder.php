<?php

use Database\Seeders\PesquisadorPermissionRoleTableSeeder;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(VoyagerDatabaseSeeder::class);
        $this->call(VoyagerDummyDatabaseSeeder::class);
        // \App\Models\User::factory(10)->create();
        $this->call(PesquisadorPermissionRoleTableSeeder::class);

    }
}
