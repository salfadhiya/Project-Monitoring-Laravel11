<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        {{-- logo sneat --}}
        <div class="container d-flex justify-content-center align-items-center py-3">
            <a href="/">
                <img src="../../assets/img/logo/pdclogo.png" alt="Logo" width="270" height="auto">
            </a>
        </div>



      {{-- logo sneat --}}

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>
<br>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
          <a href="/" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
          </a>
        </li>

        <!-- User -->
        <li class="menu-header small text-uppercase">
          <span class="menu-header-text">Kelola User</span>
        </li>
        <li class="menu-item {{ Request::is('user') ? 'active' : '' }}">
          <a href="/user" class="menu-link">
            <i class="bx bx-user me-2"></i>
            <div data-i18n="Basic">User</div>
          </a>
        </li>

        <!-- Proyek -->
        <li class="menu-header small text-uppercase">
          <span class="menu-header-text">Kelola Proyek</span>
        </li>
        <li class="menu-item {{ Request::is('proyek') ? 'active' : '' }}">
          <a href="/proyek" class="menu-link">
            <i class="menu-icon tf-icons bx bx-notepad"></i>
            <div data-i18n="Basic">Proyek</div>
          </a>
        </li>

        <!-- Tenaga Kerja -->
        <li class="menu-item {{ Request::is('workers') || Request::is('turor') ? 'active' : '' }}">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-user-pin"></i>
            <div data-i18n="User interface">Tenaga Kerja</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item {{ Request::is('turor') ? 'active' : '' }}">
                <a href="/turor" class="menu-link">
                  <div data-i18n="Alerts">Struktur Organisasi</div>
                </a>
              </li>
            <li class="menu-item {{ Request::is('tasklist') ? 'active' : '' }}">
              <a href="/tasklist" class="menu-link">
                <div data-i18n="Alerts">Task List</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item {{ Request::is('delivery') ? 'active' : '' }}">
            <a href="/delivery" class="menu-link">
              <i class="menu-icon tf-icons bx bx-package"></i>
              <div data-i18n="Basic">Deliveryable</div>
            </a>
          </li>
      </ul>



      {{-- <!-- Misc -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
      <li class="menu-item">
        <a
          href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
          target="_blank"
          class="menu-link"
        >
          <i class="menu-icon tf-icons bx bx-support"></i>
          <div data-i18n="Support">Support</div>
        </a>
      </li>
      <li class="menu-item">
        <a
          href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
          target="_blank"
          class="menu-link"
        >
          <i class="menu-icon tf-icons bx bx-file"></i>
          <div data-i18n="Documentation">Documentation</div>
        </a>
      </li>  --}}
    </ul>
  </aside>
