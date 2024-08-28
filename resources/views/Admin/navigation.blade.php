<style>
    /* Custom Side Menu Styles */
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
        position: relative; /* For positioning dropdown */
    }

    .custom-side-menu .menu-item:hover {
        background-color: #4a5568; /* Hover background color */
    }

    .custom-side-menu .menu-item.active {
        background-color: #4a5568; /* Active item background color */
    }

    /* Dropdown Styles */
    .dropbtn {
    background-color: #2d3748;
    color: white;
    /* padding: 16px; */
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 100%;
    text-align: justify;
    display: block;
    padding: 1rem;
    text-decoration: none;
    color: #ffffff;
    transition: background-color 0.2s ease-in-out;
    position: relative; /* For positioning dropdown */
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2d3748;
}

.dropdown {
  /* position: relative; */
  display: inline-block;
  width: 100%;
}

.dropdown-content {
  display: none;
  /* position: absolute; */
  /* background-color: #f1f1f1; */
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #ffffff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #5a6579;}

.show {display: block;}

/* .dropdown:hover .menu-item {background-color: #3e8e41;} */
</style>

<!-- Side Menu -->
<div class="custom-side-menu" id="side-menu">
    <a href="{{route('dashboard')}}" class="menu-item">Dashboard</a>
    
    <a href="{{ route('homepage') }}" class="menu-item">Home Page Settings</a>
    <a href="{{ route('allcomment') }}" class="menu-item">Comments</a>

    <!-- Dropdown for Services -->
    {{-- <div class="dropdown">
        <a href="#" class="menu-item">Services</a>
        <div class="dropdown-content">
            <a href="{{route('services')}}" class="menu-item">Add Service</a>
            <a href="{{ route('allservice') }}" class="menu-item">All Services</a>
        </div>
    </div> --}}

    <div class="dropdown">
        <a href="#" onclick="myFunction()" class="dropbtn">Services <span>▼</span></a>
        <div id="myDropdown" class="dropdown-content">
          <a href="{{route('services')}}">Add Service</a>
          <a href="{{ route('allservice') }}">All Services</a>
          
        </div>
      </div>

    <a href="{{route('termsconditions')}}" class="menu-item">Terms and Condition</a>
    <a href="{{route('privacypolicy')}}" class="menu-item">Privacy Policy</a>
    <a href="#" class="menu-item">Sign out</a>

</div>
  
  <script>
  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  </script>

<!-- JavaScript to toggle the side menu -->
{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.getElementById('menu-button');
        const sideMenu = document.getElementById('side-menu');
        const overlay = document.getElementById('overlay');

        menuButton.addEventListener('click', function () {
            sideMenu.classList.toggle('open');
            overlay.classList.toggle('show');
        });

        overlay.addEventListener('click', function () {
            sideMenu.classList.remove('open');
            overlay.classList.remove('show');
        });
    });
</script> --}}
