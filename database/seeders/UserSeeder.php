<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use PhpParser\Comment\Doc;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Root",
            "email" => env('ROOT_USER'),
            "password" => bcrypt(env("ROOT_PASSWORD"))
        ])->assignRole(config('roles.root'));
    }
}
