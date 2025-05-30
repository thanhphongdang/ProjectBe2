<!-- Navbar -->
<nav class="navbar">
  <ul class="nav-list">
    <li><a href="{{route('product')}}">Home</a></li>
    <li><a href="{{ route('user.datlichxemxe') }}">Make an Appointment</a></li>
    <li><a href="{{ route('map') }}">Map</a></li>
    <li><a href="{{ route('makeappointment') }}">Vehicle Maintenance</a></li>
    <li><a href="#">Tax calculation</a></li>
    <li><a href="{{ route('chat.customer') }}">Chat</a></li>
    <li>
    <a href="{{ route('cart.view') }}">
        🛒 Shopping Cart
        ({{ \App\Models\Cart::where('ID_Customer', auth()->id())->sum('Quantity') }})
    </a>
</li>

    </li>
    <li>
      <input type="text" placeholder="Search...">
      <button>🔍</button>
    </li>
    @auth
    <!-- User Account -->
    <li class="dropdown user-menu">
      <button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="{{ asset('image/' . Auth::user()->image) }}" class="user-image" alt="User Image" width="50px"
        height="50px" style="border-radius: 50%; object-fit: cover;" />
      </button>
      <ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
      <!-- User image -->
      <li class="dropdown-header">
        <div class="d-inline-block">
        <h5>
          <h5>{{Auth::user()->name }}</h5>
        </h5>

        <p class="pt-2">
        <p>{{ Auth::user()->email }}</p>
        </p>
        </div>
      </li>
      <li>
        <a href="{{ route('helo', ['id' => Auth::user()->id]) }}">
        <i class="mdi mdi-account"></i> My Profile
        </a>
      </li>
      <li class="dropdown-footer">
        <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="dropdown-item text-white">
          <i class="mdi mdi-logout"></i> Log Out
        </button>
        </form>

      </li>
      </ul>
    </li>
  @endauth
  </ul>
</nav>

<!-- Slider -->