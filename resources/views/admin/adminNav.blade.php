<div class="sidebar">
    <div class="nav-toggle hide-nav">
        <i class="fa fa-times"></i>
    </div>
    <div class="side-logo">
        <img src="../img/mwecau.png" alt="mwecau logo" />
        <span>MWECAU</span>
        <p><i>"Lux Mundi" - </i>Light of the world</p>
    </div>
    <ul class="nav-list">
        <a href="{{ route('dashboard') }}">
            <li class="nav-item">
                <i class="fa fa-home nav-icons"></i>
                <span class="nav-words">Home</span>
            </li>
        </a>
        <a href="{{ route('list-of-programs') }}">
            <li class="nav-item">
                <i class="fa fa-university nav-icons"></i>
                <span class="nav-words">Programmes</span>
            </li>
        </a>
        <a href="{{ route('list-of-staff') }}">
            <li class="nav-item">
                <i class="fa fa-users nav-icons"></i>
                <span class="nav-words">Staff</span>
            </li>
        </a>
        <a href="dashboard-events.html">
            <li class="nav-item">
                <i class="fa fa-calendar nav-icons"></i>
                <span class="nav-words">Events</span>
            </li>
        </a>
        <a href="">
            <li class="nav-item">
                <i class="fa fa-key nav-icons"></i>
                <span class="nav-words">Change Password</span>
            </li>
        </a>
        <a href="">
            <li class="nav-item">
                <i class="fa fa-sign-out-alt nav-icons"></i>
                <span class="nav-words">Logout</span>
            </li>
        </a>
    </ul>
</div>
