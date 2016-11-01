<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = array('food', 'sport', 'art', 'web', 'style');
    	foreach ($tags as $tag) {
    		DB::table('tags')->insert([
            'name' => $tag
        ]);
    	}
    }
}
