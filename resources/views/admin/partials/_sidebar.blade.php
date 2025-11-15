<style>
    .menu-icon {
        font-size: 14px;
    }
</style>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">


                <img src="{{ asset('front/img/logos/amaac_logo.jpg') }}" width="150" hwight="50">



        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Page -->
        <li class="menu-item {{ request()->routeIs('admin.home') ? 'active' : '' }}">
            <a href="{{ route('admin.home') }}" class="menu-link">
                <i class="menu-icon fa-solid fa-house"></i>
                <div data-i18n="Home">Home</div>
            </a>
        </li>
         @can('sliders-view')
            <li
                class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'sliders') ? 'active' : '' }}">
                <a href="{{ route('admin.sliders.index') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-sliders"></i>
                    <div data-i18n="Sliders">Sliders</div>
                </a>
            </li>
        @endcan
        <li class="menu-item {{ request()->routeIs('admin.chat') ? 'active' : '' }}">
            <a href="{{ route('admin.chat') }}" class="menu-link">
                <i class="menu-icon fa-brands fa-rocketchat"></i>
                <div data-i18n="Chat">Chat</div>
            </a>
        </li>
        <li class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), ['docs-pages', 'docs-sections']) ? 'active open' : '' }}"
            style="">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-folder-open"></i>
                <div data-i18n="Docs Options">Docs Options</div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'docs-pages') ? 'active' : '' }}">
                    <a href="{{ route('admin.docs-pages.index') }}" class="menu-link">
                        <div data-i18n="Pages">Pages</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'docs-sections') ? 'active' : '' }}">
                    <a href="{{ route('admin.docs-sections.index') }}" class="menu-link">
                        <div data-i18n="Sections">Sections</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), ['categories', 'blogs']) ? 'active open' : '' }}"
            style="">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-pen"></i>
                <div data-i18n="Blogs & Categories">Blogs & Categories </div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'categories') ? 'active' : '' }}">
                    <a href="{{ route('admin.categories.index') }}" class="menu-link">
                        <div data-i18n="Categories">Categories</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'blogs') ? 'active' : '' }}">
                    <a href="{{ route('admin.blogs.index') }}" class="menu-link">
                        <div data-i18n="Blogs">Blogs</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'blog-sections') ? 'active' : '' }}">
                    <a href="{{ route('admin.blog-sections.index') }}" class="menu-link">
                        <div data-i18n="Blog Sections">Blog Sections</div>
                    </a>
                </li>

            </ul>
        </li>


        @can('strategies-view')
            <li
                class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'strategies') ? 'active' : '' }}">
                <a href="{{ route('admin.strategies.index') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-chess-knight"></i>
                    <div data-i18n="Indicators & Strategies">Indicators & Strategies</div>
                </a>
            </li>
        @endcan
        <li
                class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'payments') ? 'active' : '' }}">
                <a href="{{ route('admin.payments.index') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-dollar-sign"></i>

                    <div data-i18n="Payments">Payments</div>
                </a>
            </li>
        <li
                class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'earnings') ? 'active' : '' }}">
                <a href="{{ route('admin.earnings.index') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-dollar-sign"></i>

                    <div data-i18n="Earnings">Earnings</div>
                </a>
            </li>
        @can('plans-view')
            <li
                class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'plans') ? 'active' : '' }}">
                <a href="{{ route('admin.plans.index') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-chart-simple"></i>
                    <div data-i18n="Plans">Plans</div>
                </a>
            </li>
        @endcan
        @can('testimonials-view')
            <li
                class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'testimonials') ? 'active' : '' }}">
                <a href="{{ route('admin.testimonials.index') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-star"></i>
                    <div data-i18n="traders say">Traders says</div>
                </a>
            </li>
        @endcan
        @can('questions-view')
            <li
                class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'affiliate_question') ? 'active' : '' }}">
                <a href="{{ route('admin.affiliate_question.index') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-circle-question"></i>
                    <div data-i18n="Affiliate Questions">Affiliate Questions</div>
                </a>
            </li>
        @endcan
        @can('questions-view')
            <li
                class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'questions') ? 'active' : '' }}">
                <a href="{{ route('admin.questions.index') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-circle-question"></i>
                    <div data-i18n="Questions">Questions</div>
                </a>
            </li>
        @endcan
        <li class="menu-item {{ request()->routeIs('admin.settings.edit') ? 'active' : '' }}">
            <a href="{{ route('admin.settings.edit') }}" class="menu-link">
                <i class="menu-icon fa-solid fa-gear"></i>
                <div data-i18n="settings">Settings</div>
            </a>
        </li>
        <li class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), ['roles', 'permissions']) ? 'active open' : '' }}"
            style="">
            <a href="javascript:void(0);" class="menu-link menu-toggle">

                <i class="menu-icon fa-solid fa-lock"></i>
                <div data-i18n="Roles &amp; Permissions">Roles &amp; Permissions</div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'roles') ? 'active' : '' }}">
                    <a href="{{ route('admin.roles.index') }}" class="menu-link">
                        <div data-i18n="Roles">Roles</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'permissions') ? 'active' : '' }}">
                    <a href="{{ route('admin.permissions.index') }}" class="menu-link">
                        <div data-i18n="Permission">Permission</div>
                    </a>
                </li>
            </ul>
        </li>
        @can('users-view')
            <li
                class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'users') ? 'active' : '' }}">
                <a href="{{ route('admin.users.index') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-user"></i>
                    <div data-i18n="Users">Users</div>
                </a>
            </li>
        @endcan
        @can('admins-view')
            <li
                class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'admins') ? 'active' : '' }}">
                <a href="{{ route('admin.admins.index') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-user-tie"></i>
                    <div data-i18n="Admins">Admins</div>
                </a>
            </li>
        @endcan
        <li
            class="menu-item {{ \Illuminate\Support\Str::contains(request()->route()->getName(), 'admins') ? 'active' : '' }}">
            <form method="POST" action="{{ route('admin.logout') }}" class="menu-link">
                @csrf
                <i class="menu-icon fas fa-sign-out-alt"></i>
                <button type="submit"
                    style="background: none; border: none; padding: 0; margin: 0; color: inherit; font: inherit; cursor: pointer;"
                    data-i18n="Logout">
                    Logout
                </button>

            </form>

        </li>
    </ul>
</aside>
