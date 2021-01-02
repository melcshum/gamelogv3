<?php
namespace Database\Seeders;

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
        $this->call([UsersTableSeeder::class]);
        $this->call(CreateUsersSeeder::class);
        $this->call(GameTableSeeder::class);

        $this->call(ScenariosTableSeeder::class);
        $this->call(PrefabsTableSeeder::class);
        $this->call(PrefabScanrioTableSeeder::class);


        //$this->call(KnowledgeComponentsTableSeeder::class);
    }
}
