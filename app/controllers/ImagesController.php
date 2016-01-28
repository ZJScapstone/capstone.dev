<?php

class ImagesController extends \BaseController {

    public function uploadPetImage()
    {
        $file = Input::file('file');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move('./img/uploads', $filename);

        $img = new Image();
        $img->img_path = '/img/uploads/' . $filename;
        $img->pet_id = Input::get('pet_id');
        $img->save();

        $response['success'] = true;

        return Response::json($response);
    }

    public function uploadUserImage()
    {
        $user = Confide::user();
        $user->img_path = $this->getAndMoveFile('file');

        if ($user->save()) {
            return Redirect::action('UsersController@show', $user->id);
        } else {
            throw new Exception("user image not updated!");
        }

    }

    private function getAndMoveFile($fileInput)
    {
        $file = Input::file($fileInput);
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move('./img/uploads', $filename);

        return $filename;
    }

    public function destroy($id)
    {
        Image::destroy($id);
        return Redirect::back();
    }

}