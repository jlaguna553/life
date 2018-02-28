<?php
 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
 
use App\Category;
 
class CategoryTableSeeder extends Seeder {
 
    /**
     * Run the Categories table seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Ramos', 
                'slug' => 'ramos', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
                'color' => '#440022'
            ],
            [
                'name' => 'Arreglos Florales', 
                'slug' => 'arreglos_florales', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
                'color' => '#445500'
            ],
            [
                'name' => 'Arreglos Rusticos', 
                'slug' => 'arreglos_rusticos', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
                'color' => '#445500'
            ]
        );
 
        Category::insert($data);
 
    }
}