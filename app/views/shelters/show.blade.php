<div class="container">
    <h2 class="center">{{{ $shelter->name }}}</h2>
    <p>
        <span class="left">{{{ $shelter->location }}}</span>
        <span class="right">{{{ $shelter->phone }}}</span>
    </p>
    <div class="row"></div> {{--clearfix--}}
    <p><a href="{{{ $shelter->url }}}">{{{ $shelter->url }}}</a></p>
    <p>{{{ $shelter->description }}}</p>
    <p>
        <ul>
            @foreach($shelter->users as $user)
                <li><a href="/users/{{$user->id}}">{{ $user->email }}</a></li>
            @endforeach
        </ul>
    </p>
</div>