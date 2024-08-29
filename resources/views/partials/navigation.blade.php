<div class="flex justify-center w-full sticky  top-0 z-[99999] " id="stickyHeader">
    <header class="container flex justify-between items-center py-3 lg:py-5 px-5 xl:px-0">
      <div class="">
        <a href="/" >
        <img src="{{ asset('images/logo.svg') }}"  alt="" class="">
      </a>

      </div>
      <div class="gap-6 hidden lg:flex">
        <div class="relative group">
          <a href="/" class="w-fit">
            <div class="nav-link group/item">
              Home
              
            </div>
          </a>
         
        </div>
        <a href="{{route('about')}}" class="w-fit">
          <div class="nav-link group">
            About Us
           
          </div>
        </a>
        <a href="{{route('webservice')}}" class="w-fit">
          <div class="nav-link group">
            Services
         
          </div>
        </a>
       
        <a href="{{route('contactus')}}" class="w-fit">
          <div class="nav-link group">
            Contact
          
          </div>
        </a>
      </div>
     
      <!-- mobile menu icons  -->
      <div class="w-8 lg:hidden" id="mobile-nav-btn">
        <svg class="transition-all duration-300" id="menu-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path>
        </svg>
        <svg class="hidden transition-all duration-300" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
        </svg>
      </div>
    </header>
  </div>
  <div id="mnav-menu-item" class="w-screen screen-height bg-black/5 left-0 fixed top-[69px] transition-all duration-300 lg:hidden z-[99999999] -translate-x-[100vw]">
    <div class="w-[300px] h-full bg-white px-5 overflow-y-scroll">
      <div class="gap-6">
        <div class="relative group">
          <div class="border-b border-[#f5f5f5]">
            <a href="/" class="w-fit">
              <div class="nav-link group py-3">Home</div>
            </a>
          </div>
          
        </div>
        <div class="border-b border-[#f5f5f5]">
          <a href="{{route('about')}}" class="w-fit">
            <div class="nav-link group py-3">
              About Us
              <!-- <img
              src="./assets/img/icon/down-arrow.svg"
              alt=""
              class="group-hover:rotate-180"
            /> -->
            </div>
          </a>
        </div>
        <div class="border-b border-[#f5f5f5]">
          <a href="{{route('webservice')}}" class="w-fit">
            <div class="nav-link group py-3">
              Services
              <!-- <img
              src="./assets/img/icon/down-arrow.svg"
              alt=""
              class="group-hover:rotate-180"
            /> -->
            </div>
          </a>
        </div>
        
        
        
        <div class="border-b border-[#f5f5f5]">
          <a href="{{route('contactus')}}" class="w-fit">
            <div class="nav-link group py-3">
              Contact
              
            </div>
          </a>
        </div>
      </div>
      {{-- <div class="flex gap-4 mt-5">
        <div class="border-btn-wrapper">
          <a class="border-btn" href="{{route('login')}}">Login</a>
        </div>
        <div class="bg-btn-wrapper">
          <a class="bg-btn" href="#">Sign Up</a>
        </div>
      </div> --}}
    </div>
  </div>