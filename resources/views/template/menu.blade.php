@if (Auth::user()->isAdmin)
<div class="sidebar-menu-area">
    <ul class="sidebar-menu" id="sidebar-menu">
        <li class="dropdown">
        <li class="sidebar-menu-group-title">Menu</li>
        <li>
            <a href="https://test.com">
                <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="https://test.com">
                <iconify-icon icon="bi:chat-dots" class="menu-icon"></iconify-icon>
                <span>Pengumuman</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0)">
                <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                <span>Pengaduan</span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="https://test.com"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Semua</a>
                </li>
                <li>
                    <a href="https://test.com"><i class="ri-circle-fill circle-icon text-secondary-main w-auto"></i> Pending</a>
                </li>
                <li>
                    <a href="https://test.com"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Diproses</a>
                </li>
                <li>
                    <a href="https://test.com"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> History</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="https://test.com">
                <iconify-icon icon="fe:vector" class="menu-icon"></iconify-icon>
                <span>Tanggapan</span>
            </a>
        </li>
    </ul>
</div>
@else
<div class="sidebar-menu-area">
    <ul class="sidebar-menu" id="sidebar-menu">
        <li class="dropdown">
        <li class="sidebar-menu-group-title">Menu</li>
        <li>
            <a href="https://test.com">
                <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="https://test.com">
                <iconify-icon icon="bi:chat-dots" class="menu-icon"></iconify-icon>
                <span>Pengaduan Saya</span>
            </a>
        </li>
    </ul>
</div>

@endif