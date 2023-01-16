<?php
declare(strict_types=1);
namespace Database\Seeders\os\startup\starup\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Castr\Domains\Shared\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sujan',
            'email' => 'sujan@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
