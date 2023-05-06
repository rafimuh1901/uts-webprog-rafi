<div class="menu-btn" id="menu-btn">
  <a href="{{ route('menu.index', ['id' => $user->id]) }}">
    Coffee
  </a>
</div>
<style>
  .menu-btn {
    position: absolute;
    margin-left: 1rem;
    /* top: 10
    right: 30;
    bottom: 30; */
    padding: 0.5rem;
    z-index: 2;
    border-radius: 0.5rem;
  }

  .menu-btn a {
    text-decoration: none;
    color: white;
  }
</style>
<script>
  let warna = {{ Js::from(@$color) }};
  document.getElementById("menu-btn").style.backgroundColor = (warna == "Gold") ? "#C6A961" : "#006F42";
</script>