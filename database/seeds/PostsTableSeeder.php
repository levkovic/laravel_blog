<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=90; $i <100; $i++){
        DB::table('posts')->insert([
        	'id' => "$i",
        	'title' => 'title',
        	'body' => 'body',
        	'slug' => "slug-$i"
        	]);
		}
    }
}
