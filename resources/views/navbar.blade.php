<div class="navbar">
  <div class="nav-items">
  <ul>
    <li><a href="/" <?php if ($nav_here == 'nav-1') {echo 'id="en-cours"';} ?>>home</a></li>
    <li><a href="/tuto" <?php if ($nav_here == 'nav-2') {echo 'id="en-cours"';} ?>>tuto</a></li>
    <li><a href="/missions" <?php if ($nav_here == 'nav-3') {echo 'id="en-cours"';} ?>>missions</a></li>
    @if (!Auth::guest())
    <li>
      <a href="{{ route('logout') }}"
        class='nav-right'
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
    @else
    <li><a href="login"? class="nav-right">login</a></li>
    @endif
  </ul>
</div>
</div>
