<?php

class PostTypeTableSeeder extends Seeder {

    public function run()
    {

        $posttype1 = new PostType;
        $posttype1->post_type = 'doc';
        $posttype1->save();

        $posttype2 = new PostType;
        $posttype2->post_type = 'forum';
        $posttype2->save();

        $posttype3 = new PostType;
        $posttype3->post_type = 'event';
        $posttype3->save();

    }
}