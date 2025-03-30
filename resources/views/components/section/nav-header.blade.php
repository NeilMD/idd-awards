<!-- nav -->
<nav>
    <a href="{{ url('/') }}">
        <img src="{{ Vite::asset('resources/img/Asset 8.png') }}" class="logo" id="logo" data-hover-logo="{{ Vite::asset('resources/img/logo-hover.png') }}"
      />
    </a>
    <div class="nav-links">
        <a href="{{ url('/') }}" class="{{ $active == '' ? 'active' : '' }}">Home</a>
        <a href="{{ url('awards') }}" class="{{ $active == 'awards' ? 'active' : '' }}">Awards</a>
        <a href="{{ url('time-capsule') }}" class="{{ $active == 'time-capsule' ? 'active' : '' }}">Time Capsule</a>
    </div>
    <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <button class="contact-btn">Contact</button>
</nav>