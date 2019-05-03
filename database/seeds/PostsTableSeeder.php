<?php

use App\Tag;
use App\Post;
use App\Category;
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
        $category1 = Category::create([
            'name' => 'News',
        ]);
        $category2 = Category::create([
            'name' => 'Marketing',
        ]);
        $category3 = Category::create([
            'name' => 'Partnership',
        ]);

        $post1 = Post::create([
            'title' => 'We relocated our office to a new garage',
            'description' => 'Together. Great. So good was saying, that can\'t first let called air divide stars male isn\'t i. Herb third let may fourth divide.',
            'content' => 'Together. Great. So good was saying, that can\'t first let called air divide stars male isn\'t i. Herb third let may fourth divide. Greater gathering land you\'ll i their beast have. She\'d form sea it wherein fowl, spirit creeping living. Likeness creepeth you hath heaven. Likeness, moveth fruitful behold. Open evening a air us behold. Saying above moving second a subdue likeness after also second.',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg'
        ]);

        $post2 = Post::create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'description' => 'Together. Great. So good was saying, that can\'t first let called air divide stars male isn\'t i. Herb third let may fourth divide.',
            'content' => 'Together. Great. So good was saying, that can\'t first let called air divide stars male isn\'t i. Herb third let may fourth divide. Greater gathering land you\'ll i their beast have. She\'d form sea it wherein fowl, spirit creeping living. Likeness creepeth you hath heaven. Likeness, moveth fruitful behold. Open evening a air us behold. Saying above moving second a subdue likeness after also second.',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg'
        ]);

        $post3 = Post::create([
            'title' => 'Best practices for minimalist design',
            'description' => 'Together. Great. So good was saying, that can\'t first let called air divide stars male isn\'t i. Herb third let may fourth divide.',
            'content' => 'Together. Great. So good was saying, that can\'t first let called air divide stars male isn\'t i. Herb third let may fourth divide. Greater gathering land you\'ll i their beast have. She\'d form sea it wherein fowl, spirit creeping living. Likeness creepeth you hath heaven. Likeness, moveth fruitful behold. Open evening a air us behold. Saying above moving second a subdue likeness after also second.',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg'
        ]);

        $post4 = Post::create([
            'title' => 'Congratulate and thank to Maryam for joining our team',
            'description' => 'Together. Great. So good was saying, that can\'t first let called air divide stars male isn\'t i. Herb third let may fourth divide.',
            'content' => 'Together. Great. So good was saying, that can\'t first let called air divide stars male isn\'t i. Herb third let may fourth divide. Greater gathering land you\'ll i their beast have. She\'d form sea it wherein fowl, spirit creeping living. Likeness creepeth you hath heaven. Likeness, moveth fruitful behold. Open evening a air us behold. Saying above moving second a subdue likeness after also second.',
            'category_id' => $category2->id,
            'image' => 'posts/4.jpg'
        ]);

        $tag1 = Tag::create([
            'name' => 'Job'
        ]);

        $tag2 = Tag::create([
            'name' => 'customers'
        ]);

        $tag3 = Tag::create([
            'name' => 'record'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag1->id, $tag3->id]);
    }
}
