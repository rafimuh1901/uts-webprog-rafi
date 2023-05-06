<link rel="stylesheet" href="{{ asset('assets/css/components/navbar.css') }}">
<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex">
  <div class="d-flex">
    <img class="mr-3" src="{{ asset('assets/logo.png') }}" alt="Starbucks Logo" width="52px" height="52px">
      @php
        use Carbon\Carbon;
        $now = Carbon::now();
    
        if ($now->hour < 12) {
            $greetingMessage = 'Good Morning';
        } elseif ($now->hour > 18) {
            $greetingMessage = 'Good Evening';
        } else {
            $greetingMessage = 'Good Afternoon';
        }
      @endphp
      <div class="sub-left-nav">
          <p>{{ $greetingMessage . ', ' . @$user->name }}</p>
          <div class="d-flex">
            <b>
                <p id="user-level">{{ @$user->level . ' Level' }}</p>
            </b>
            <div class="d-flex align-items-center ml-auto">
              <p class="m-0 mr-2">{{ @$user->points }}</p>
              <img src="{{ asset('assets/star.png') }}" alt="" width="18px" height="18px">
          </div>
          </div>
      </div>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="{{ route('transaction.index', ['id' => $user->id]) }}">Transaction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Switch Account</a>
          </li>
      </ul>
  </div>
</nav>

<script>
    let warnaNavbar = {{ Js::from(@$color) }};
    document.getElementById("user-level").style.color = (warnaNavbar == "Gold") ? "#C6A961" : "#006F42";
</script>
