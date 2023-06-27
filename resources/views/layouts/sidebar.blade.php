<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="app-brand-logo" width="30%">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Admin</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item {{ request()->is('dashboard/about') || request()->is('dashboard/skill') || request()->is('dashboard/resume') || request()->is('dashboard/category') || request()->is('dashboard/portfolio') || request()->is('dashboard/message') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Content</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item {{ request()->is('dashboard/about') ? 'active' : '' }}">
                <a href="/dashboard/about" class="menu-link">
                  <div data-i18n="Without navbar">About</div>
                </a>
              </li>
              <li class="menu-item {{ request()->is('dashboard/skill') ? 'active' : '' }}">
                <a href="/dashboard/skill" class="menu-link">
                  <div data-i18n="Without navbar">Skill</div>
                </a>
              </li>
              <li class="menu-item {{ request()->is('dashboard/resume') ? 'active' : '' }}">
                <a href="/dashboard/resume" class="menu-link">
                  <div data-i18n="Container">Resume</div>
                </a>
              </li>
              <li class="menu-item {{ request()->is('dashboard/category') ? 'active' : '' }}">
                <a href="/dashboard/category" class="menu-link">
                  <div data-i18n="Blank">Categories</div>
                </a>
              </li>
              <li class="menu-item {{ request()->is('dashboard/portfolio') ? 'active' : '' }}">
                <a href="/dashboard/portfolio" class="menu-link">
                  <div data-i18n="Blank">Portfolio</div>
                </a>
              </li>
              <li class="menu-item {{ request()->is('dashboard/message') ? 'active' : '' }}">
                <a href="/dashboard/message" class="menu-link">
                  <div data-i18n="Blank">Messages</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Account</span>
          </li>
          <li class="menu-item {{ request()->is('dashboard/profile') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-cog'></i>
              <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item {{ request()->is('dashboard/profile') ? 'active' : '' }}">
                <a href="/dashboard/profile" class="menu-link">
                  <div data-i18n="Account">Account</div>
                </a>
            </ul>
          </li>
        </ul>
      </aside>