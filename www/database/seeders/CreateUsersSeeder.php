<?php


namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\XapiProfile;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@test.com',
                //                'is_admin' => '1',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            ],
            // [
            //     'name' => 'User',
            //     'email' => 'user@test.com',
            //     'is_admin' => '0',
            //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

        for ($i = 0; $i < 10; $i++) {

            $u = User::create(
                [
                    'name' => 'test' . $i,
                    'email' => 'test' . $i . '@test.com',
                    //                    'is_admin' => 0,
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    'email_verified_at' => now(),
                ]

            );
            $u->xapi_profile()->save(
                XapiProfile ::create(
                    [
                        'name' =>   Str::slug($u->name, '.'),
                        'is_admin' => 0,
                        'user_id' => $u->id
                    ]
                )

                // factory(App\Models\Player::class)->make([
                //     'name' =>   Str::slug($u->name, '.'),
                //     'is_admin' =>0
                // ])
            );
        }
    }
}
