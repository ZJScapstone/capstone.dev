<?php


class EntrustTableSeeder extends Seeder {

    public function run()
    {
        /**
         * ------------------------ Role Definitions ------------------------
         */
        
        $admin = new Role();

        $admin->name         = 'administrator';
        $admin->display_name = 'Administrator';
        $admin->description  = 'master admin';
        $admin->save();

        $user = new Role();

        $user->name         = 'user';
        $user->display_name = 'User';
        $user->description  = 'Generic user';
        $user->save();

        /**
         * --------------------- Permission Definitions ---------------------
         */

        $editAllPosts = new Permission();

        $editAllPosts->name         = 'edit_all_posts';
        $editAllPosts->display_name = 'Can Edit All Posts';
        $editAllPosts->description  = 'permission for the master admin to be able to edit all posts';
        $editAllPosts->save();

        $editAllUsers = new Permission();

        $editAllUsers->name         = 'edit_all_users';
        $editAllUsers->display_name = 'Can Edit All Users';
        $editAllUsers->description  = 'Able to edit all user profiles and information';
        $editAllUsers->save();

        $editAllRoles = new Permission();

        $editAllRoles->name         = 'edit_all_roles';
        $editAllRoles->display_name = 'Can Edit All Roles';
        $editAllRoles->description  = 'Able to add or remove any role for any user';
        $editAllRoles->save();

        $editOwnPosts = new Permission();

        $editOwnPosts->name         = 'edit_own_posts';
        $editOwnPosts->display_name = 'Can Edit Own Posts';
        $editOwnPosts->description  = 'Users can edit their own posts';
        $editOwnPosts->save();

        $editOwnProfile = new Permission();

        $editOwnProfile->name         = 'edit_own_profile';
        $editOwnProfile->display_name = 'Can Edit Own Profile';
        $editOwnProfile->description  = 'Users can edit their own profiles';
        $editOwnProfile->save();

        $createPost = new Permission();

        $createPost->name         = 'create_post';
        $createPost->display_name = 'Can Create Post';
        $createPost->description  = 'Able to create a post';
        $createPost->save();

        /**
         * ----------------------- Attatch Permissions -----------------------
         */
        
        $admin->attatchPermissions([
            $editAllPosts,
            $editAllUsers,
            $editAllRoles,
            $editOwnPosts,
            $editOwnProfile,
            $createPost,
        ]);

        $user->attatchPermissions([
            $editOwnPosts,
            $editOwnProfile,
            $createPost,
        ]);
    }

}
