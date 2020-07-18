<?php

use Illuminate\Database\Seeder;
// use App\Models\User;
// use App\Models\Category;
// use App\Models\Post;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Models\Post::class,100)->create();
        // $array_user = User::inRandomOrder()->limit(5)->select('id')->get();
        // $array_category = Category::inRandomOrder()->limit(15)->select('id')->get();
        // foreach ($array_user as $user) {
        // 	foreach ($array_category as $category) {
        // 		Post::insert([
        // 			'created_by' => $user->id,
        // 			'category_id' => $category->id,

        // 		]);
        // 	}
        // }
    }
}
