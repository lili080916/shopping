<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
            'name'=>'Playera 1',
            'slug'=>'playera-1',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ut cumque officia incidunt maxime',
            'extract'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'price'=> 275.00,
            'image'=>'http://cdn.somethinggeeky.com/assets/images/products/amazonlarge/4ffed02898033.jpg',
            'visible'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'category_id'=> 1

        ],
        [
            'name'=>'Playera 2',
            'slug'=>'playera-2',
            'description'=> 'Lorem ipsum dolor jnfte amet consectetur hgntkw elit. Est ut cumque offisaycia incidunt maxime',
            'extract'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'price'=> 200.00,
            'image'=>'https://rlv.zcache.com/funny_computer_geek_t_shirt_tshirt-r537052a6a7b94b028e47b274c099fe24_804g5_324.jpg',
            'visible'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'category_id'=> 2
            
    ],
        [
            'name'=>'Playera 3',
            'slug'=>'playera-3',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ut cumque officia incidunt maxime',
            'extract'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'price'=> 215.00,
            'image'=>'https://carlosdragonne.files.wordpress.com/2013/04/546152_10151380582981704_1003509056_n.jpg',
            'visible'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'category_id'=> 2
        ],
        [
            'name'=>'Playera 4',
            'slug'=>'playera-4',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ut cumque officia incidunt maxime',
            'extract'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'price'=> 255.00,
            'image'=>'https://carlosdragonne.files.wordpress.com/2013/04/546152_10151380582981704_1003509056_n.jpg',
            'visible'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'category_id'=> 1
        ]

);
    
    Product::insert($data);
    }
}
