<div class="sidebar" data-color="orange" data-background-color="black"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo text-center" style="text-line:center">

        <a class="text-center" href="{{ url('home') }}">
            {{ __('TIENDA y LICORES LA 79') }}
        </a>
        </li>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">

            </a>
            <div class="collapse show" id="laravelExample">
                <ul class="nav">
                    <!-- <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="sidebar-mini"> UM </span>
                            <span class="sidebar-normal"> {{ __('User Management') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
            </li>
            <ul class="nav">
                @if (auth()->user()->id_rol == 1 )
                <li class="nav-item">
                    <a class="nav-link" href="{{ url ('usuario') }}">
                        <i class="material-icons">engineering</i>
                        <p>{{ __('Usuarios') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url ('rol') }}">
                        <i class="material-icons">supervised_user_circle</i>
                        <p>{{ __('Rol') }}</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ url ('proveedor') }}">
                        <i class="material-icons">airport_shuttle</i>
                        <p>{{ __('Proveedores') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url ('cliente') }}">
                        <i class="material-icons">wc</i>
                        <p>{{ __('Clientes') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url ('producto') }}">
                        <i class="material-icons">location_ons</i>
                        <p>{{ __('Productos') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="material-icons"> shopping_cart</i>
                        <p>{{ __('Ventas') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="material-icons">assignment</i>
                        <p>{{ __('Factura') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="material-icons">receipt</i>
                        <p>{{ __('Reporte') }}</p>
                    </a>
                </li>

            </ul>
    </div>
</div>