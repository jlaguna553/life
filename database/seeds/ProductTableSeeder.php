<?php
 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
 
use App\Product;
 
class ProductTableSeeder extends Seeder {
 
	/**
	 * Run the Products table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'name' 			=> 'Arreglo 1',
				'slug' 			=> 'Arreglo-1',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Red_Batman_Graffiti_Logo_T_Shirt_hi_res.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'idCategory' 	=> 1
			],
			[
				'name' 			=> 'Arreglo 2',
				'slug' 			=> 'Arreglo-2',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 255.00,
				'image' 		=> 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Blue_Distressed_Superman_Logo_T_Shirt_hi_res.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'idCategory' 	=> 1
			],
			[
				'name' 			=> 'Arreglo 3',
				'slug' 			=> 'Arreglo-3',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 300.00,
				'image' 		=> 'http://img5a.flixcart.com/image/t-shirt/f/g/q/fsbk-bruce-lee-sayitloud-xl-700x700-imadtkffxfhgsday.jpeg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'idCategory' 	=> 1
			],
			[
				'name' 			=> 'Arreglo 4',
				'slug' 			=> 'Arreglo-4',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 475.00,
				'image' 		=> 'http://rlv.zcache.com/funny_computer_geek_t_shirt_tshirt-r537052a6a7b94b028e47b274c099fe24_804g5_324.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'idCategory' 	=> 2
			],
			[
				'name' 			=> 'Arreglo 5',
				'slug' 			=> 'Arreglo-5',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 280.00,
				'image' 		=> 'https://www.nerdyshirts.com/media/catalog/product/cache/1/image/400x445/9df78eab33525d08d6e5fb8d27136e95/g/e/geek_1.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'idCategory' 	=> 2
			],
			[
				'name' 			=> 'Arreglo 6',
				'slug' 			=> 'Arreglo-6',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'http://bobstshirtcompany.net/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/i/_/i_know_html.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'idCategory' 	=> 2
			],
			[
				'name' 			=> 'Arreglo 7',
				'slug' 			=> 'Arreglo-7',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'http://www.koszulkomat.eu/images4/preview/14/1430_7-0.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'idCategory' 	=> 1
			],
			[
				'name' 			=> 'Arreglo 8',
				'slug' 			=> 'Arreglo-8',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'http://cdn.somethinggeeky.com/assets/images/products/amazonlarge/4ffed02898033.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'idCategory' 	=> 2
			],
			
		);
 
		Product::insert($data);
 
	}
 
}