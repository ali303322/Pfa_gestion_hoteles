<nav>
    @auth
        <div class="nav__logo"><a href="{{ route('UserPage') }}"><img src="{{ asset('assets/photo_2024-06-27_17-57-40.jpg') }}" alt=""></a></div>
    @endauth
    @guest
        <div class="nav__logo"><a href="{{ route('main') }}"><img src="{{ asset('assets/photo_2024-06-27_17-57-40.jpg') }}" alt=""></a></div>
    @endguest
    <ul class="nav__links">
@auth
<li class="link"><a href="{{ route('UserPage') }}"><img src="{{ asset('assets/home.png') }}" alt="" style="width: 20px ; height : 20px ; margin:auto">Home</a></li>
@endauth
@guest
<li class="link"><a href="{{ route('main') }}"><img src="{{ asset('assets/home.png') }}" alt="" style="width: 20px ; height : 20px ; margin:auto">Home</a></li>
@endguest
      <li class="link"><a href="{{ route('main') }}"><img src="{{ asset('assets/g_translate_24dp_FILL0_wght400_GRAD0_opsz24_1.png') }}" alt="" style="width: 20px ; height : 20px ; margin:auto">Translate</a></li>
      {{-- <li class="link"><a href=""><img  src="assets/call-center.png" alt="" style="width: 25px ; height : 25px ; margin:auto">Assistance</a></li> --}}
     <li class="link"><a href="{{ route('Assistance') }}"><img src="{{ asset('assets/telephone.png') }}" alt="" style="width: 25px ; height : 25px ; margin:auto">Contact Us</a></li>
     @auth
     <li class="link"><a href="{{route('favoris.show', ['id' => Auth::user()->id]) }}"><img src="{{ asset('assets/heart.png') }}" alt="" style="width: 25px ; height : 25px ; margin:auto">Favories</a></li>
     <form method="POST" action="{{ route('login.logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
     @endauth
     @guest
     <li class="link"><a href="{{ route('UserPage')}}"><img  src="{{ asset('assets/enter.png') }}" alt="" style="width: 25px ; height : 25px ; margin:auto">Login</a></a></li>
     @endguest
    </ul>
  </nav>
