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
        $item = items::create([
            'name' => 'Jagung',
            'uploader' => 'Jajang',
            'price' => 2000,
            'description' => 'Jagung asli Jombang'
        ]);

        $item->timestamps = false;
        $item->save();
    }
}
