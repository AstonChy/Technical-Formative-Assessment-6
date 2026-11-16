<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '0917 555 0101', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@example.com', 'phone' => '0918 555 0102', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Angela Reyes', 'email' => 'angela.reyes@example.com', 'phone' => '0919 555 0103', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Miguel Garcia', 'email' => 'miguel.garcia@example.com', 'phone' => '0920 555 0104', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Sofia Bautista', 'email' => 'sofia.bautista@example.com', 'phone' => '0921 555 0105', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('users')->insert([
            ['username' => 'ashtonchy', 'full_name' => 'Ashton Chy', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'rainierespino', 'full_name' => 'Rainier Espino', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'jaredmangaoang', 'full_name' => 'Jared Mangaoang', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'rashidadlus', 'full_name' => 'Rashid Adlus', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'chloenavarro', 'full_name' => 'Chloe Navarro', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
