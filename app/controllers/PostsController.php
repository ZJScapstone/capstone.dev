<?php

class PostsController extends \BaseController {

	// public function __construct()
	// {
	// 	parent::construct();

	// 	$this->beforeFilter('auth', array('except' => array('index', 'show')));
	// }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $search = Input::get('search');


        if($search) {
            $data = [
                'docs' => Post::with('user', 'postType')->join('post_type', 'post_type_id', '=', 'post_type.id')
                    ->where('post_type', '=', 'doc')->where('title', 'like', "%$search%")->where('body', 'like', "%$search")->paginate(10),

                'forums' => Post::with('user', 'postType')->join('post_type', 'post_type_id', '=', 'post_type.id')
                    ->where('post_type', '=', 'forum')->where('title', 'like', "%$search%")->where('body', 'like', "%$search")->paginate(10),

                'events' => Post::with('user', 'postType')->join('post_type', 'post_type_id', '=', 'post_type.id')
                    ->where('post_type', '=', 'event')->where('title', 'like', "%$search%")->where('body', 'like', "%$search")->paginate(10)
            ];
        } else {
            $data = [
                'docs' => Post::with('user', 'postType')->join('post_type', 'post_type_id', '=', 'post_type.id')
                    ->where('post_type', '=', 'doc')->paginate(10),

                'forums' => Post::with('user', 'postType')->join('post_type', 'post_type_id', '=', 'post_type.id')
                    ->where('post_type', '=', 'forum')->paginate(10),

                'events' => Post::with('user', 'postType')->join('post_type', 'post_type_id', '=', 'post_type.id')
                    ->where('post_type', '=', 'event')->paginate(10)
            ];
        }

        return View::make('posts.index')->with($data);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
	    $data      = Input::all();
        $validator = Validator::make($data, Post::$rules);

        if($validator->fails() ) {
            Session::flash('message', 'Posting not created!');
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $post = new Post($data);
        $post->user_id = Confide::user()->id;

        $result = $post->save();

        if($result) {
            return Redirect::action('PostsController@index');
        } else {
            Session::flash('message', $result);
            return Redirect::back()->withInput();
        }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $postIdOrTitle
	 * @return Response
	 */
	public function show($postIdOrTitle)
	{
		if(is_numeric($postIdOrTitle) ) {

			$post = Post::with('postType')->where('id', '=', $postIdOrTitle)->first();

            if(!$post){
                App::abort(404);
                return Redirect::action('PostsController@index');
            }

		} else {
			$post = Post::with('postType')->where('slug_title', '=', $postIdOrTitle)->first();

			if(!$post){
                App::abort(404);
				return Redirect::action('PostsController@index');
			}

		}

		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$post = Post::find($id);

		return View::make('posts.edit')->with('post', $post);	
	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
        $data = Input::all();
        $validator = Validator::make($data, Post::$rules);

        if ( $validator->fails() ) {
            Session::flash('message', 'Posting not updated!');
            return Redirect::back()->withInput()->withErrors($validator);
        }

		$post->update($data);

		$post->save();

        Session::flash('message', 'Posting successfully updated');
		return Redirect::action('PostsController@show', $post->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();

        Session::flash('message', 'Posting successfully deleted.');
		return Redirect::action('PostsController@index');

	}
	
	public function view(Post $post)
	{
    // $post is an instance of Post that is returned from the Route::bind() method.
    return View::make('posts.view', ['post' => $post]);

	}


	protected function validateAndSave($post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

    	if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);   	 	
		} else {
	        $post->user_id = 1;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->post_type_id = Input::get('post_type_id');

			$userEmail = '';

			$result = $post->save();

			if($result) {
				return Redirect::action('PostsController@index');
			} else {
				return Redirect::back()->withInput();
			}
		}
	}
}
