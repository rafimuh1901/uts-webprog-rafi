@extends('layouts.master')

@section('title', 'Menu')

@section('navbar')
  @include('components.navbar', ['color' => $user->level])
@endsection

@section('main')
<div class="container" id="wrapper">
  <div class="row m-3">
    @foreach($categories as $category)
      <div class="col d-flex justify-content-center">
        @if ($user->level == "Gold")
          <button class="btn" id="category-btn-{{ $category->id }}" value="{{ $category->id }}" style="background-color: #C6A961">{{ $category->name }}</button>
        @else
          <button class="btn btn-success" id="category-btn-{{ $category->id }}" value="{{ $category->id }}" style="background-color: #006F42; color: white">{{ $category->name }}</button>
        @endif
      </div>
    @endforeach
  </div>
  <div class="row" id="menu-content">
    @foreach ($menus as $menu)
      @if ($menu->categoryId == 1)
        <div class="col border m-2" style="cursor:pointer" data-toggle="modal" data-target="but-modal">
          <div class="product-img" style="width: 100%">
            <img src="{{ asset('assets/menu/'.$menu->id.'.jpg') }}" alt="" style="width: 100%">
          </div>
          <div>
            <div>
              <h4>{{ $menu->name }}</h4>
            </div>
            <div>
              <p>Rp.{{ $menu->price }}</p>
            </div>
          </div>
          @if ($user->level == "Gold")
            <button type="submit" onclick="buy(this)" class="btn mt-auto mb-2" id="{{ 'buy-'.$menu->id }}" value={{ $menu->id }} style="background-color: #C6A961">Buy</button>
          @else
            <button type="submit" onclick="buy(this)" class="btn mt-auto mb-2" id="{{ 'buy-'.$menu->id }}" value={{ $menu->id }} style="background-color: #006F42">Buy</button>
          @endif
        </div>
      @endif
    @endforeach
  </div>
