<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
          <li class="nav-header">
            <div class="dropdown profile-element"> 
            <img alt="image" class="rounded-circle" src="{{ asset('assets/img/profile_small.jpg') }}"/> 
            <a data-toggle="dropdown" class="dropdown-toggle" href="#"> 
                <span class="block m-t-xs font-bold">{{Auth::user()->username}}</span> 
                <span class="text-muted text-xs block">User<b class="caret"></b></span> 
            </a>
            </div>
            <div class="logo-element"> ATS</div>
          </li>
          @foreach ($mainMenu as $menu)
            <li class="@if($ActiveMenu == $menu['name']) active  @endif" wire:click="setActiveMenu({{ $menu['name'] }})" >
              <a wire:click="setActiveMenu('{{ $menu['name'] }}')" aria-expanded="false"><i class="{{$menu['icon']}}"></i> <span class="nav-label">{{ $menu['name'] }}</span> <span class="fa arrow"></span></a>
              @if (array_key_exists('menu', $menu))
                <ul class="nav nav-second-level collapse @if($ActiveMenu == $menu['name']) in  @endif">
                  @foreach ($menu['menu'] as $sub_menu)
                    <li>
                      <a href="@if(Route::has($sub_menu['route_name'])) {{$sub_menu['route_name'] }} @else # @endif">{{ $sub_menu['name'] }}</a>
                    </li>
                  @endforeach
                </ul>
              @endif
              <span class="fa arrow"></span>
            </li>
          @endforeach
        </ul>
    </div>
</nav>
