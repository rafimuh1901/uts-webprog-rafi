<link rel="stylesheet" href="{{ asset('assets/css/components/navbar.css') }}">
{{-- <nav>
  <div class="left-nav">
    <img class="mr-3" src="{{ asset('assets/logo.png') }}" alt="Starbucks Logo" width="52px" height="52px">  
    @php
      use Carbon\Carbon;
      $now = Carbon::now();

      if ($now->hour < 12) {
        $greetingMessage = 'Good Morning';
      } else if ($now->hour > 18) {
        $greetingMessage = 'Good Evening';
      } else {
        $greetingMessage = 'Good Afternoon';
      }
    @endphp
    <div class="sub-left-nav">
      <p>{{ $greetingMessage.', '.$username }}</p>
      <b>
        <p id="user-level">{{ $userLevel." Level" }}</p>
      </b>
    </div>
  </div>
  <div class="right-nav">
    <div class="sub-right-nav"><a href="">Profile</a></div>
    <div class="sub-right-nav"><a href="">Transaction</a></div>
    <div class="sub-right-nav"><a href="">Swtich Account</a></div>
  </div>
</nav> --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img class="mr-3" src="{{ asset('assets/logo.png') }}" alt="Starbucks Logo" width="52px" height="52px">
    </a>
    @php
        use Carbon\Carbon;
        $now = Carbon::now();
        $user = config('global.activeUser');
        echo $user;
        if ($now->hour < 12) {
            $greetingMessage = 'Good Morning';
        } elseif ($now->hour > 18) {
            $greetingMessage = 'Good Evening';
        } else {
            $greetingMessage = 'Good Afternoon';
        }
    @endphp
    <div class="sub-left-nav">
        {{ $user }}
        <p>{{ $greetingMessage . ', ' . $activeUser->name }}</p>
        <b>
            <p id="user-level">{{ $activeUser->level . ' Level' }}</p>
        </b>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Profile <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Transaction</a>
            </li>
            <li class="nav-item">
              <button class="nav-link" id="switch-account">Switch Account</button>
              {{-- <form action="{{ route('switchAccount') }}" method="post" id="form-switch">
                  @csrf
                  <input type="hidden" name="id" value="{!! $activeUser->id !!}" name="input-id">
                  <button type="submit" id="btn-switch">submit</button>
                  {!! @$id !!}
              </form> --}}
            </li>
            {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> --}}
        </ul>
    </div>
</nav>

<script>
    document.getElementById("user-level").style.color = (color == "Gold") ? "#C6A961" : "#006F42";
    $switchBtn = document.getElementById("switch-account");
</script>
