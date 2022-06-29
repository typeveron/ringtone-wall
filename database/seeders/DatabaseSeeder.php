<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Nature']);
        Category::create(['name' => 'Holidays']);
        Category::create(['name' => 'Music']);
        Category::create(['name' => 'Standard']);
        Category::create(['name' => 'Animals']);
        Category::create(['name' => 'Funny']);
        Category::create(['name' => 'SMS']);
        Category::create(['name' => 'Alarms']);
        Category::create(['name' => 'Children']);
        
        User::create([
            'name'=>'admin',
            'email'=>env('ADMIN_EMAIL'),
            'password'=>bcrypt(env('ADMIN_PASS')),
            'email_verified_at'=>NOW(),
        ]);
    }
}
