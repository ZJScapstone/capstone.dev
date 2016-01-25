<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        $user = User::firstOrFail();

        $post1 = new Post; 
            $post1->title = 'Kitten Mittens!'; 
            $post1->body = 'They are amazing! They\'re having a sale today over at ...';
            $post1->user_id = $user->id;
            $post1->post_type_id = '3';
            $post1->save();

        $post2 = new Post; 
            $post2->title = 'Saturday Adoption Event'; 
            $post2->body = 'Free cats, at my house!';
            $post2->user_id = $user->id;
            $post2->post_type_id = '2';
            $post2->save();

        $post3 = new Post; 
            $post3->title = 'How to feed a baby kitten.'; 
            $post3->body = 'Now that you are the proud caretaker of an infant kitten, there are ...';
            $post3->user_id = $user->id;
            $post3->post_type_id = '1';
            $post3->save();
    }
}