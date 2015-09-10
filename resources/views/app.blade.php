<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

    <title>NTQ Solution Admin Control Panel</title>

    <link rel="icon" type="image/ico" href="{{ URL::asset('favicon.ico') }}"/>

    <link href="{{ URL::asset('css/stylesheets.css')  }}" rel="stylesheet" type="text/css"/>


</head>
<body>
<div class="header">
    <a class="logo" href="../resources/views/ category/list-categories.blade.php">
        <img src=" {{ URL::asset('img/logo.png') }}" alt="NTQ Solution - Admin Control Panel" title="NTQ Solution - Admin Control Panel"/>
    </a>

</div>

<div class="menu">

    <div class="breadLine">
        <div class="arrow"></div>
        <div class="adminControl active">
            Hi, Ta Quoc Vuong
        </div>
    </div>

    <div class="admin">
        <div class="image">
            <img src="{{ URL::asset('img/users/avatar.jpg') }}" class="img-polaroid"/>
        </div>
        <ul class="control">
            <li><span class="icon-cog"></span> <a href="edit-user.blade.php">Update Profile</a></li>
            <li><span class="icon-share-alt"></span> <a href="{{ URL::asset('logout') }}">Logout</a></li>
        </ul>
    </div>

    <ul class="navigation">
        <li>
            <a href="../category/list-categories.blade.php">
                <span class="isw-grid"></span><span class="text">Categories</span>
            </a>
        </li>
        <li>
            <a href="../product/list-products.blade.php">
                <span class="isw-list"></span><span class="text">Products</span>
            </a>
        </li>
        <li>
            <a href="list-users.blade.php">
                <span class="isw-user"></span><span class="text">Users</span>
            </a>
        </li>
    </ul>

</div>
<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb">
            @yield('link')
        </ul>
        @yield('content')
    </div>
</div>
</body>
</html>
