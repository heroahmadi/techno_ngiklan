<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="{{ asset('admin_assets/images/faces/face1.jpg') }}" alt="profile image">
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">Admin</p>
                        <div>
                            <small class="designation text-muted">Admin Ngiklan</small>
                            <span class="status-indicator online"></span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin') }}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Transactions</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/coins') }}">
                <i class="menu-icon mdi mdi-backup-restore"></i>
                <span class="menu-title">Coin Transactions</span>
            </a>
        </li>
    </ul>
</nav>