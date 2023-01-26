{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

@if(backpack_user()->can('View Candidates'))
    <!-- Candidates -->
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-user"></i> Candidates</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('candidate') }}"><i class="nav-icon la la-th-list"></i> Candidates</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('candidate-technical-skill') }}"><i class="nav-icon la la-th-list"></i> Technical skills</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('candidate-business-skill') }}"><i class="nav-icon la la-th-list"></i> Business skills</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('candidate-professional-experience') }}"><i class="nav-icon la la-th-list"></i> Professional experiences</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('candidate-academic-achievement') }}"><i class="nav-icon la la-th-list"></i> Academic achievements</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('candidate-tool') }}"><i class="nav-icon la la-th-list"></i> Tools</a></li>
        </ul>
    </li>
@endif

@if(backpack_user()->can('Manage Authentication'))
    <!-- Users, Roles, Permissions -->
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        </ul>
    </li>
@endif

@if(backpack_user()->can('Manage Logs'))
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Logs</a></li>
@endif

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-request') }}"><i class="nav-icon la la-th-list"></i> Contact requests</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('company') }}"><i class="nav-icon la la-th-list"></i> Companies</a></li>