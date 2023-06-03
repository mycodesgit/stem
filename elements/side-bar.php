<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar nav-compact flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Main Navigation</li>

        <li class="nav-item">
            <a href="./dashboard" class="nav-link <?php echo basename($_SERVER['REQUEST_URI']) == 'dashboard' ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-grip-horizontal"></i>
                <p>Dashboard</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="./responses" class="nav-link <?php echo basename($_SERVER['REQUEST_URI']) == 'responses' ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-reply"></i>
                <p>Reposnses</p>
            </a>
        </li>

        <?php if($_SESSION['usertype'] == 'Administrator') {?>
        <li class="nav-header">Users Management</li>
        <li class="nav-item">
            <a href="./users" class="nav-link <?php echo basename($_SERVER['REQUEST_URI']) == 'users' ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>Users</p>
            </a>
        </li>
        <?php }?>
    </ul>
</nav>