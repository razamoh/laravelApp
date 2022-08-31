<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    const NUMBER_OF_USERS = 10;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(Self::NUMBER_OF_USERS)->create();
    }
}
