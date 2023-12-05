<nav class="navbar navbar-expand-lg navbar-light bg-info">

    <a class="navbar-brand p-2 mb-3 mb-sm-0" href="{{ route('backend.dashboard') }}">
        Covid Road To Glory
    </a>
    
    @auth
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerNav" aria-controls="headerNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    @php
        $activeClass = ' font-weight-bold';
        $request = request();
    @endphp
    <div class="collapse navbar-collapse" id="headerNav">
        <ul class="navbar-nav ml-auto">
        
            <li>
                <a class="nav-link{{ $routeName == 'backend.dashboard' ? $activeClass : '' }}" href="{{ route('backend.dashboard') }}">Dashboard</a>
            </li>
            
            
            <li class="dropdown">
        
            
                <a
                    class="nav-link dropdown-toggle {{ $activeClass }}"
                    href="#"
                    id="clienteleDropdown"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    Clientele
                </a>
                
                <div class="dropdown-menu" aria-labelledby="clienteleDropdown">
                
                   
                    <a class="dropdown-item{{ $activeClass }}" href="#">Audits</a>

             
                
                </div>
            
            </li>
        
            
            @if(!empty($user))
            <li class="dropdown">
            
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="iconFullNam-user" aria-hidden="true"></i>
                    {{ $user->name }}
                </a>
                
                <div class="dropdown-menu" aria-labelledby="userDropdown">
                    @include('shared.forms.logout', ['route' => 'backend.auth.logout'])
                </div>
                
            </li>
            @endif
            
        </ul>
    </div>
    @endauth

</nav>