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
    	for($i=0; $i <15; $i++){
            DB::table('posts')->insert([
            	'title' => str_random(10),
            	'body' => "Quisque suscipit, purus id pulvinar rutrum, lectus turpis sodales nisi, vel rutrum sapien nisl vitae magna. Nullam interdum, felis et vulputate convallis, est ipsum ultrices arcu, ac cursus purus mauris vel sem. Maecenas volutpat diam eget odio dapibus aliquam. Duis eu congue lacus, non sollicitudin quam. Ut sit amet libero vulputate elit dictum consequat. Curabitur erat mauris, eleifend vitae cursus nec, mollis ut nisl. Cras ipsum arcu, blandit vitae bibendum nec, bibendum quis libero. Vivamus purus diam, mattis a maximus quis, hendrerit a erat. Sed dignissim vulputate mi, quis vestibulum augue consectetur et. Curabitur ornare neque ac elementum dictum. Suspendisse tortor augue, dapibus sed nisl sit amet, tempus imperdiet mi. Donec lacinia at sem nec sodales. Quisque eu rutrum turpis, at feugiat arcu. Nullam ut tellus sit amet nisi faucibus congue. Praesent sit amet viverra nisl. Integer turpis velit, posuere finibus gravida nec, lobortis nec arcu.
                
                                    Vivamus sed sapien in dui fermentum iaculis. Curabitur sagittis vehicula consectetur. Sed vitae efficitur arcu, imperdiet pellentesque risus. Nulla pellentesque sed turpis non tristique. Cras scelerisque metus id justo ornare consequat. Proin aliquet tincidunt orci, quis consequat massa aliquam non. Aenean sed libero ut orci semper dapibus.
                
                                    Nunc eget turpis id enim ornare cursus. Nullam felis augue, ornare id turpis eu, dapibus venenatis diam. In accumsan augue at nibh mollis posuere. Curabitur aliquam, risus ac fringilla dictum, nisi justo blandit nibh, in porttitor turpis odio efficitur diam. Maecenas congue, purus ut mollis congue, diam nisi varius odio, quis faucibus arcu elit vel ligula. Duis accumsan iaculis mauris, et pretium lacus fermentum quis. Curabitur at nunc ac lorem pharetra vehicula quis et tortor. Cras erat augue, fringilla porta sem et, sodales vehicula elit. Vestibulum elementum auctor arcu, in ornare odio iaculis vel. Ut libero justo, imperdiet sit amet leo sed, euismod suscipit lacus. Proin ut sapien sem. Donec sollicitudin faucibus turpis, eu pharetra urna eleifend a. Mauris ante ex, tempor ut felis a, pharetra pharetra dui. Morbi ut tortor est.
                
                                        Proin molestie felis lacus, ac semper risus ornare id. Curabitur porta auctor sapien nec commodo. Vivamus sit amet consequat ante. Etiam mollis eget risus id scelerisque. Proin et tempus velit, id aliquam ex. Sed convallis, sem ac ornare scelerisque, magna lacus ultricies ante, a rutrum metus leo et arcu. Donec fermentum elit et augue interdum feugiat. Maecenas pharetra dapibus arcu ut mattis. Praesent cursus arcu sit amet accumsan pharetra. Donec leo libero, scelerisque eget congue vel, sodales a sapien. Curabitur nec ipsum a odio pretium vestibulum nec eu nisi.
                
                                        Cras quis nisi ultricies, faucibus libero et, condimentum lectus. Integer non sem quis elit efficitur accumsan sed id diam. Nunc id erat eu arcu rutrum tincidunt vel vel leo. Curabitur vel massa ultrices, sollicitudin magna sed, fringilla sapien. Vestibulum arcu elit, egestas quis mollis ac, sollicitudin in tortor. Praesent condimentum imperdiet ligula, sed aliquam nibh imperdiet a. Nulla consequat pulvinar consectetur. Nulla dapibus consectetur risus, at sagittis quam tincidunt in. Proin egestas tristique velit. Donec libero libero, ullamcorper vel feugiat sit amet, facilisis et risus. Nullam quis arcu eget orci posuere ornare vitae eget mi. Morbi massa arcu, dapibus et finibus vitae, viverra ornare mi. Morbi egestas urna lacus, id tristique turpis volutpat sit amet. Sed id molestie metus, sit amet malesuada nisl. In sed tempus tortor, in sagittis lacus. Sed nisl dolor, venenatis id felis eu, pellentesque tincidunt nisi.",
            	'slug' => "slug-$i"
            	]);
		}
    }
}
