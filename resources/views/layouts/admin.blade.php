<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - {{ config('app.name', 'MediaBundle') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0f172a;
            --card-bg: #1e293b;
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --text-color: #f1f5f9;
            --text-muted: #94a3b8;
            --border-color: #334155;
            --accent: #10b981;
            --danger: #ef4444;
            --sidebar-width: 260px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Outfit', sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        aside {
            width: var(--sidebar-width);
            background-color: #0b0f19;
            border-right: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            left: 0;
            top: 0;
        }

        .sidebar-brand {
            padding: 24px;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: var(--primary);
            border-bottom: 1px solid #1e293b;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar-brand a {
            color: inherit;
            text-decoration: none;
        }

        .sidebar-menu {
            list-style: none;
            padding: 24px 16px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex-grow: 1;
        }

        .sidebar-item a {
            display: flex;
            align-items: center;
            padding: 12px 16px;
            color: var(--text-muted);
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .sidebar-item a:hover,
        .sidebar-item.active a {
            color: var(--text-color);
            background-color: var(--card-bg);
        }

        .sidebar-item.active a {
            border-left: 4px solid var(--primary);
            padding-left: 12px;
        }

        .sidebar-footer {
            padding: 16px;
            border-top: 1px solid #1e293b;
        }

        .btn-logout {
            width: 100%;
            padding: 10px;
            background-color: transparent;
            color: var(--danger);
            border: 1px solid var(--danger);
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-logout:hover {
            background-color: var(--danger);
            color: var(--text-color);
        }

        /* Main Content */
        main {
            margin-left: var(--sidebar-width);
            flex-grow: 1;
            padding: 40px;
            max-width: calc(100vw - var(--sidebar-width));
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        h1 {
            font-size: 28px;
            font-weight: 700;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            background-color: var(--primary);
            color: var(--text-color);
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            background-color: transparent;
            color: var(--text-muted);
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            border: 1px solid var(--border-color);
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-secondary:hover {
            background-color: var(--card-bg);
            color: var(--text-color);
        }

        /* Alerts */
        .alert {
            padding: 16px;
            border-radius: 8px;
            margin-bottom: 24px;
            font-weight: 500;
        }

        .alert-success {
            background-color: rgba(16, 185, 129, 0.15);
            color: var(--accent);
            border: 1px solid rgba(16, 185, 129, 0.3);
        }

        .alert-danger {
            background-color: rgba(239, 68, 68, 0.15);
            color: var(--danger);
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        /* Cards & Grids */
        .grid-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
            margin-bottom: 40px;
        }

        .card-stat {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 24px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .stat-value {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary);
        }

        .stat-label {
            color: var(--text-muted);
            font-weight: 500;
        }

        /* Table & Lists */
        .card-table {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 40px;
        }

        .table-header {
            padding: 20px 24px;
            border-bottom: 1px solid var(--border-color);
            font-weight: 600;
            font-size: 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th,
        td {
            padding: 16px 24px;
            border-bottom: 1px solid var(--border-color);
        }

        th {
            color: var(--text-muted);
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .action-links {
            display: flex;
            gap: 12px;
        }

        .link-edit {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        .link-edit:hover {
            text-decoration: underline;
        }

        .link-delete {
            background: none;
            border: none;
            color: var(--danger);
            font-weight: 600;
            cursor: pointer;
        }

        .link-delete:hover {
            text-decoration: underline;
        }

        /* Forms */
        .card-form {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 32px;
            max-width: 800px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 24px;
        }

        label {
            font-weight: 600;
            font-size: 14px;
            color: var(--text-muted);
        }

        input,
        select,
        textarea {
            padding: 12px 16px;
            background-color: var(--bg-color);
            border: 1px solid var(--border-color);
            color: var(--text-color);
            border-radius: 6px;
            font-size: 15px;
            transition: border-color 0.2s ease;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: var(--primary);
        }

        .form-actions {
            display: flex;
            gap: 16px;
            margin-top: 32px;
        }

        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .badge-active {
            background-color: rgba(16, 185, 129, 0.15);
            color: var(--accent);
        }

        .badge-inactive {
            background-color: rgba(239, 68, 68, 0.15);
            color: var(--danger);
        }
    </style>
</head>

<body>
    <aside>
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">{{ config('app.name', 'MediaBundle') }} Admin</a>
        </div>
        <ul class="sidebar-menu">
            <li class="sidebar-item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="sidebar-item {{ Request::routeIs('admin.departments.*') ? 'active' : '' }}">
                <a href="{{ route('admin.departments.index') }}">Departments</a>
            </li>
            <li class="sidebar-item {{ Request::routeIs('admin.doctors.*') ? 'active' : '' }}">
                <a href="{{ route('admin.doctors.index') }}">Doctors</a>
            </li>
            <li class="sidebar-item {{ Request::routeIs('admin.staff.*') ? 'active' : '' }}">
                <a href="{{ route('admin.staff.index') }}">Staff Members</a>
            </li>
            <li class="sidebar-item {{ Request::routeIs('admin.blogs.*') ? 'active' : '' }}">
                <a href="{{ route('admin.blogs.index') }}">Blog Posts</a>
            </li>
            <li class="sidebar-item {{ Request::routeIs('admin.tags.*') ? 'active' : '' }}">
                <a href="{{ route('admin.tags.index') }}">Tags</a>
            </li>
            <li class="sidebar-item {{ Request::routeIs('admin.appointments.*') ? 'active' : '' }}">
                <a href="{{ route('admin.appointments.index') }}">Appointments</a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('home') }}" target="_blank">Live Website ↗</a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        </div>
    </aside>

    <main>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @yield('content')
    </main>
</body>

</html>