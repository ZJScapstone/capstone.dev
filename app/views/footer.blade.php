<nav class="deep-orange darken-3">
    <p class="left">
        <a href="{{{ action('HomeController@showHome') }}}">Furry-Tail Endings</a>
    </p>
    <p class="right">
    	@if(!Confide::user())
        <a href="{{{ action('UsersController@login') }}}" >Log In</a> / <a href="{{{ action('UsersController@create') }}}">Sign Up</a>
        @endif
        @if(Confide::user())
        <a href="{{{ action('UsersController@logout')}}}">Logout</a> / <a href="{{{ action('UsersController@showProfile') }}}">Your Profile</a>
        @endif
    </p>
</nav>