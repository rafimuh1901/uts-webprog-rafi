<link rel="stylesheet" href="{{ asset('assets/css/components/menuBtn.css') }}">
<div class="menu-btn" id="menu-btn">
  <a href="{{ route('menu') }}">Coffee</a>
</div>
<script>
  document.getElementById("menu-btn").style.backgroundColor = (color == "Gold") ? "#C6A961" : "#006F42";
</script>