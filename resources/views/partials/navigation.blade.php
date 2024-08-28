<div class="flex justify-center w-full sticky  top-0 z-[99999] " id="stickyHeader">
    <header class="container flex justify-between items-center py-3 lg:py-5 px-5 xl:px-0">
      <div class="">
        <img src="{{ asset('images/logo.svg') }}"  alt="" class="">
      </div>
      <div class="gap-6 hidden lg:flex">
        <div class="relative group">
          <a href="/" class="w-fit">
            <div class="nav-link group/item">
              Home
              {{-- <img  src="{{ asset('images/down-arrow.svg') }}" alt="" class="group-hover/item:rotate-180"> --}}
            </div>
          </a>
          {{-- <div class="absolute overflow-hidden h-0 transition-all duration-300 bg-white min-w-[180px] group-hover:h-[148px] px-3 -left-3 shadow-threeSide">
            <a href="/" class="w-fit">
              <div class="nav-link group mt-3 mb-4">Digital Marketing</div>
            </a>
            <a href="index-2.html" class="w-fit">
              <div class="nav-link group my-4">Mobile App</div>
            </a>
            <a href="index-3.html" class="w-fit">
              <div class="nav-link group my-4">IT Solutions</div>
            </a>
            <a href="index-4.html" class="w-fit">
              <div class="nav-link group my-4">IT Solutions-2</div>
            </a>
          </div> --}}
        </div>
        <a href="{{route('about')}}" class="w-fit">
          <div class="nav-link group">
            About Us
            <!-- <img
              src="./assets/img/icon/down-arrow.svg"
              alt=""
              class="group-hover:rotate-180"
            /> -->
          </div>
        </a>
        <a href={{route('webservice')}} class="w-fit">
          <div class="nav-link group">
            Services
            <!-- <img
              src="./assets/img/icon/down-arrow.svg"
              alt=""
              class="group-hover:rotate-180"
            /> -->
          </div>
        </a>
        {{-- <a href="projects.html" class="w-fit">
          <div class="nav-link group">
            Projects
            <!-- <img
              src="./assets/img/icon/down-arrow.svg"
              alt=""
              class="group-hover:rotate-180"
            /> -->
          </div>
        </a>
        <a href="blogs.html" class="w-fit">
          <div class="nav-link group">
            Blogs
            <!-- <img
              src="./assets/img/icon/down-arrow.svg"
              alt=""
              class="group-hover:rotate-180"
            /> -->
          </div>
        </a> --}}
        {{-- <div class="group relative">
          <a href="/" class="w-fit">
            <div class="nav-link group/item">
              Pages
              <img  src="{{ asset('images/down-arrow.svg') }}" alt="" class="group-hover/item:rotate-180">
            </div>
          </a>
          <div class="absolute overflow-hidden h-0 transition-all duration-300 bg-white min-w-[180px] group-hover:h-[115px] px-3 -left-3 shadow-threeSide">
            <a href="" class="w-fit">
              <div class="nav-link group mt-3 mb-4">Service Details</div>
            </a>
            <a href="blog-details.html" class="w-fit">
              <div class="nav-link group my-4">Blog Details</div>
            </a>
            <a href="pricing.html" class="w-fit">
              <div class="nav-link group my-4">Pricing</div>
            </a>
          </div>
        </div> --}}
        <a href="{{route('contactus')}}" class="w-fit">
          <div class="nav-link group">
            Contact
            <!-- <img
              src="./assets/img/icon/down-arrow.svg"
              alt=""
              class="group-hover:rotate-180"
            /> -->
          </div>
        </a>
      </div>
      {{-- <div class="gap-2.5 hidden lg:flex">
        <div class="border-btn-wrapper">
          <a class="border-btn" href="#">Login</a>
        </div>
        <div class="bg-btn-wrapper">
          <a class="bg-btn" href="#">Sign Up</a>
        </div>
      </div> --}}
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