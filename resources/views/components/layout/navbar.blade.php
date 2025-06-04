<nav class="navbar">
    <form class="navbar-search" role="search" aria-label="Site search">
        <svg width="32" height="32" fill="none" stroke="#f5ecd7" stroke-width="2" viewBox="0 0 24 24" style="margin-right: 0.5rem;"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        <input type="text" placeholder="Search..." aria-label="Search">
    </form>
    <div class="navbar-links">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        @auth
            <div class="navbar-user-menu">
                <span class="navbar-welcome">Welcome, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="navbar-logout-btn">Logout</button>
                </form>
            </div>
        @else
            <span class="navbar-guest">Viewing as Guest</span>
        @endauth
    </div>
</nav>
