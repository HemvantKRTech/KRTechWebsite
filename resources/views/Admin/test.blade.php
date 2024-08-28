<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Test</title>
</head>

<style>

.main{
    width: 100%;
    float: left;
}
.sidebar{
    width: 20%;
    float: left;
    background-color: red;
}
.content{
    width: 80%;
    float: left;
    background-color: royalblue;

}
.custom-side-menu {
    background-color: #2d3748; /* Dark background */
    color: #ffffff; /* White text */
    height: 100vh; /* Full height */
    width: 100%; /* Sidebar width */
    top: 0;
    left: 0;
    padding-top: 1rem;
    transition: transform 0.3s ease-in-out; /* Smooth slide-in/slide-out transition */
    z-index: 1000;
}

.custom-side-menu .menu-item {
    display: block;
    padding: 1rem;
    text-decoration: none;
    color: #ffffff;
    transition: background-color 0.2s ease-in-out;
}

.custom-side-menu .menu-item:hover {
    background-color: #4a5568; /* Hover background color */
}

.custom-side-menu .menu-item.active {
    background-color: #4a5568; /* Active item background color */
}

/* Overlay for when the menu is open */
.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 999;
}

/* Show the overlay when the menu is open */
.overlay.show {
    display: block;
}

</style>

<body>

<div class="main">

<div class="sidebar">

    <div class="custom-side-menu" id="side-menu">
        <a href="#" class="menu-item ">Dashboard</a>
        <a href="{{route('homepage')}}" class="menu-item">Home Page Settings</a>
        <a href="#" class="menu-item">Settings</a>
        <a href="#" class="menu-item">Reports</a>
        <a href="#" class="menu-item">Users</a>
        <a href="#" class="menu-item">Earnings</a>
        <a href="#" class="menu-item">Sign out</a>
    </div>


</div>

<div class="content">

   <h1>Blue</h1>

</div>

</div>

</body>
</html>