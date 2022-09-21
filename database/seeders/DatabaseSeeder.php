<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        for ($i=1; $i<10;$i++){
            \DB::table('groups')->insert([
                'name' => "Group{$i}"
            ]);
            for ($u=1;$u<10;$u++){
                \DB::table('users')->insert([
                    'name' => "User{$u}Group{$i}",
                    'email' => "User{$u}@group{$i}.com",
                    'password' => bcrypt('0000'),
                    'group_id' => $i
                ]);
            }
        }
    }
}