</div>
@overwrite
@section('js')
  <script>
    let categories = {{ Js::from($categories) }};
    let menus = {{ Js::from($menus) }};
    let user = {{ Js::from($user) }};
    let categoryBtn1 = document.getElementById('category-btn-1');
    let categoryBtn2 = document.getElementById('category-btn-2');
    let categoryBtn3 = document.getElementById('category-btn-3');
    let categoryBtn4 = document.getElementById('category-btn-4');
    let menuContent = document.getElementById('menu-content');

    categoryBtn1.addEventListener("click", function () {
      // console.log('category id:', categoryBtn1.value);
      menuContent.innerHTML = ``;
      menus.forEach(menu => {
        // console.log("menu id:", menu);
        if (menu.categoryId == categoryBtn1.value) {
          if (user.level == "Gold") {
            menuContent.innerHTML += `
            <div class="col border" style="cursor:pointer">
              <div class="product-img" style="width: 100%">
                <img src="/assets/menu/${menu.id}.jpg" alt="" style="width: 100%">
              </div>
              <div>
                <div>
                  <h4>${menu.name}</h4>
                </div>
                <div>
                  <p>Rp.${menu.price}</p>
                </div>
              </div>
              <button type="submit" onclick="buy(this)" class="btn mt-auto mb-2" id="{{ 'buy-'.$menu->id }}" value={{ $menu->id }} style="background-color: #C6A961">Buy</button>
            </div>
            `
          } else {
            menuContent.innerHTML += `
            <div class="col border" style="cursor:pointer">
              <div class="product-img" style="width: 100%">
                <img src="/assets/menu/${menu.id}.jpg" alt="" style="width: 100%">
              </div>
              <div>
                <div>
                  <h4>${menu.name}</h4>
                </div>
                <div>
                  <p>Rp.${menu.price}</p>
                </div>
              </div>
              <button type="submit" onclick="buy(this)" class="btn mt-auto mb-2" id="{{ 'buy-'.$menu->id }}" value={{ $menu->id }} style="background-color: #006F42">Buy</button>
            </div>
            `
          }
        }
      });
    });
    categoryBtn2.addEventListener("click", function () {
      // console.log('category id:', categoryBtn2.value);
      menuContent.innerHTML = ``;
      menus.forEach(menu => {
        console.log("menu id:", menu);
        if (menu.categoryId == categoryBtn2.value) {
          if (user.level == "Gold") {
            menuContent.innerHTML += `
            <div class="col border" style="cursor:pointer">
              <div class="product-img" style="width: 100%">
                <img src="/assets/menu/${menu.id}.jpg" alt="" style="width: 100%">
              </div>
              <div>
                <div>
                  <h4>${menu.name}</h4>
                </div>
                <div>
                  <p>Rp.${menu.price}</p>
                </div>
              </div>
              <button type="submit" onclick="buy(this)" class="btn mt-auto mb-2" id="{{ 'buy-'.$menu->id }}" value={{ $menu->id }} style="background-color: #C6A961">Buy</button>
            </div>
            `
          } else {
            menuContent.innerHTML += `
            <div class="col border" style="cursor:pointer">
              <div class="product-img" style="width: 100%">
                <img src="/assets/menu/${menu.id}.jpg" alt="" style="width: 100%">
              </div>
              <div>
                <div>
                  <h4>${menu.name}</h4>
                </div>
                <div>
                  <p>Rp.${menu.price}</p>
                </div>
              </div>
              <button type="submit" onclick="buy(this)" class="btn mt-auto mb-2" id="{{ 'buy-'.$menu->id }}" value={{ $menu->id }} style="background-color: #006F42">Buy</button>
            </div>
            `
          }
        }
      });
    });
    categoryBtn3.addEventListener("click", function () {
      // console.log('category id:', categoryBtn3.value);
      menuContent.innerHTML = ``;
      menus.forEach(menu => {
        // console.log("menu id:", menu);
        if (menu.categoryId == categoryBtn3.value) {
          if (user.level == "Gold") {
            menuContent.innerHTML += `
            <div class="col border" style="cursor:pointer">
              <div class="product-img" style="width: 100%">
                <img src="/assets/menu/${menu.id}.jpg" alt="" style="width: 100%">
              </div>
              <div>
                <div>
                  <h4>${menu.name}</h4>
                </div>
                <div>
                  <p>Rp.${menu.price}</p>
                </div>
              </div>
              <button type="submit" onclick="buy(this)" class="btn mt-auto mb-2" id="{{ 'buy-'.$menu->id }}" value={{ $menu->id }} style="background-color: #C6A961">Buy</button>
            </div>
            `
          } else {
            menuContent.innerHTML += `
            <div class="col border" style="cursor:pointer">
              <div class="product-img" style="width: 100%">
                <img src="/assets/menu/${menu.id}.jpg" alt="" style="width: 100%">
              </div>
              <div>
                <div>
                  <h4>${menu.name}</h4>
                </div>
                <div>
                  <p>Rp.${menu.price}</p>
                </div>
              </div>
              <button type="submit" onclick="buy(this)" class="btn mt-auto mb-2" id="{{ 'buy-'.$menu->id }}" value={{ $menu->id }} style="background-color: #006F42">Buy</button>
            </div>
            `
          }
        }
      });
    });
    categoryBtn4.addEventListener("click", function () {
      // console.log('category id:', categoryBtn4.value);
      menuContent.innerHTML = ``;
      menus.forEach(menu => {
        // console.log("menu id:", menu);
        if (menu.categoryId == categoryBtn4.value) {
          if (user.level == "Gold") {
            menuContent.innerHTML += `
            <div class="col border" style="cursor:pointer">
              <div class="product-img" style="width: 100%">
                <img src="/assets/menu/${menu.id}.jpg" alt="" style="width: 100%">
              </div>
              <div>
                <div>
                  <h4>${menu.name}</h4>
                </div>
                <div>
                  <p>Rp.${menu.price}</p>
                </div>
              </div>
              <button type="submit" onclick="buy(this)" class="btn mt-auto mb-2" id="{{ 'buy-'.$menu->id }}" value={{ $menu->id }} style="background-color: #C6A961">Buy</button>
            </div>
            `
          } else {
            menuContent.innerHTML += `
            <div class="col border" style="cursor:pointer">
              <div class="product-img" style="width: 100%">
                <img src="/assets/menu/${menu.id}.jpg" alt="" style="width: 100%">
              </div>
              <div>
                <div>
                  <h4>${menu.name}</h4>
                </div>
                <div>
                  <p>Rp.${menu.price}</p>
                </div>
              </div>
              <button type="submit" onclick="buy(this)" class="btn mt-auto mb-2" id="{{ 'buy-'.$menu->id }}" value={{ $menu->id }} style="background-color: #006F42">Buy</button>
            </div>
            `
          }
        }
      });
    });

    async function buy(form) {
      let user = {{ Js::from($user) }};
      let selectedMenu = menus[form.value - 1];
      const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      
      if (confirm(`Are you sure want to buy ${selectedMenu.name}?`)) {
        alert('Success');
        // let url = "{{ route('menu.buy', ':id') }}";
        // url = url.replace(':id', user->id);
        let data = {
          'userId': user.id,
          'menuId': selectedMenu.id,
        };
        let res = await fetch('/menu/buy', {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": token
            // 'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: JSON.stringify(data)
        });
        let response = await res.json();

        if (response.code == "200") {
          window.location.replace("/"+user.id);
        } else {
          alert('Gagal Membeli');
        }
        // console.log("res:", response);
      }
    }
  </script>
@endsection