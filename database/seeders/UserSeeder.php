<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::create([
            'name'=>'kresno',
            'email'=>'kresno@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('123456'),
            'roles'=>'author',
            'phone'=>'00000',
            'address'=>'ok',

        ]);

        User::create([
            'name'=>'bimo',
            'email'=>'bimo@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('123456'),
            'roles'=>'author',
            'phone'=>'00000',
            'address'=>'ok',
        ]);

        User::create([
            'name'=>'hananta',
            'email'=>'hananta@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('123456'),
            'roles'=>'author',
            'phone'=>'00000',
            'address'=>'ok',
        ]);
    }
}
