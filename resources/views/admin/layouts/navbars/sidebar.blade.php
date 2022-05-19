<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ request()->routeIs('dashboard') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ request()->routeIs('dashboard.user.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard.user.index') }}">
          <span class="sidebar-mini">
            <i class="material-icons">supervised_user_circle</i>
            <div class="ripple-container"></div>
          </span>
          <span class="sidebar-normal"> Users </span>
        </a>
      </li>
      <li class="nav-item{{ request()->routeIs('dashboard.post.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard.post.index') }}">
          <span class="sidebar-mini">
            <i class="material-icons">library_books</i>
            <div class="ripple-container"></div>
          </span>
          <span class="sidebar-normal"> Posts </span>
        </a>
      </li>
      <li class="nav-item{{ request()->routeIs('dashboard.post_category.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard.post_category.index') }}">
          <span class="sidebar-mini">
            <i class="material-icons">folder</i>
            <div class="ripple-container"></div>
          </span>
          <span class="sidebar-normal"> Category Post </span>
        </a>
      </li>
    </ul>
  </div>
</div>
