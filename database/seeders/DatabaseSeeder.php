<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\items;


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
        $item = items::create(
            [
            'name' => 'Jagung',
            'uploader' => 'Jajang',
            'price' => 2000,
            'stock' => 20,
            'description' => 'Jagung asli Jombang'
            ]);
        $item = items::create(
            [
                'name' => 'Kacang',
                'uploader' => 'Monang',
                'price' => 1000,
                'stock' => 30,
                'description' => 'Jagung asli Jombang'
            ]);
        $item = items::create(
            [
                'name' => 'Beras',
                'uploader' => 'Samsoe',
                'price' => 3000,
                'stock' => 40,
                'description' => 'Jagung asli Jombang'
                ]);
        $item = items::create(
            [
                'name' => 'Kedelai',
                'uploader' => 'Dirman',
                'price' => 8000,
                'stock' => 50,
                'description' => 'Jagung asli Jombang'
                ]);

        $item->timestamps = false;
        $item->save();
    }
}
