<!-- SUBSCRIBE ACCORDIAN LIST -->
<li class="subscribe-list nav-header">
    <span>
      Your Subscriptions
      <a href="#"><span class="icon fui-gear pull-right"></span></a>
    </span>
</li>

<!-- USERS accordian list -->
<li class="subscribe-list nav nav-list">
	<!-- Accordian TITLE -->
  <li class="accordian-title nav-header" data-toggle="collapse" data-target="#sidebar-subscribe-users">
    <a href="#" data-toggle="collapse-disabled">
    <span>
      Users
      <span class="icon fui-triangle-down-small pull-right"></span>
    </span>
    </a>
  </li>
  <ul class="accordian-list nav nav-list collapse" id="sidebar-subscribe-users">
		<!-- Foreach $users as $user (limit 6) -->
    <li class="accorian-item">
      <a href="{{-- $user->profile --}}" title="">
      <span>
        <img src="{{-- $user->img --}}" class="avatar-tiny" alt="">
        Chase Hinshaw {{-- $user->name --}}
        <span class="fui-arrow-right pull-right"></span>
      </span>
      </a>
    </li>
		<!-- END foreach -->
		<li>
      <a href="#">
        See All
      </a>
    </li>
  </ul>
</li>

<!-- PROJECTS accordian list -->
<li class="subscribe-list nav nav-list">
	<!-- Accordian TITLE -->
  <li class="accordian-title nav-header" data-toggle="collapse" data-target="#sidebar-subscribe-projects">
    <a href="#" data-toggle="collapse">
    <span>
      Projects
      <span class="icon fui-triangle-down-small pull-right"></span>
    </span>
    </a>
  </li>
  <ul class="accordian-list nav nav-list collapse" id="sidebar-subscribe-projects">
		<!-- Foreach $projects as $project (limit 6) -->
    <li class="accorian-item">
      <a href="{{-- $project->profile --}}" title="">
      <span>
        <img src="{{-- $project->img --}}" class="avatar-tiny" alt="">
        This is a project title {{-- $project->name --}}
        <span class="fui-arrow-right pull-right"></span>
      </span>
      </a>
    </li>
		<!-- END foreach -->
		<li>
      <a href="#">
        See All
      </a>
    </li>
  </ul>
</li>

<!-- OBJECTS accordian list -->
<li class="subscribe-list nav nav-list">
	<!-- Accordian TITLE -->
  <li class="accordian-title nav-header" data-toggle="collapse" data-target="#sidebar-subscribe-objects">
    <a href="#" data-toggle="collapse">
    <span>
      Objects
      <span class="icon fui-triangle-down-small pull-right"></span>
    </span>
    </a>
  </li>
  <ul class="accordian-list nav nav-list collapse" id="sidebar-subscribe-objects">
		<!-- Foreach $objects as $object (limit 6) -->
    <li class="accorian-item">
      <a href="{{-- $object->profile --}}" title="">
      <span>
        <img src="{{-- $object->img --}}" class="avatar-tiny" alt="">
        This is an object title {{-- $object->name --}}
        <span class="fui-arrow-right pull-right"></span>
      </span>
      </a>
    </li>
		<!-- END foreach -->
		<li>
      <a href="#">
        See All
      </a>
    </li>
  </ul>
</li>