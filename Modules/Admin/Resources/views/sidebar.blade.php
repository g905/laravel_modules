<div class="sidebar" data-color="blue" data-active-color="info">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="elk" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ Module::asset('admin:img/logo-small.png') }}">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{ __("admin::messages.welcome") }}<br>

            <!--<div class="logo-image-big">
              <img src="{{ Module::asset('admin:img/logo-big.png') }}">
            </div>-->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active ">
                <a href={{ route('admin.index') }}>
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('admin::messages.dashboard') }}</p>
                </a>
            </li>
            <li>
                <a href="./icons.html">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Icons</p>
                </a>
            </li>
            <li>
                <a href="./map.html">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Maps</p>
                </a>
            </li>
            <li>
                <a href="./notifications.html">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Notifications</p>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.profile') }}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>{{ __('admin::messages.profile') }}</p>
                </a>
            </li>
            <li>
                <a href="./tables.html">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Table List</p>
                </a>
            </li>
            <li>
                <a href="./typography.html">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Typography</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="./upgrade.html">
                    <i class="nc-icon nc-spaceship"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>
