<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
            'name'=>'Super heroes',
            'slug'=>'super-heroes',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ut cumque officia incidunt maxime',
            'color'=>'#440022'
        ],
        [
            'name'=>'Geek',
            'slug'=>'geek',
            'description'=> 'Lorem ipsum dolor jnfte amet consectetur hgntkw elit. Est ut cumque offisaycia incidunt maxime',
            'color'=>'#445500'
            
    ]);
    
    Category::insert($data);
       
    }
}
