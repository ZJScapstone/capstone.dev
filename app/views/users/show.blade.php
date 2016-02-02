@extends('layouts.master')

@section('bottom-script')
<script>
    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
</script>
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col l6">
                @if($user->img_path)
                    <img style="max-width: 200px;height: 200px;"src="{{ $user->img_path }}" alt="" class="materialboxed">
                @else
                    <img style="max-width: 200px;height: 200px;" src="/img/praykitten.png" alt="" class="materialboxed">
                @endif
            </div>
            <div class="col l6">
                <h3>{{{ $user->email }}} </h3>
            </div>
        </div>

        <div class="row">
            <div class="col m4">
                <h2>Posts</h2>
                @forelse($user->posts as $post)
                    <div class="section">
                    <h6>
                        <a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}}</a>
                    </h6>
                    @if(Confide::user() && Confide::user()->id == $post->user_id)
                        <a href="{{ action('PostsController@edit', $post->id) }}" class="btn red">Edit This Post</a>
                    @endif
                    </div>
                    <div class="divider"></div>
                @empty
                    <p>This user has no posts yet.</p>
                @endforelse
            </div>
            <div class="col m8">
                <h2>Pets</h2>
                <div class="row">
                @foreach( $user->pets as $index => $pet )
                    @if($index % 2 == 0)
                        <div class="row"></div>
                    @endif
                    <div class="col m6">
                        <div class="card hoverable">
                            @if ($pet->images->count() > 0)
                                <div class="card-image ">
                                    <img src="/{{ $pet->images->first()->img_path }}">
                                </div>
                            @endif
                            <div class="card-content">
                                <p>
                                    <a href="{{action('PetsController@show', $pet->id)}}">{{{ $pet->name }}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>

    </div>
@stop