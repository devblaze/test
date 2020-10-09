<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TestCompanies;
use phpseclib\Crypt\Hash;

class DatabaseSeeder extends Seeder
{
    // Easy find commit
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'test', 'email' => 'test@test', 'password' => Hash::make('test')]);
        TestCompanies::create(['name' => 'LIONCODE', 'address' => 'BALKAN', 'phone' => '2311111251']);
        TestCompanies::create(['name' => 'Goodys', 'address' => 'Aristotelous', 'phone' => '2310609503']);
        TestCompanies::create(['name' => 'Savikos', 'address' => 'Aristotelous', 'phone' => '2310669966']);
        TestCompanies::create(['name' => 'Shell', 'address' => 'Ilioupoli', 'phone' => '2310889955']);
        TestCompanies::create(['name' => 'Microsoft', 'address' => 'Kalamaria', 'phone' => '2310775566']);
        // \App\Models\User::factory(10)->create();
    }
}
