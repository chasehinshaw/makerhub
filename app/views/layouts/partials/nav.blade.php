<header class="main-header">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">

      <header class="navbar-header">
        <!-- LOGO -->
        <a class="navbar-brand" href=" {{ Auth::check() ? route('ideas_path') : route('home') }} ">MAKERHUB</a>
        <!-- @resposive menu btn  -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
          <span class="sr-only">Toggle navigation</span>
        </button>
      </header>

      <div class="collapse navbar-collapse" id="navbar-collapse-2">
        <ul class="nav navbar-nav navbar-main">
          <li class="active">
            {{-- link_to_route('profile_path', ' MyHub', $currentUser->username) --}}
          </li>
          
          <li>
            {{ link_to_route('explore_path', 'Explore') }}
          </li>

          <li>
            {{ link_to_route('learn_path', 'Learn') }}
          </li>
        </ul>

        <!-- Right Side Navigation -->
        
        <ul class="nav navbar-nav navbar-right">

          @if ($currentUser)
          
            <li class="dropdown">

              <a data-toggle="dropdown" class="dropdown-toggle" href="">
                <img class="nav-gravatar" src="{{ $currentUser->present()->gravatar }}" alt=" {{ $currentUser->username }} ">
                {{ $currentUser->username }} <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li>
                  {{ link_to_route('profile_path', 'Your Profile', $currentUser->username) }}
                </li>
                <li>
                  {{ link_to_route('subscriptions_path', 'Your Subscriptions') }}
                </li>
                <li class="divider"></li>
                <li>
                  {{ link_to_route('logout_path', 'Logout') }}
                </li>
              </ul>
            </li>
          @else 
            {{ link_to_route('register_path', 'Register!', null, ['class' => 'btn btn-info btn-xs navbar-btn mhm']) }}
            {{ link_to_route('login_path', 'Sign In', null, ['class' => 'nav-login']) }}
          @endif
        </ul>

      </div><!-- /.navbar-collapse -->
    </div>
  </nav><!-- /navbar -->
</header>