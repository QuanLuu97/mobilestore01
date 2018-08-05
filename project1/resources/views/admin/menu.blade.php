<div id="navbar">
    <nav class="main-menu">
        <ul>
            <li class="ml-3">
                <a href="#">
                    <i class="mr-5"></i>
                    <span class="nav-text ml-2" id="logo">
                        <img src="{{ asset('images/logo.png') }}">
                    </span>
                </a>
            </li>
            <li class="mt-3">
                <a href="#">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="{{ route('categories') }}">
                    <i class="fa fa-laptop fa-2x"></i>
                    <span class="nav-text">
                        {{ __('home.categories') }}
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                   <i class="fa fa-list fa-2x"></i>
                    <span class="nav-text">
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                   <i class="fa fa-folder-open fa-2x"></i>
                    <span class="nav-text">
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-font fa-2x"></i>
                    <span class="nav-text">
                    </span>
                </a>
            </li>
            <li>
               <a href="#">
                   <i class="fa fa-table fa-2x"></i>
                    <span class="nav-text">
                    </span>
                </a>
            </li>
            <li>
               <a href="#">
                    <i class="fa fa-map-marker fa-2x"></i>
                    <span class="nav-text">
                    </span>
                </a>
            </li>
            @if(Auth::user()->role->name == 'manager')
                <li>
                    <a href="{{ route('mode-of-payments') }}">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            {{ __('home.payment') }}
                        </span>
                    </a>
                </li>
            @endif
        </ul>
        @if(Auth::check())
            <ul class="logout">
                <li>
                   <a href="{{ route('logout') }}">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            {{ __('home.logout') }}
                        </span>
                    </a>
                </li>  
            </ul>
        @endif
    </nav>
</div>
