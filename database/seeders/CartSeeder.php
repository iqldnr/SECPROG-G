<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cart = cart::create(
            [
                'userid' => 'user1',
                'itemid' => 'item1',
                'jumlah' => 3
            ]
        );
        $cart = cart::create(
            [
                'userid' => 'user1',
                'itemid' => 'item2',
                'jumlah' => 5
            ]
        );
        $cart = cart::create(
            [
                'userid' => 'user2',
                'itemid' => 'item2',
                'jumlah' => 3
            ]
        );
        $cart = cart::create(
            [
                'userid' => 'user3',
                'itemid' => 'item3',
                'jumlah' => 3
            ]
        );
        $cart = cart::create(
            [
                'userid' => 'user1',
                'itemid' => 'item3',
                'jumlah' => 4
            ]
        );
        $cart->save();
        
    }
}
