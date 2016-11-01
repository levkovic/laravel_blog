<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories = array('Music', 'Images', 'Video', 'Games', 'Programming');
    	foreach ($categories as $category) {
    		DB::table('categories')->insert([
            'name' => $category
        ]);
    	}
         
    }
}
