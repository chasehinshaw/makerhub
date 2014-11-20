<li class="nav-header">MyHub</li>
<li class="active">
  <a href="/ideas">
    <span class="fui-star-2 text-default"></span>
    My Feed
  </a>
</li>
<li class="">
  <a href="/ideas">
    <i class="fa fa-lightbulb-o"></i>
    Ideas
  </a>
</li>
<li class="">
  <a href="{{ URL::route('profile_path', $currentUser->username) }}">

    <span class="fui-user text-default"></span>
    Profile
  </a>
</li>

<li class="disabled">
  <a href="">
    <span class="fui-check "></span>
    Notifcations
  </a>
</li>

<li class="">
  <a href="/subscriptions">
    <span class="fui-check "></span>
    Subscriptions
  </a>
</li>



<!-- end Secondary Navigation -->
