<nav class="navbar navbar-expand-sm bg-light">

    <div class="container-fluid">
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? "active" : '' }}" href="/">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/about') ? 'active' : '' }}" href="about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product">product</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="post">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contect">Contect</a>
          </li>
      </ul>
    </div>
  
  </nav>