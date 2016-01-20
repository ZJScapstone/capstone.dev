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

        $shelterAdmin = new Role();

        $shelterAdmin->name         = 'shelter_admin';
        $shelterAdmin->display_name = 'Shelter Administrator';
        $shelterAdmin->description  = 'Administrator for a specific shelter';
        $shelterAdmin->save();

        $user = new Role();

        $user->name         = 'user';
        $user->display_name = 'User';
        $user->description  = 'Generic user';
        $user->save();

        $shelterUser = new Role();

        $shelterUser->name         = 'shelter_user';
        $shelterUser->display_name = 'Shelter User';
        $shelterUser->description  = 'A member of a shelter';
        $shelterUser->save();

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

        $editShelterRoles = new Permission();

        $editShelterRoles->name         = 'edit_shelter_roles';
        $editShelterRoles->display_name = 'Can Edit Shelter Roles';
        $editShelterRoles->description  = 'Able to add or remove the shelter admin role from any shelter user assiociated with that shelter, add the shelter user role to any user, and remove the shelter user role from any user associated with that shelter';
        $editShelterRoles->save();

        $editShelter = new Permission();

        $editShelter->name = 'edit_shelter';
        $editShelter->display_name = 'Can Edit Shelter';
        $editShelter->name = 'Able to edit shelter information';
        $editShelter->save();

        $editShelterPosts = new Permission();

        $editShelterPosts->name         = 'edit_shelter_posts';
        $editShelterPosts->display_name = 'Can Edit Shelter Posts';
        $editShelterPosts->description  = 'Able to edit all the posts associated with a given shelter';
        $editShelterPosts->save();

        $addShelterToPost = new Permission();

        $addShelterToPost->name         = 'add_shelter_to_post';
        $addShelterToPost->display_name = 'Can Add A Shelter To A Post';
        $addShelterToPost->description  = 'Able to associate a shelter with a post';
        $addShelterToPost->save();

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

        $createShelter = new Permission();

        $createShelter->name = 'create_shelter';
        $createShelter->display_name = 'Can Create A Shelter';
        $createShelter->description = 'Able to create a shelter';
        $createShelter->save();

        /**
         * ----------------------- Attatch Permissions -----------------------
         */
        
        $admin->attatchPermissions([
            $editAllPosts,
            $editAllUsers,
            $editAllRoles,
            $editShelterRoles,
            $editShelter,
            $editShelterPosts,
            $addShelterToPost,
            $editOwnPosts,
            $editOwnProfile,
            $createPost,
            $createShelter
        ]);

        $shelterAdmin->attatchPermissions([
            $editShelterRoles,
            $editShelter,
            $editShelterPosts,
            $addShelterToPost,
            $editOwnPosts,
            $editOwnProfile,
            $createPost,
            $createShelter            
        ]);

        $shelterUser->attatchPermissions([
            $addShelterToPost,
            $editOwnPosts,
            $editOwnProfile,
            $createPost,
            $createShelter 
        ]);

        $user->attatchPermissions([
            $editOwnPosts,
            $editOwnProfile,
            $createPost,
            $createShelter
        ]);
    }

}
