<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="{{ asset('BS_v4/images/faces/face1.jpg')}}" alt="profile image">
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{Auth::user()->name}}</p>
                        <div>
                            <small class="designation text-muted">Developer</small>
                            <span class="status-indicator online"></span>
                        </div>
                    </div>
                </div>
                <a class="btn btn-success btn-block" href="{{url('dasboard/create')}}">New Folder
                <i class="mdi mdi-plus"></i>
                </a>
            </div>
        </li>        
        <li class="nav-item">            
            <a class="nav-link" href="{{url('/')}}">
            <i class="menu-icon mdi mdi-television"></i>
            <span class="menu-title">Dashboard</span>
            </a>
        </li>        
        <li class="nav-item">            
            <a class="nav-link" href="{{url('/products')}}">
            <i class="menu-icon mdi mdi-view-list"></i>
            <span class="menu-title">Product</span>
            </a>
        </li>        
        <li class="nav-item">            
            <a class="nav-link" href="{{url('/category')}}">
            <i class="menu-icon mdi mdi-apps"></i>
            <span class="menu-title">Category</span>
            </a>
        </li>        
    </ul>
</nav>