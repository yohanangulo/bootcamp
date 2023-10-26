<header>
  <h1>Courses websito</h1>
  <nav>
    <ul>
      <li>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
          Home
        </a>
      </li>
      <li>
        <a href="{{ route('courses.index') }}" class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">
          Courses
        </a>
      </li>
      <li>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">
          About
        </a>
      </li>
    </ul>
  </nav>
</header>
