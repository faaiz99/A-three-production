<nav class="navbar1 navbar-expand-xl bg-dark">
    <div class="sidebar-header">
        <h3></h3>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbar1" class="navbar-collapse collapse ml-5">
        <ul class="navbar-nav list-unstyled">
            <p><a class = "sidebar-item1" href="/admin/home" style="text-decoration:none;">Dashboard</a> </p>
            <li>
                <a  class = "sidebar-item2"style="text-decoration:none;" href="/admin/home">Home</a>
            </li>
            <li> <a  class = "sidebar-item3" href="/admin/orders" style="text-decoration:none;">Orders</a> </li>
            <li>
                <a class = "sidebar-item4" style="text-decoration:none;" href="/admin/stats">Statistics</a>
            <li>
            <li>
                <a   class = "sidebar-item5" style="text-decoration:none;" href="/admin/users">Users</a>
            <li>
            <li>
                <a  class = "sidebar-item6" href="/admin/update" style="text-decoration:none;"> Profile</a>
            </li>
            <li>
                <a  class = "sidebar-item6" href="/admin/mssg" style="text-decoration:none;"> Message</a>
            </li>
        </ul>
    </div>
</nav>
<div class="offcanvas offcanvas-start bg-dark" style=" color:white;width: 30%;" id="demo">
    <div class="offcanvas-header">
        <h1 class="offcanvas-title  bg-dark"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body bg-dark">
        <ul class="navbar-nav list-unstyled components ml-2">
            <p><a class = "sidebar-item1" href="/admin/home" style="text-decoration:none;">Dashboard</a> </p>
            <li>
                <a class = "sidebar-item2" style="text-decoration:none;" href="/admin/home">Home</a>
            </li>
            <li> <a class = "sidebar-item3" href="/admin/orders" style="text-decoration:none;">Orders</a> </li>
            <li>
                <a  class = "sidebar-item4" style="text-decoration:none;" href="/admin/stats">Statistics</a>
            <li>
            <li>
                <a  class = "sidebar-item5" style="text-decoration:none;" href="/admin/users">Users</a>
            <li>
            <li>
                <a  class = "sidebar-item5" href="/admin/update" style="text-decoration:none;"> Profile</a>
            </li>
            <li>
                <a  class = "sidebar-item6" href="/admin/mssg" style="text-decoration:none;"> Message</a>
            </li>
        </ul>
    </div>
</div>
<div class="container-fluid mt-3 mb-1">
    <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
        <i class="fa-solid fa-bars "></i>
    </button>
</div>

