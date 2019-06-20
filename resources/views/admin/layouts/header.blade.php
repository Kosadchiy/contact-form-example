@section('header')
<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="/">Molinos Questions</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @auth
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i>
                        <span class="mb-0 nav-user-name">{{ Auth::user()->email }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <a class="dropdown-item" href="/admin/settings"><i class="fa fa-cogs"></i> Setting</a>
                        <a 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item" 
                            href="{{ route('logout') }}">
                            <i class="fa fa-sign-out"></i> 
                            Logout
                        </a>
                        <form 
                            id="logout-form" 
                            action="{{ route('logout') }}" 
                            method="POST" s
                            tyle="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        @endauth
    </nav>
</div>
@endsection