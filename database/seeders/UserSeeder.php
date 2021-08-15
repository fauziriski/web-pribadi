<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@fauziriski.my.id',
        //     'role' => 'admin',
        //     'password' => Hash::make('fauzi123'),
        // ]);
        
        Role::create([
            'name' => 'admin'

        ]);
        
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@fauziriski.my.id',
            'role' => 'admin',
            'password' =>  bcrypt('fauzi123'),
        ]);

        $user->assignRole('admin');
    }
}
