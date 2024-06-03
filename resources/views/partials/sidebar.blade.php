@php use Illuminate\Support\Facades\Auth; @endphp
<div class="sidebar">
    <div class="side-header">
        <h3>A<span>dmin</span></h3>
    </div>

    <div class="side-content">
        <div class="profile">
            <div class="profile-img bg-img" style="background-image: url(img/delia-karni.png)"></div>
            <h4>{{Auth::user()->name}}</h4>
            <small>Direktur</small>
        </div>

        <div class="side-menu">
            <ul>
                <li>
                    <a href="/dashboard" class="nav-link {{ ($title == "Dashboard") ? 'active' : '' }}">
                        <span class="las la-home"></span>
                        <small>Dashboard</small>
                    </a>
                </li>
                <li>
                    <a href="/profilePT" class="nav-link {{ ($title == "profile-PT.MSI") ? 'active' : '' }}">
                        <span class="fa-regular fa-building"></span>
                        <small>Profile PT.MSI</small>
                    </a>
                </li>
                <li>
                    <a href="/berita-admin" class="nav-link {{ ($title == "Berita") ? 'active' : '' }}">
                        <span class="fa-regular fa-newspaper"></span>
                        <small>Berita</small>
                    </a>
                </li>
                <li>
                    <a href="/gallery-admin" class="nav-link {{ ($title == "Galley") ? 'active' : '' }}">
                        <span class="fa-solid fa-image"></span>
                        <small>Gallery</small>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
