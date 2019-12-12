@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<div class="app-sidebar sidebar-shadow bg-focus sidebar-text-light">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>
                <li>
                    <a href="{{ url('/') }}" class="{{ $request->segment(2) == 'home' ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-rocket fas fa-tachometer-alt"></i>
                        @lang('quickadmin.qa_dashboard')
                    </a>
                </li>
                @can('user_management_access')
                    <li>
                        <a href="#" class="{{ $request->segment(2) == 'roles' || $request->segment(2) == 'users' ? 'mm-active' : '' }}" aria-expanded="{{ $request->segment(2) == 'roles' || $request->segment(2) == 'users' ? 'true' : 'false' }}">
                            <i class="metismenu-icon pe-7s-diamond fas fa-users-cog"></i>
                            @lang('quickadmin.user-management.title')
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left fas fa-angle-left"></i>
                        </a>
                        <ul>
                            @can('role_access')
                                <li>
                                    <a class="{{ $request->segment(2) == 'roles' ? 'mm-active' : '' }}" href="{{ route('admin.roles.index') }}">
                                        <i class="metismenu-icon"></i>
                                        @lang('quickadmin.roles.title')
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li>
                                    <a class="{{ $request->segment(2) == 'users' ? 'mm-active' : '' }}" href="{{ route('admin.users.index') }}">
                                        <i class="metismenu-icon"></i>
                                        @lang('quickadmin.users.title')
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('expense_management_access')
                    <li>
                        <a href="#" class="{{ in_array($request->segment(2), ['expense_categories', 'income_categories', 'incomes', 'expenses', 'monthly_reports', 'currencies']) ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-car fas fa-money-bill-wave"></i>
                            @lang('quickadmin.expense-management.title')
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left fas fa-angle-left"></i>
                        </a>
                        <ul>
                            @can('expense_category_access')
                                <li>
                                    <a class="{{ $request->segment(2) == 'expense_categories' ? 'mm-active' : '' }}" href="{{ route('admin.expense_categories.index') }}">
                                        <i class="metismenu-icon"></i>
                                        @lang('quickadmin.expense-category.title')
                                    </a>
                                </li>
                            @endcan
                            @can('income_category_access')
                                <li>
                                    <a class="{{ $request->segment(2) == 'income_categories' ? 'mm-active' : '' }}" href="{{ route('admin.income_categories.index') }}">
                                        <i class="metismenu-icon"></i>
                                        @lang('quickadmin.income-category.title')
                                    </a>
                                </li>
                            @endcan
                            @can('income_access')
                                <li>
                                    <a class="{{ $request->segment(2) == 'incomes' ? 'mm-active' : '' }}" href="{{ route('admin.incomes.index') }}">
                                        <i class="metismenu-icon"></i>
                                        @lang('quickadmin.income.title')
                                    </a>
                                </li>
                            @endcan
                            @can('expense_access')
                                <li>
                                    <a class="{{ $request->segment(2) == 'expenses' ? 'mm-active' : '' }}" href="{{ route('admin.expenses.index') }}">
                                        <i class="metismenu-icon"></i>
                                        @lang('quickadmin.expense.title')
                                    </a>
                                </li>
                            @endcan
                            @can('monthly_report_access')
                                <li>
                                    <a class="{{ $request->segment(2) == 'monthly_reports' ? 'mm-active' : '' }}" href="{{ route('admin.monthly_reports.index') }}">
                                        <i class="metismenu-icon"></i>
                                        @lang('quickadmin.monthly-report.title')
                                    </a>
                                </li>
                            @endcan
                            @can('currency_access')
                                <li>
                                    <a class="{{ $request->segment(2) == 'currencies' ? 'mm-active' : '' }}" href="{{ route('admin.currencies.index') }}">
                                        <i class="metismenu-icon"></i>
                                        @lang('quickadmin.currency.title')
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
            </ul>
        </div>
    </div>
</div>
