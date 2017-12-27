<?php

use Illuminate\Database\Seeder;
use Fenos\Notifynder\Notifable as NotifynderTrait;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        factory(App\Models\User::class, 3)->create();
    }
}
