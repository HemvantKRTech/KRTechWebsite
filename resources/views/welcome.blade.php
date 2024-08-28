<x-layout>
    @slot('title', 'AR Technology')

    @push('styles')
        {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
        <style>
          
            /* .container {
    margin-left: auto;
    margin-right: auto; 
     max-width: full;
} */
          
        </style>
    @endpush

    @include('partials.navigation')


    <section class="mt-0  px-4 xl:px-0">
      <div class="container" style="max-width:none;">
        <!-- Slider main container -->
        <div class="single-item">
          @foreach ($slider as $item)
<div><img src="{{ asset($item->image) }}" alt="{{ $item->title }}" ></div>
              
          @endforeach

</div>
    </section>

    <script type="text/javascript">
     $('.single-item').slick({
      slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
     });
      </script>
    
    
  
    <section class="mt-[60px]  px-4 xl:px-0">
        <div class="container grid grid-cols-4 sm:grid-cols-8 lg:grid-cols-12 gap-[30px]">
            <!-- card start  -->
            <div data-aos="fade-up"
                class="col-span-4 border shadow-primary border-[#F5F5F5] rounded-[20px] overflow-hidden relative after:block after:w-0 after:h-0 hover:after:w-full hover:after:h-full after:bg-sb-orange after:absolute after:top-0 after:left-0 after:transition-all after:duration-500 before:block before:w-0 before:h-0 hover:before:w-full hover:before:h-full before:bg-sb-orange before:absolute before:bottom-0 before:right-0 before:transition-all before:duration-500 aos-init">
                <div class="relative z-10 p-10 rounded-[20px] bg-white m-[1px]">
                    <img src="/images/features-card-bg.svg" alt="" class="absolute right-0 top-[30px] z-20">
                    <img src="/images/chat.svg" alt="" class="mb-[30px] w-16 aspect-square">
                    <h1 class="text-2xl font-bold text-heading pb-5">
                        Prestige Management
                    </h1>
                    <p class="text-lg text-paragraph mb-7">
                        Real estate is a lucrative ind involves the is a buying selling
                        and reproperties. It is a good encompasses residential
                    </p>
                    <a href="service_details.html"
                        class="flex h-fit items-center gap-2.5 text-base font-bold text-sb-orange relative before:block before:w-full before:h-full before:border-b before:border-sb-orange before:absolute w-fit before:ease-out before:origin-right hover:before:origin-left before:transition-transform before:duration-300 before:scale-x-0 hover:before:scale-x-100 group">
                        More about
                        <svg class="group-hover:scale-x-125 origin-left transition-transform duration-300"
                            width="15" height="13" viewBox="0 0 15 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.6875 7.71875L8.6875 12.7188C8.5 12.9062 8.25 13 8 13C7.71875 13 7.46875 12.9062 7.28125 12.7188C6.875 12.3438 6.875 11.6875 7.28125 11.3125L10.5625 8H1C0.4375 8 0 7.5625 0 7C0 6.46875 0.4375 6 1 6H10.5625L7.28125 2.71875C6.875 2.34375 6.875 1.6875 7.28125 1.3125C7.65625 0.90625 8.3125 0.90625 8.6875 1.3125L13.6875 6.3125C14.0938 6.6875 14.0938 7.34375 13.6875 7.71875Z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- card end  -->
            <!-- card start  -->
            <div data-aos="fade-up" data-aos-delay="100"
                class="col-span-4 border shadow-primary border-[#F5F5F5] rounded-[20px] overflow-hidden relative after:block after:w-0 after:h-0 hover:after:w-full hover:after:h-full after:bg-sb-orange after:absolute after:top-0 after:left-0 after:transition-all after:duration-500 before:block before:w-0 before:h-0 hover:before:w-full hover:before:h-full before:bg-sb-orange before:absolute before:bottom-0 before:right-0 before:transition-all before:duration-500 aos-init">
                <div class="relative z-10 p-10 rounded-[20px] bg-white m-[1px]">
                    <img src="/images/features-card-bg.svg" alt="" class="absolute right-0 top-[30px] z-20">
                    <img src="/images/content.svg" alt="" class="mb-[30px] w-16 aspect-square">
                    <h1 class="text-2xl font-bold text-heading pb-5">
                        Prestige Management
                    </h1>
                    <p class="text-lg text-paragraph mb-7">
                        Real estate is a lucrative ind involves the is a buying selling
                        and reproperties. It is a good encompasses residential
                    </p>
                    <a href="service_details.html"
                        class="flex h-fit items-center gap-2.5 text-base font-bold text-sb-orange relative before:block before:w-full before:h-full before:border-b before:border-sb-orange before:absolute w-fit before:ease-out before:origin-right hover:before:origin-left before:transition-transform before:duration-300 before:scale-x-0 hover:before:scale-x-100 group">
                        More about
                        <svg class="group-hover:scale-x-125 origin-left transition-transform duration-300"
                            width="15" height="13" viewBox="0 0 15 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.6875 7.71875L8.6875 12.7188C8.5 12.9062 8.25 13 8 13C7.71875 13 7.46875 12.9062 7.28125 12.7188C6.875 12.3438 6.875 11.6875 7.28125 11.3125L10.5625 8H1C0.4375 8 0 7.5625 0 7C0 6.46875 0.4375 6 1 6H10.5625L7.28125 2.71875C6.875 2.34375 6.875 1.6875 7.28125 1.3125C7.65625 0.90625 8.3125 0.90625 8.6875 1.3125L13.6875 6.3125C14.0938 6.6875 14.0938 7.34375 13.6875 7.71875Z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- card end  -->
            <!-- card start  -->
            <div data-aos="fade-up" data-aos-delay="200"
                class="col-span-4 border shadow-primary border-[#F5F5F5] rounded-[20px] overflow-hidden relative after:block after:w-0 after:h-0 hover:after:w-full hover:after:h-full after:bg-sb-orange after:absolute after:top-0 after:left-0 after:transition-all after:duration-500 before:block before:w-0 before:h-0 hover:before:w-full hover:before:h-full before:bg-sb-orange before:absolute before:bottom-0 before:right-0 before:transition-all before:duration-500 aos-init">
                <div class="relative z-10 p-10 rounded-[20px] bg-white m-[1px]">
                    <img src="/images/features-card-bg.svg" alt="" class="absolute right-0 top-[30px] z-20">
                    <img src="/images/search.svg" alt="" class="mb-[30px] w-16 aspect-square">
                    <h1 class="text-2xl font-bold text-heading pb-5">
                        Prestige Management
                    </h1>
                    <p class="text-lg text-paragraph mb-7">
                        Real estate is a lucrative ind involves the is a buying selling
                        and reproperties. It is a good encompasses residential
                    </p>
                    <a href="service_details.html"
                        class="flex h-fit items-center gap-2.5 text-base font-bold text-sb-orange relative before:block before:w-full before:h-full before:border-b before:border-sb-orange before:absolute w-fit before:ease-out before:origin-right hover:before:origin-left before:transition-transform before:duration-300 before:scale-x-0 hover:before:scale-x-100 group">
                        More about
                        <svg class="group-hover:scale-x-125 origin-left transition-transform duration-300"
                            width="15" height="13" viewBox="0 0 15 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.6875 7.71875L8.6875 12.7188C8.5 12.9062 8.25 13 8 13C7.71875 13 7.46875 12.9062 7.28125 12.7188C6.875 12.3438 6.875 11.6875 7.28125 11.3125L10.5625 8H1C0.4375 8 0 7.5625 0 7C0 6.46875 0.4375 6 1 6H10.5625L7.28125 2.71875C6.875 2.34375 6.875 1.6875 7.28125 1.3125C7.65625 0.90625 8.3125 0.90625 8.6875 1.3125L13.6875 6.3125C14.0938 6.6875 14.0938 7.34375 13.6875 7.71875Z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- card end  -->
        </div>
    </section>

    <section class="mt-[60px] lg:mt-[120px] overflow-hidden px-4 xl:px-0">
        <div class="container grid grid-cols-6 lg:grid-cols-12 gap-0 lg:gap-[60px]">
            <!-- left side  -->
            <div data-aos="fade-right"
                class="col-span-6 h-full flex justify-center items-center bg-[#FFFAF0] rounded-[20px] aos-init">
                <img src="/images/about-img.png" alt="" class="">
            </div>
            <!-- right side  -->
            <div data-aos="fade-left" class="col-span-6 pt-16 aos-init">
                <h1 class="text-xl text-sb-orange font-bold">Know About Us</h1>
                <h2 class="text-heading font-[900] text-3xl sm:text-[40px] leading-[45px] mt-[18px]">
                    The Future of Mobile Software Unleash Your Mobile
                </h2>
                <p class="text-paragraph text-lg mt-7 max-w-[545px]">
                    Et purus duis sollicitudin dign habitant. Egestas nulla quis
                    venenatis cras sed eu massa eu faucibus Urna fusce Et purus duis
                    sollicitudin dignissim habitant. Egestas nulla quis venenatis
                </p>
                <ul class="text-sm text-heading font-bold leading-[30px] mt-10 mb-20">
                    <li class="flex h-fit items-center gap-2.5">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.59375 10.625C7.25 10.9688 6.71875 10.9688 6.375 10.625L4.375 8.625C4.03125 8.28125 4.03125 7.75 4.375 7.40625C4.71875 7.0625 5.25 7.0625 5.59375 7.40625L7 8.78125L10.375 5.40625C10.7188 5.0625 11.25 5.0625 11.5938 5.40625C11.9375 5.75 11.9375 6.28125 11.5938 6.625L7.59375 10.625ZM16 8C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8C0 3.59375 3.5625 0 8 0C12.4062 0 16 3.59375 16 8ZM8 1.5C4.40625 1.5 1.5 4.4375 1.5 8C1.5 11.5938 4.40625 14.5 8 14.5C11.5625 14.5 14.5 11.5938 14.5 8C14.5 4.4375 11.5625 1.5 8 1.5Z"
                                fill="#FC0012"></path>
                        </svg>
                        Et purus duis sollicitudin dignissim habitant
                    </li>
                    <li class="flex h-fit items-center gap-2.5">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.59375 10.625C7.25 10.9688 6.71875 10.9688 6.375 10.625L4.375 8.625C4.03125 8.28125 4.03125 7.75 4.375 7.40625C4.71875 7.0625 5.25 7.0625 5.59375 7.40625L7 8.78125L10.375 5.40625C10.7188 5.0625 11.25 5.0625 11.5938 5.40625C11.9375 5.75 11.9375 6.28125 11.5938 6.625L7.59375 10.625ZM16 8C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8C0 3.59375 3.5625 0 8 0C12.4062 0 16 3.59375 16 8ZM8 1.5C4.40625 1.5 1.5 4.4375 1.5 8C1.5 11.5938 4.40625 14.5 8 14.5C11.5625 14.5 14.5 11.5938 14.5 8C14.5 4.4375 11.5625 1.5 8 1.5Z"
                                fill="#FC0012"></path>
                        </svg>
                        venenatis cras sed eu massa eu faucibus uis
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Partner start-->
    <section class="mt-0 lg:mt-[120px] px-4 xl:px-0">
        <div class="container">
            <!-- Slider main container -->
            <div class="swiper partnerSlider swiper-initialized swiper-horizontal">
                <div class="swiper-wrapper flex items-center" id="swiper-wrapper-ffa41048e8e8c7e1" aria-live="off"
                    style="transition-duration: 0ms; transform: translate3d(-1320px, 0px, 0px); transition-delay: 0ms;">














                    <div class="swiper-slide" role="group" aria-label="10 / 14" data-swiper-slide-index="9"
                        style="width: 158.571px; margin-right: 30px;">
                        <img src="images/3.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                    <div class="swiper-slide" role="group" aria-label="11 / 14" data-swiper-slide-index="10"
                        style="width: 158.571px; margin-right: 30px;">
                        <img src="images/4.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                    <div class="swiper-slide" role="group" aria-label="12 / 14" data-swiper-slide-index="11"
                        style="width: 158.571px; margin-right: 30px;">
                        <img src="images/5.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                    <div class="swiper-slide" role="group" aria-label="13 / 14" data-swiper-slide-index="12"
                        style="width: 158.571px; margin-right: 30px;">
                        <img src="images/6.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                    <div class="swiper-slide" role="group" aria-label="14 / 14" data-swiper-slide-index="13"
                        style="width: 158.571px; margin-right: 30px;">
                        <img src="images/7.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                    <div class="swiper-slide" role="group" aria-label="1 / 14" data-swiper-slide-index="0"
                        style="width: 158.571px; margin-right: 30px;">
                        <img src="images/1.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 14"
                        data-swiper-slide-index="1" style="width: 158.571px; margin-right: 30px;">
                        <img src="images/2.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 14"
                        data-swiper-slide-index="2" style="width: 158.571px; margin-right: 30px;">
                        <img src="images/3.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="4 / 14"
                        data-swiper-slide-index="3" style="width: 158.571px; margin-right: 30px;">
                        <img src="images/4.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                    <div class="swiper-slide" role="group" aria-label="5 / 14" data-swiper-slide-index="4"
                        style="width: 158.571px; margin-right: 30px;">
                        <img src="images/5.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                    <div class="swiper-slide" role="group" aria-label="6 / 14" data-swiper-slide-index="5"
                        style="width: 158.571px; margin-right: 30px;">
                        <img src="images/6.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                    <div class="swiper-slide" role="group" aria-label="7 / 14" data-swiper-slide-index="6"
                        style="width: 158.571px; margin-right: 30px;">
                        <img src="images/7.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                    <div class="swiper-slide" role="group" aria-label="8 / 14" data-swiper-slide-index="7"
                        style="width: 158.571px; margin-right: 30px;">
                        <img src="images/1.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                    <div class="swiper-slide" role="group" aria-label="9 / 14" data-swiper-slide-index="8"
                        style="width: 158.571px; margin-right: 30px;">
                        <img src="images/2.svg" alt=""
                            class="opacity-60 transition-all duration-300 hover:opacity-100">
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div> -->
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </section>
    <!-- why us-->
    <section class="mt-[60px] lg:mt-[120px] px-4 xl:px-0">
        <div class="container grid grid-cols-6 lg:grid-cols-12 gap-[30px] lg:gap-0 overflow-hidden">
            <!-- left side  -->
            <div data-aos="zoom-in-right" class="col-span-5 h-full flex items-center aos-init">
                <div class="h-fit">
                    <h1 class="text-xl text-sb-orange font-bold">Why Choose Us</h1>
                    <h2 class="text-heading font-[900] text-3xl lg:text-[40px] leading-[45px] mt-[18px]">
                        Accelerate Your Online the Presence
                    </h2>
                    <p class="text-paragraph text-lg mt-7 max-w-[545px]">
                        Et purus duis sollicitudin dign habitant. Egestas nulla quis
                        venenatis cras sed eu massa eu faucibus Urna fusce Et purus duis
                        sollicitudin dignissim habitant. Egestas nulla
                    </p>
                    <ul class="text-sm text-heading font-bold leading-[30px] mt-10">
                        <li class="flex h-fit items-center gap-2.5">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.59375 10.625C7.25 10.9688 6.71875 10.9688 6.375 10.625L4.375 8.625C4.03125 8.28125 4.03125 7.75 4.375 7.40625C4.71875 7.0625 5.25 7.0625 5.59375 7.40625L7 8.78125L10.375 5.40625C10.7188 5.0625 11.25 5.0625 11.5938 5.40625C11.9375 5.75 11.9375 6.28125 11.5938 6.625L7.59375 10.625ZM16 8C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8C0 3.59375 3.5625 0 8 0C12.4062 0 16 3.59375 16 8ZM8 1.5C4.40625 1.5 1.5 4.4375 1.5 8C1.5 11.5938 4.40625 14.5 8 14.5C11.5625 14.5 14.5 11.5938 14.5 8C14.5 4.4375 11.5625 1.5 8 1.5Z"
                                    fill="#FC0012"></path>
                            </svg>

                            Powering Your Digital Success
                        </li>
                        <li class="flex h-fit items-center gap-2.5">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.59375 10.625C7.25 10.9688 6.71875 10.9688 6.375 10.625L4.375 8.625C4.03125 8.28125 4.03125 7.75 4.375 7.40625C4.71875 7.0625 5.25 7.0625 5.59375 7.40625L7 8.78125L10.375 5.40625C10.7188 5.0625 11.25 5.0625 11.5938 5.40625C11.9375 5.75 11.9375 6.28125 11.5938 6.625L7.59375 10.625ZM16 8C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8C0 3.59375 3.5625 0 8 0C12.4062 0 16 3.59375 16 8ZM8 1.5C4.40625 1.5 1.5 4.4375 1.5 8C1.5 11.5938 4.40625 14.5 8 14.5C11.5625 14.5 14.5 11.5938 14.5 8C14.5 4.4375 11.5625 1.5 8 1.5Z"
                                    fill="#FC0012"></path>
                            </svg>

                            Connect Convert Conquer
                        </li>
                    </ul>
                </div>
            </div>
            <!-- right side  -->
            <div data-aos="zoom-in-left" class="col-span-7 flex justify-end aos-init">
                <div class="bg-[#FFFAF0] px-5 py-2.5 rounded-[20px]">
                    <img src="images/marketing_consulting.png" alt="" class="">
                </div>
            </div>
        </div>
    </section>
    <!--Project Start -->
    <section class="mt-[60px] lg:mt-[120px] bg-heading pt-[60px] lg:pt-[120px]">
        <div class="container">
          <div class="flex flex-col md:flex-row gap-8 h-fit items-center justify-between">
            <div class="max-w-[573px] w-full flex-1 px-4 xl:px-0">
              <h1 class="text-xl text-sb-orange font-bold">Recent Projects</h1>
              <h2 class="text-white font-[900] text-3xl lg:text-[40px] leading-[45px] mt-[18px]">
                Reach New Heights with <br>
                Digital Marketing
              </h2>
            </div>
            <div class="flex gap-[30px]">
              <img src="images/left-arrow-b.svg" alt="" class="scale-x-90 hover:scale-x-110 transition-transform origin-right duration-300 cursor-pointer project-slider-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-a62fdef325073336">
              <img src="images/right-arrow-b.svg" alt="" class="scale-x-90 hover:scale-x-110 transition-transform origin-left duration-300 cursor-pointer project-slider-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-a62fdef325073336">
            </div>
          </div>
        </div>
        <div class="w-full relative">
          <div class="absolute bottom-0 w-full h-1/2 bg-white"></div>
          <div class="max-w-[1767px] mx-auto w-full mt-[60px] px-4 xl:px-2.5">
            <div class="swiper projectSlider swiper-initialized swiper-horizontal swiper-backface-hidden">
              <div class="swiper-wrapper" id="swiper-wrapper-a62fdef325073336" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1529px, 0px, 0px); transition-delay: 0ms;">
                
                
                
                
                
                
                
                
              <div class="swiper-slide" role="group" aria-label="3 / 8" data-swiper-slide-index="2" style="width: 352.25px; margin-right: 30px;">
                  <div class="relative overflow-hidden group rounded-[20px]">
                    <img src="images/project-3.png" alt="" class="">
                    <a href="project-details.html" class="absolute bg-white bottom-8 w-11/12 rounded-r-[20px] border-r-4 border-sb-orange py-5 px-[30px] -translate-x-[120%] transition-all duration-300 group-hover:translate-x-0">
                      <h1 class="text-2xl font-bold text-heading">
                        App Launcher
                      </h1>
                      <p class="text-lg text-paragraph mt-1">Software Develop</p>
                    </a>
                  </div>
                </div><div class="swiper-slide" role="group" aria-label="4 / 8" data-swiper-slide-index="3" style="width: 352.25px; margin-right: 30px;">
                  <div class="relative overflow-hidden group rounded-[20px]">
                    <img src="images/project-4.png" alt="" class="">
                    <a href="project-details.html" class="absolute bg-white bottom-8 w-11/12 rounded-r-[20px] border-r-4 border-sb-orange py-5 px-[30px] -translate-x-[120%] transition-all duration-300 group-hover:translate-x-0">
                      <h1 class="text-2xl font-bold text-heading">
                        App Launcher
                      </h1>
                      <p class="text-lg text-paragraph mt-1">Software Develop</p>
                    </a>
                  </div>
                </div><div class="swiper-slide" role="group" aria-label="5 / 8" data-swiper-slide-index="4" style="width: 352.25px; margin-right: 30px;">
                  <div class="relative overflow-hidden group rounded-[20px]">
                    <img src="images/project-1.png" alt="" class="">
                    <a href="project-details.html" class="absolute bg-white bottom-8 w-11/12 rounded-r-[20px] border-r-4 border-sb-orange py-5 px-[30px] -translate-x-[120%] transition-all duration-300 group-hover:translate-x-0">
                      <h1 class="text-2xl font-bold text-heading">
                        App Launcher
                      </h1>
                      <p class="text-lg text-paragraph mt-1">Software Develop</p>
                    </a>
                  </div>
                </div><div class="swiper-slide swiper-slide-prev" role="group" aria-label="6 / 8" data-swiper-slide-index="5" style="width: 352.25px; margin-right: 30px;">
                  <div class="relative overflow-hidden group rounded-[20px]">
                    <img src="images/project-2.png" alt="" class="">
                    <a href="project-details.html" class="absolute bg-white bottom-8 w-11/12 rounded-r-[20px] border-r-4 border-sb-orange py-5 px-[30px] -translate-x-[120%] transition-all duration-300 group-hover:translate-x-0">
                      <h1 class="text-2xl font-bold text-heading">
                        App Launcher
                      </h1>
                      <p class="text-lg text-paragraph mt-1">Software Develop</p>
                    </a>
                  </div>
                </div><div class="swiper-slide swiper-slide-active" role="group" aria-label="7 / 8" data-swiper-slide-index="6" style="width: 352.25px; margin-right: 30px;">
                  <div class="relative overflow-hidden group rounded-[20px]">
                    <img src="images/project-3.png" alt="" class="">
                    <a href="project-details.html" class="absolute bg-white bottom-8 w-11/12 rounded-r-[20px] border-r-4 border-sb-orange py-5 px-[30px] -translate-x-[120%] transition-all duration-300 group-hover:translate-x-0">
                      <h1 class="text-2xl font-bold text-heading">
                        App Launcher
                      </h1>
                      <p class="text-lg text-paragraph mt-1">Software Develop</p>
                    </a>
                  </div>
                </div><div class="swiper-slide swiper-slide-next" role="group" aria-label="8 / 8" data-swiper-slide-index="7" style="width: 352.25px; margin-right: 30px;">
                  <div class="relative overflow-hidden group rounded-[20px]">
                    <img src="images/project-4.png" alt="" class="">
                    <a href="project-details.html" class="absolute bg-white bottom-8 w-11/12 rounded-r-[20px] border-r-4 border-sb-orange py-5 px-[30px] -translate-x-[120%] transition-all duration-300 group-hover:translate-x-0">
                      <h1 class="text-2xl font-bold text-heading">
                        App Launcher
                      </h1>
                      <p class="text-lg text-paragraph mt-1">Software Develop</p>
                    </a>
                  </div>
                </div><div class="swiper-slide" role="group" aria-label="1 / 8" data-swiper-slide-index="0" style="width: 352.25px; margin-right: 30px;">
                  <div class="relative overflow-hidden group rounded-[20px]">
                    <img src="images/project-1.png" alt="" class="">
                    <a href="project-details.html" class="absolute bg-white bottom-8 w-11/12 rounded-r-[20px] border-r-4 border-sb-orange py-5 px-[30px] -translate-x-[120%] transition-all duration-300 group-hover:translate-x-0">
                      <h1 class="text-2xl font-bold text-heading">
                        App Launcher
                      </h1>
                      <p class="text-lg text-paragraph mt-1">Software Develop</p>
                    </a>
                  </div>
                </div><div class="swiper-slide" role="group" aria-label="2 / 8" data-swiper-slide-index="1" style="width: 352.25px; margin-right: 30px;">
                  <div class="relative overflow-hidden group rounded-[20px]">
                    <img src="images/project-2.png" alt="" class="">
                    <a href="project-details.html" class="absolute bg-white bottom-8 w-11/12 rounded-r-[20px] border-r-4 border-sb-orange py-5 px-[30px] -translate-x-[120%] transition-all duration-300 group-hover:translate-x-0">
                      <h1 class="text-2xl font-bold text-heading">
                        App Launcher
                      </h1>
                      <p class="text-lg text-paragraph mt-1">Software Develop</p>
                    </a>
                  </div>
                </div></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>
        </div>
      </section>
      <section class="mt-[60px] lg:mt-[120px] pb-[60px] lg:pb-[120px] overflow-hidden px-4 xl:px-0">
        <div class="container grid grid-cols-12 gap-x-[30px]">
          <h1 class="text-xl text-sb-orange font-bold text-center col-span-12">
            Our Pricing
          </h1>
          <h2 class="text-heading font-[900] text-3xl lg:text-[40px] leading-[45px] mt-[18px] mb-8 lg:mb-[60px] text-center col-span-12">
            Drive Growth Through Digital <br>
            the and Marketing
          </h2>
          <div class="col-span-12 grid grid-cols-12 gap-[30px]">
            <!-- pricing card  -->
            <div data-aos="fade-right" class="col-span-12 sm:col-span-6 lg:col-span-4 p-10 shadow-primary bg-white rounded-[20px] aos-init">
              <div class="flex justify-between">
                <h1 class="text-heading text-[32px] leading-[44px] font-[900]">
                  Basic
                </h1>
                <h2 class="text-heading text-[32px] leading-[44px] font-[900]">
                  $29<span class="text-paragraph text-lg font-normal">
                    /month</span>
                </h2>
              </div>
              <img src="images/pricing-1.png" alt="" class="mx-auto mt-5 mb-4">
              <hr class="bg-[#5B5B5B]">
              <ul class="mt-[30px] mb-10">
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Mistakes To Avoid
                </li>
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph mt-4">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Your Startup
                </li>
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph mt-4">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Knew About Fonts
                </li>
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph mt-4">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Your Startup
                </li>
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph mt-4">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Knew About Fonts
                </li>
              </ul>
              <div class="border-btn-wrapper group">
                <a class="border-btn flex h-fit items-center gap-2.5 justify-center" href="#">
                  Start now
                  <svg class="group-hover:scale-x-125 origin-bottom-left" width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.8536 4.35355C11.0488 4.15829 11.0488 3.84171
                  10.8536 3.64645L7.67157 0.464467C7.47631 0.269205 7.15973
                  0.269204 6.96447 0.464467C6.7692 0.659729 6.7692 0.976311
                  6.96447 1.17157L9.79289 4L6.96447 6.82843C6.7692 7.02369 6.7692
                  7.34027 6.96447 7.53553C7.15973 7.7308 7.47631 7.7308 7.67157
                  7.53553L10.8536 4.35355ZM0.5 4.5L10.5 4.5L10.5 3.5L0.5 3.5L0.5
                  4.5Z" fill="currentColor"></path>
                  </svg>
                </a>
              </div>
            </div>
            <!-- pricing card  -->
            <div data-aos="fade-up" class="col-span-12 sm:col-span-6 lg:col-span-4 p-10 shadow-primary bg-white rounded-[20px] aos-init">
              <div class="flex justify-between">
                <h1 class="text-heading text-[32px] leading-[44px] font-[900]">
                  Consult
                </h1>
                <h2 class="text-heading text-[32px] leading-[44px] font-[900]">
                  $29<span class="text-paragraph text-lg font-normal">
                    /month</span>
                </h2>
              </div>
              <img src="images/pricing-2.png" alt="" class="mx-auto mt-5 mb-4">
              <hr class="bg-[#5B5B5B]">
              <ul class="mt-[30px] mb-10">
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Mistakes To Avoid
                </li>
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph mt-4">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Your Startup
                </li>
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph mt-4">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Knew About Fonts
                </li>
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph mt-4">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Your Startup
                </li>
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph mt-4">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Knew About Fonts
                </li>
              </ul>
              <div class="bg-btn-wrapper group">
                <a class="bg-btn flex h-fit items-center gap-2.5 justify-center" href="#">
                  Start now
                  <svg class="group-hover:scale-x-125 origin-bottom-left" width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.8536 4.35355C11.0488 4.15829 11.0488 3.84171
                  10.8536 3.64645L7.67157 0.464467C7.47631 0.269205 7.15973
                  0.269204 6.96447 0.464467C6.7692 0.659729 6.7692 0.976311
                  6.96447 1.17157L9.79289 4L6.96447 6.82843C6.7692 7.02369 6.7692
                  7.34027 6.96447 7.53553C7.15973 7.7308 7.47631 7.7308 7.67157
                  7.53553L10.8536 4.35355ZM0.5 4.5L10.5 4.5L10.5 3.5L0.5 3.5L0.5
                  4.5Z" fill="currentColor"></path>
                  </svg>
                </a>
              </div>
            </div>
            <!-- pricing card  -->
            <div data-aos="fade-left" class="col-span-12 sm:col-span-6 lg:col-span-4 p-10 shadow-primary bg-white rounded-[20px] aos-init">
              <div class="flex justify-between">
                <h1 class="text-heading text-[32px] leading-[44px] font-[900]">
                  Premium
                </h1>
                <h2 class="text-heading text-[32px] leading-[44px] font-[900]">
                  $29<span class="text-paragraph text-lg font-normal">
                    /month</span>
                </h2>
              </div>
              <img src="images/pricing-3.png" alt="" class="mx-auto mt-5 mb-4">
              <hr class="bg-[#5B5B5B]">
              <ul class="mt-[30px] mb-10">
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Mistakes To Avoid
                </li>
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph mt-4">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Your Startup
                </li>
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph mt-4">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Knew About Fonts
                </li>
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph mt-4">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Your Startup
                </li>
                <li class="flex gap-4 items-center h-fit text-lg text-paragraph mt-4">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8.00003C0 3.59378 3.5625 3.05176e-05 8 3.05176e-05C12.4062 3.05176e-05 16 3.59378 16 8.00003C16 12.4375 12.4062 16 8 16C3.5625 16 0 12.4375 0 8.00003ZM11.5938 6.62503C11.9375 6.28128 11.9375 5.75003 11.5938 5.40628C11.25 5.06253 10.7188 5.06253 10.375 5.40628L7 8.78128L5.59375 7.40628C5.25 7.06253 4.71875 7.06253 4.375 7.40628C4.03125 7.75003 4.03125 8.28128 4.375 8.62503L6.375 10.625C6.71875 10.9688 7.25 10.9688 7.59375 10.625L11.5938 6.62503Z" fill="#0E191E"></path>
                  </svg>
                  Knew About Fonts
                </li>
              </ul>
              <div class="border-btn-wrapper group">
                <a class="border-btn flex h-fit items-center gap-2.5 justify-center" href="#">
                  Start now
                  <svg class="group-hover:scale-x-125 origin-bottom-left" width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.8536 4.35355C11.0488 4.15829 11.0488 3.84171
                  10.8536 3.64645L7.67157 0.464467C7.47631 0.269205 7.15973
                  0.269204 6.96447 0.464467C6.7692 0.659729 6.7692 0.976311
                  6.96447 1.17157L9.79289 4L6.96447 6.82843C6.7692 7.02369 6.7692
                  7.34027 6.96447 7.53553C7.15973 7.7308 7.47631 7.7308 7.67157
                  7.53553L10.8536 4.35355ZM0.5 4.5L10.5 4.5L10.5 3.5L0.5 3.5L0.5
                  4.5Z" fill="currentColor"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--TEstimonial-->
      <section class="flex flex-col items-center px-4 xl:px-0">
        <div class="max-w-[1814px] px-2.5 rounded-[20px] overflow-hidden w-full relative flex items-center flex-col h-fit">
          <img src="images/video-thumb.png" alt="" class="absolute top-0 left-0">
          <div class="pt-[20%] pb-[5%]">
            <button type="button" id="play-video" class="play-btn relative w-16 aspect-square flex justify-center items-center bg-opacity-70 bg-white rounded-full after:block after:w-[130%] after:aspect-square after:rounded-full after:border-b-2 after:border-white after:absolute before:block before:w-[160%] before:aspect-square before:rounded-full before:border-t-2 before:border-white before:absolute transition-all duration-300 hover:bg-opacity-100">
              <img src="images/play-btn.svg" alt="" class="w-[30px] h-[30px]">
            </button>
          </div>
          <div class="container">
            <div class="swiper testimonialsSlider swiper-initialized swiper-horizontal swiper-backface-hidden">
              <div class="swiper-wrapper" id="swiper-wrapper-0ef2a3997c3965ae" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-2580px, 0px, 0px); transition-delay: 0ms;">
                
                
                
              <div class="swiper-slide swiper-slide-next" role="group" aria-label="1 / 3" data-swiper-slide-index="0" style="width: 1290px;">
                  <div class="shadow-primary m-3">
                    <div class="flex flex-col items-center sm:flex-row sm:justify-between rounded-[20px] overflow-hidden bg-white">
                      <div class="py-5 pl-5 pr-6 lg:py-[55px] lg:pl-[70px] lg:pr-[120px] flex-1">
                        <p class="text-2xl text-paragraph">
                          Financial planners help people to gain knowledge aboutw
                          toio invest and save their money in the most efficient
                          way ever. Many people all of u across the coun us them
                          Financial planners help people Financial know planners
                          help people Financial planners
                        </p>
                        <h1 class="text-2xl text-heading font-bold mt-[26px]">
                          Ronald Richards
                        </h1>
                        <p class="text-lg text-paragraph">Web Designer</p>
                      </div>
                      <div class="relative h-full w-fit flex justify-center items-center">
                        <div class="absolute w-[90px] aspect-square rounded-full bg-white flex justify-center items-center -left-[45px] shadow-primary">
                          <img src="images/comma.svg" alt="" class="">
                        </div>
  
                        <img src="images/testimonial-img.png" alt="" class="h-full">
                      </div>
                    </div>
                  </div>
                </div><div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 3" data-swiper-slide-index="1" style="width: 1290px;">
                  <div class="shadow-primary m-3">
                    <div class="flex flex-col items-center sm:flex-row sm:justify-between rounded-[20px] overflow-hidden bg-white">
                      <div class="py-5 pl-5 pr-6 lg:py-[55px] lg:pl-[70px] lg:pr-[120px] flex-1">
                        <p class="text-2xl text-paragraph">
                          Financial planners help people to gain knowledge aboutw
                          toio invest and save their money in the most efficient
                          way ever. Many people all of u across the coun us them
                          Financial planners help people Financial know planners
                          help people Financial planners
                        </p>
                        <h1 class="text-2xl text-heading font-bold mt-[26px]">
                          Ronald Richards
                        </h1>
                        <p class="text-lg text-paragraph">Web Designer</p>
                      </div>
                      <div class="relative h-full w-fit flex justify-center items-center">
                        <div class="absolute w-[90px] aspect-square rounded-full bg-white flex justify-center items-center -left-[45px] shadow-primary">
                          <img src="images/comma.svg" alt="" class="">
                        </div>
  
                        <img src="images/testimonial-img.png" alt="" class="h-full">
                      </div>
                    </div>
                  </div>
                </div><div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 3" data-swiper-slide-index="2" style="width: 1290px;">
                  <div class="shadow-primary m-3">
                    <div class="flex flex-col items-center sm:flex-row sm:justify-between rounded-[20px] overflow-hidden bg-white">
                      <div class="py-5 pl-5 pr-6 lg:py-[55px] lg:pl-[70px] lg:pr-[120px] flex-1">
                        <p class="text-2xl text-paragraph">
                          Financial planners help people to gain knowledge aboutw
                          toio invest and save their money in the most efficient
                          way ever. Many people all of u across the coun us them
                          Financial planners help people Financial know planners
                          help people Financial planners
                        </p>
                        <h1 class="text-2xl text-heading font-bold mt-[26px]">
                          Ronald Richards
                        </h1>
                        <p class="text-lg text-paragraph">Web Designer</p>
                      </div>
                      <div class="relative h-full w-fit flex justify-center items-center">
                        <div class="absolute w-[90px] aspect-square rounded-full bg-white flex justify-center items-center -left-[45px] shadow-primary">
                          <img src="images/comma.svg" alt="" class="">
                        </div>
  
                        <img src="images/testimonial-img.png" alt="" class="h-full">
                      </div>
                    </div>
                  </div>
                </div></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
  
            <!-- navigation button  -->
            <div class="flex gap-[30px] w-full justify-center pt-8 lg:pt-14">
              <img src="images/left-arrow-b.svg" alt="" class="scale-x-90 hover:scale-x-110 transition-transform origin-right duration-300 cursor-pointer testimonial-slider-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-0ef2a3997c3965ae">
              <img src="images/right-arrow-b.svg" alt="" class="scale-x-90 hover:scale-x-110 transition-transform origin-left duration-300 cursor-pointer testimonial-slider-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-0ef2a3997c3965ae">
            </div>
          </div>
        </div>
      </section>

      <!--TEam-->
      <section id="team-members" class="mt-[60px] lg:mt-[120px] overflow-hidden px-4 xl:px-0">
        <div class="container grid grid-cols-12">
          <h1 class="text-xl text-sb-orange font-bold text-center col-span-12">
            Our Team
          </h1>
          <h2 class="text-heading font-[900] text-3xl lg:text-[40px] leading-[45px] mt-[18px] mb-[60px] text-center col-span-12">
            Unleash the Power of the <br>
            Digital Advertising
          </h2>
  
          <div class="col-span-12 grid grid-cols-6 lg:grid-cols-12 gap-[30px]">
            <!-- team card  -->
            @foreach ($teams as $item)
                
           
            <div data-aos="fade-right" class="col-span-6 rounded-[20px] bg-white shadow-primary flex flex-col sm:flex-row justify-between gap-6 aos-init">
              <div class="flex-1 py-10 pl-10">
                <h1 class="text-[32px] leading-[45px] font-[900] text-heading">
                  {{$item->name}}
                </h1>
                @foreach ($item->skill as $skills)
                    
               
                <div class="mt-5">
                  <p class="text-lg text-paragraph">{{$skills->name}}</p>
                  <div data-scroll-fm="scroll" data-anim-type="count-width" class="w-full h-1.5 rounded-[10px] bg-[#F5F5F5] mt-1.5 relative overflow-hidden before:block before:w-[{{$skills->range}}%] before:h-full before:bg-sb-orange before:rounded-[10px] width-increase"></div>
                </div>
                @endforeach
                {{-- <div class="mt-5">
                  <p class="text-lg text-paragraph">Designer</p>
                  <div data-scroll-fm="scroll" data-anim-type="count-width" class="w-full h-1.5 rounded-[10px] bg-[#F5F5F5] mt-1.5 relative overflow-hidden before:block before:w-[80%] before:h-full before:bg-sb-orange before:rounded-[10px] width-increase"></div>
                </div> --}}
                <!-- social links  -->
                <div class="flex rounded-[10px] bg-[#FFFAF0] w-fit px-4 py-2.5 mt-10 gap-[30px]">
                  <!-- Tweeter  -->
                  <a href="{{$item->twitter}}" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="twitter">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.52217 6.7837L15.4785 0.00878906H14.0671L8.89516 5.89135L4.76437 0.00878906H0L6.24656 8.90426L0 16.0088H1.41155L6.87321 9.79661L11.2356 16.0088H16L9.52183 6.7837H9.52217ZM7.58887 8.98263L6.95596 8.09684L1.92015 1.04853H4.0882L8.15216 6.73674L8.78507 7.62253L14.0677 15.0163H11.8997L7.58887 8.98297V8.98263Z" fill="currentColor"></path>
                    </svg>
                  </a>
                  <!-- facebook  -->
                  <a href="{{$item->twitter}}" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="facebook">
                    <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.71875 9.00879H6.375V16.0088H3.25V9.00879H0.6875V6.13379H3.25V3.91504C3.25 1.41504 4.75 0.00878906 7.03125 0.00878906C8.125 0.00878906 9.28125 0.227539 9.28125 0.227539V2.69629H8C6.75 2.69629 6.375 3.44629 6.375 4.25879V6.13379H9.15625L8.71875 9.00879Z" fill="currentColor"></path>
                    </svg>
                  </a>
                  <!-- instagram  -->
                  <a href="{{$item->twitter}}" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="instagram">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 3.41504C9.96875 3.41504 11.5938 5.04004 11.5938
                      7.00879C11.5938 9.00879 9.96875 10.6025 8 10.6025C6 10.6025
                      4.40625 9.00879 4.40625 7.00879C4.40625 5.04004 6 3.41504 8
                      3.41504ZM8 9.35254C9.28125 9.35254 10.3125 8.32129 10.3125
                      7.00879C10.3125 5.72754 9.28125 4.69629 8 4.69629C6.6875
                      4.69629 5.65625 5.72754 5.65625 7.00879C5.65625 8.32129
                      6.71875 9.35254 8 9.35254ZM12.5625 3.29004C12.5625 2.82129
                      12.1875 2.44629 11.7188 2.44629C11.25 2.44629 10.875 2.82129
                      10.875 3.29004C10.875 3.75879 11.25 4.13379 11.7188
                      4.13379C12.1875 4.13379 12.5625 3.75879 12.5625
                      3.29004ZM14.9375 4.13379C15 5.29004 15 8.75879 14.9375
                      9.91504C14.875 11.04 14.625 12.0088 13.8125 12.8525C13
                      13.665 12 13.915 10.875 13.9775C9.71875 14.04 6.25 14.04
                      5.09375 13.9775C3.96875 13.915 3 13.665 2.15625
                      12.8525C1.34375 12.0088 1.09375 11.04 1.03125
                      9.91504C0.96875 8.75879 0.96875 5.29004 1.03125
                      4.13379C1.09375 3.00879 1.34375 2.00879 2.15625 1.19629C3
                      0.383789 3.96875 0.133789 5.09375 0.0712891C6.25 0.00878906
                      9.71875 0.00878906 10.875 0.0712891C12 0.133789 13 0.383789
                      13.8125 1.19629C14.625 2.00879 14.875 3.00879 14.9375
                      4.13379ZM13.4375 11.1338C13.8125 10.2275 13.7188 8.04004
                      13.7188 7.00879C13.7188 6.00879 13.8125 3.82129 13.4375
                      2.88379C13.1875 2.29004 12.7188 1.79004 12.125
                      1.57129C11.1875 1.19629 9 1.29004 8 1.29004C6.96875 1.29004
                      4.78125 1.19629 3.875 1.57129C3.25 1.82129 2.78125 2.29004
                      2.53125 2.88379C2.15625 3.82129 2.25 6.00879 2.25
                      7.00879C2.25 8.04004 2.15625 10.2275 2.53125 11.1338C2.78125
                      11.7588 3.25 12.2275 3.875 12.4775C4.78125 12.8525 6.96875
                      12.7588 8 12.7588C9 12.7588 11.1875 12.8525 12.125
                      12.4775C12.7188 12.2275 13.2188 11.7588 13.4375 11.1338Z" fill="currentColor"></path>
                    </svg>
                  </a>
                  <!-- linkdin  -->
                  <a href="{{$item->twitter}}" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="linkdin">
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.125
                      15.0088H0.21875V5.66504H3.125V15.0088ZM1.65625 4.41504C0.75
                      4.41504 0 3.63379 0 2.69629C0 1.41504 1.375 0.602539 2.5
                      1.25879C3.03125 1.54004 3.34375 2.10254 3.34375
                      2.69629C3.34375 3.63379 2.59375 4.41504 1.65625
                      4.41504ZM13.9688 15.0088H11.0938V10.4775C11.0938 9.38379
                      11.0625 8.00879 9.5625 8.00879C8.0625 8.00879 7.84375
                      9.16504 7.84375
                      10.3838V15.0088H4.9375V5.66504H7.71875V6.94629H7.75C8.15625
                      6.22754 9.09375 5.44629 10.5 5.44629C13.4375 5.44629 14
                      7.38379 14 9.88379V15.0088H13.9688Z" fill="currentColor"></path>
                    </svg>
                  </a>
                </div>
              </div>
              <img src="storage/{{$item->image}}" alt=""style=" width: 321px;height: 321px; border-radius: 0 20px 20px 0; ">
            </div>
            @endforeach
            {{-- <!-- team card  -->
            <div data-aos="fade-right" data-aos-delay="100" class="col-span-6 rounded-[20px] bg-white shadow-primary flex flex-col sm:flex-row justify-between gap-6 aos-init">
              <div class="flex-1 py-10 pl-10">
                <h1 class="text-[32px] leading-[45px] font-[900] text-heading">
                  Fahad Hossain
                </h1>
                <div class="mt-5">
                  <p class="text-lg text-paragraph">Mentor</p>
                  <div data-scroll-fm="scroll" data-anim-type="count-width" class="w-full h-1.5 rounded-[10px] bg-[#F5F5F5] mt-1.5 relative overflow-hidden before:block before:w-[80%] before:h-full before:bg-sb-orange before:rounded-[10px] width-increase"></div>
                </div>
                <div class="mt-5">
                  <p class="text-lg text-paragraph">Designer</p>
                  <div data-scroll-fm="scroll" data-anim-type="count-width" class="w-full h-1.5 rounded-[10px] bg-[#F5F5F5] mt-1.5 relative overflow-hidden before:block before:w-[80%] before:h-full before:bg-sb-orange before:rounded-[10px] width-increase"></div>
                </div>
                <!-- social links  -->
                <div class="flex rounded-[10px] bg-[#FFFAF0] w-fit px-4 py-2.5 mt-10 gap-[30px]">
                  <!-- Tweeter  -->
                  <a href="https://x.com" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="twitter">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.52217 6.7837L15.4785 0.00878906H14.0671L8.89516 5.89135L4.76437 0.00878906H0L6.24656 8.90426L0 16.0088H1.41155L6.87321 9.79661L11.2356 16.0088H16L9.52183 6.7837H9.52217ZM7.58887 8.98263L6.95596 8.09684L1.92015 1.04853H4.0882L8.15216 6.73674L8.78507 7.62253L14.0677 15.0163H11.8997L7.58887 8.98297V8.98263Z" fill="currentColor"></path>
                    </svg>
                  </a>
                  <!-- facebook  -->
                  <a href="https://www.facebook.com" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="facebook">
                    <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.71875 9.00879H6.375V16.0088H3.25V9.00879H0.6875V6.13379H3.25V3.91504C3.25 1.41504 4.75 0.00878906 7.03125 0.00878906C8.125 0.00878906 9.28125 0.227539 9.28125 0.227539V2.69629H8C6.75 2.69629 6.375 3.44629 6.375 4.25879V6.13379H9.15625L8.71875 9.00879Z" fill="currentColor"></path>
                    </svg>
                  </a>
                  <!-- instagram  -->
                  <a href="https://www.instagram.com" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="instagram">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 3.41504C9.96875 3.41504 11.5938 5.04004 11.5938
                    7.00879C11.5938 9.00879 9.96875 10.6025 8 10.6025C6 10.6025
                    4.40625 9.00879 4.40625 7.00879C4.40625 5.04004 6 3.41504 8
                    3.41504ZM8 9.35254C9.28125 9.35254 10.3125 8.32129 10.3125
                    7.00879C10.3125 5.72754 9.28125 4.69629 8 4.69629C6.6875
                    4.69629 5.65625 5.72754 5.65625 7.00879C5.65625 8.32129
                    6.71875 9.35254 8 9.35254ZM12.5625 3.29004C12.5625 2.82129
                    12.1875 2.44629 11.7188 2.44629C11.25 2.44629 10.875 2.82129
                    10.875 3.29004C10.875 3.75879 11.25 4.13379 11.7188
                    4.13379C12.1875 4.13379 12.5625 3.75879 12.5625
                    3.29004ZM14.9375 4.13379C15 5.29004 15 8.75879 14.9375
                    9.91504C14.875 11.04 14.625 12.0088 13.8125 12.8525C13
                    13.665 12 13.915 10.875 13.9775C9.71875 14.04 6.25 14.04
                    5.09375 13.9775C3.96875 13.915 3 13.665 2.15625
                    12.8525C1.34375 12.0088 1.09375 11.04 1.03125
                    9.91504C0.96875 8.75879 0.96875 5.29004 1.03125
                    4.13379C1.09375 3.00879 1.34375 2.00879 2.15625 1.19629C3
                    0.383789 3.96875 0.133789 5.09375 0.0712891C6.25 0.00878906
                    9.71875 0.00878906 10.875 0.0712891C12 0.133789 13 0.383789
                    13.8125 1.19629C14.625 2.00879 14.875 3.00879 14.9375
                    4.13379ZM13.4375 11.1338C13.8125 10.2275 13.7188 8.04004
                    13.7188 7.00879C13.7188 6.00879 13.8125 3.82129 13.4375
                    2.88379C13.1875 2.29004 12.7188 1.79004 12.125
                    1.57129C11.1875 1.19629 9 1.29004 8 1.29004C6.96875 1.29004
                    4.78125 1.19629 3.875 1.57129C3.25 1.82129 2.78125 2.29004
                    2.53125 2.88379C2.15625 3.82129 2.25 6.00879 2.25
                    7.00879C2.25 8.04004 2.15625 10.2275 2.53125 11.1338C2.78125
                    11.7588 3.25 12.2275 3.875 12.4775C4.78125 12.8525 6.96875
                    12.7588 8 12.7588C9 12.7588 11.1875 12.8525 12.125
                    12.4775C12.7188 12.2275 13.2188 11.7588 13.4375 11.1338Z" fill="currentColor"></path>
                    </svg>
                  </a>
                  <!-- linkdin  -->
                  <a href="https://bd.linkedin.com" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="linkdin">
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.125
                    15.0088H0.21875V5.66504H3.125V15.0088ZM1.65625 4.41504C0.75
                    4.41504 0 3.63379 0 2.69629C0 1.41504 1.375 0.602539 2.5
                    1.25879C3.03125 1.54004 3.34375 2.10254 3.34375
                    2.69629C3.34375 3.63379 2.59375 4.41504 1.65625
                    4.41504ZM13.9688 15.0088H11.0938V10.4775C11.0938 9.38379
                    11.0625 8.00879 9.5625 8.00879C8.0625 8.00879 7.84375
                    9.16504 7.84375
                    10.3838V15.0088H4.9375V5.66504H7.71875V6.94629H7.75C8.15625
                    6.22754 9.09375 5.44629 10.5 5.44629C13.4375 5.44629 14
                    7.38379 14 9.88379V15.0088H13.9688Z" fill="currentColor"></path>
                    </svg>
                  </a>
                </div>
              </div>
              <img src="images/team/2.png" alt="" class="h-full">
            </div>
            <!-- team card  -->
            <div data-aos="fade-left" data-aos-delay="100" class="col-span-6 rounded-[20px] bg-white shadow-primary flex flex-col sm:flex-row justify-between gap-6 aos-init">
              <div class="flex-1 py-10 pl-10">
                <h1 class="text-[32px] leading-[45px] font-[900] text-heading">
                  Sakib Sami
                </h1>
                <div class="mt-5">
                  <p class="text-lg text-paragraph">Mentor</p>
                  <div data-scroll-fm="scroll" data-anim-type="count-width" class="w-full h-1.5 rounded-[10px] bg-[#F5F5F5] mt-1.5 relative overflow-hidden before:block before:w-[80%] before:h-full before:bg-sb-orange before:rounded-[10px] width-increase"></div>
                </div>
                <div class="mt-5">
                  <p class="text-lg text-paragraph">Designer</p>
                  <div data-scroll-fm="scroll" data-anim-type="count-width" class="w-full h-1.5 rounded-[10px] bg-[#F5F5F5] mt-1.5 relative overflow-hidden before:block before:w-[80%] before:h-full before:bg-sb-orange before:rounded-[10px] width-increase"></div>
                </div>
                <!-- social links  -->
                <div class="flex rounded-[10px] bg-[#FFFAF0] w-fit px-4 py-2.5 mt-10 gap-[30px]">
                  <!-- Tweeter  -->
                  <a href="https://x.com" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="twitter">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.52217 6.7837L15.4785 0.00878906H14.0671L8.89516 5.89135L4.76437 0.00878906H0L6.24656 8.90426L0 16.0088H1.41155L6.87321 9.79661L11.2356 16.0088H16L9.52183 6.7837H9.52217ZM7.58887 8.98263L6.95596 8.09684L1.92015 1.04853H4.0882L8.15216 6.73674L8.78507 7.62253L14.0677 15.0163H11.8997L7.58887 8.98297V8.98263Z" fill="currentColor"></path>
                    </svg>
                  </a>
                  <!-- facebook  -->
                  <a href="https://www.facebook.com" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="facebook">
                    <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.71875 9.00879H6.375V16.0088H3.25V9.00879H0.6875V6.13379H3.25V3.91504C3.25 1.41504 4.75 0.00878906 7.03125 0.00878906C8.125 0.00878906 9.28125 0.227539 9.28125 0.227539V2.69629H8C6.75 2.69629 6.375 3.44629 6.375 4.25879V6.13379H9.15625L8.71875 9.00879Z" fill="currentColor"></path>
                    </svg>
                  </a>
                  <!-- instagram  -->
                  <a href="https://www.instagram.com" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="instagram">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 3.41504C9.96875 3.41504 11.5938 5.04004 11.5938
                    7.00879C11.5938 9.00879 9.96875 10.6025 8 10.6025C6 10.6025
                    4.40625 9.00879 4.40625 7.00879C4.40625 5.04004 6 3.41504 8
                    3.41504ZM8 9.35254C9.28125 9.35254 10.3125 8.32129 10.3125
                    7.00879C10.3125 5.72754 9.28125 4.69629 8 4.69629C6.6875
                    4.69629 5.65625 5.72754 5.65625 7.00879C5.65625 8.32129
                    6.71875 9.35254 8 9.35254ZM12.5625 3.29004C12.5625 2.82129
                    12.1875 2.44629 11.7188 2.44629C11.25 2.44629 10.875 2.82129
                    10.875 3.29004C10.875 3.75879 11.25 4.13379 11.7188
                    4.13379C12.1875 4.13379 12.5625 3.75879 12.5625
                    3.29004ZM14.9375 4.13379C15 5.29004 15 8.75879 14.9375
                    9.91504C14.875 11.04 14.625 12.0088 13.8125 12.8525C13
                    13.665 12 13.915 10.875 13.9775C9.71875 14.04 6.25 14.04
                    5.09375 13.9775C3.96875 13.915 3 13.665 2.15625
                    12.8525C1.34375 12.0088 1.09375 11.04 1.03125
                    9.91504C0.96875 8.75879 0.96875 5.29004 1.03125
                    4.13379C1.09375 3.00879 1.34375 2.00879 2.15625 1.19629C3
                    0.383789 3.96875 0.133789 5.09375 0.0712891C6.25 0.00878906
                    9.71875 0.00878906 10.875 0.0712891C12 0.133789 13 0.383789
                    13.8125 1.19629C14.625 2.00879 14.875 3.00879 14.9375
                    4.13379ZM13.4375 11.1338C13.8125 10.2275 13.7188 8.04004
                    13.7188 7.00879C13.7188 6.00879 13.8125 3.82129 13.4375
                    2.88379C13.1875 2.29004 12.7188 1.79004 12.125
                    1.57129C11.1875 1.19629 9 1.29004 8 1.29004C6.96875 1.29004
                    4.78125 1.19629 3.875 1.57129C3.25 1.82129 2.78125 2.29004
                    2.53125 2.88379C2.15625 3.82129 2.25 6.00879 2.25
                    7.00879C2.25 8.04004 2.15625 10.2275 2.53125 11.1338C2.78125
                    11.7588 3.25 12.2275 3.875 12.4775C4.78125 12.8525 6.96875
                    12.7588 8 12.7588C9 12.7588 11.1875 12.8525 12.125
                    12.4775C12.7188 12.2275 13.2188 11.7588 13.4375 11.1338Z" fill="currentColor"></path>
                    </svg>
                  </a>
                  <!-- linkdin  -->
                  <a href="https://bd.linkedin.com" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="linkdin">
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.125
                    15.0088H0.21875V5.66504H3.125V15.0088ZM1.65625 4.41504C0.75
                    4.41504 0 3.63379 0 2.69629C0 1.41504 1.375 0.602539 2.5
                    1.25879C3.03125 1.54004 3.34375 2.10254 3.34375
                    2.69629C3.34375 3.63379 2.59375 4.41504 1.65625
                    4.41504ZM13.9688 15.0088H11.0938V10.4775C11.0938 9.38379
                    11.0625 8.00879 9.5625 8.00879C8.0625 8.00879 7.84375
                    9.16504 7.84375
                    10.3838V15.0088H4.9375V5.66504H7.71875V6.94629H7.75C8.15625
                    6.22754 9.09375 5.44629 10.5 5.44629C13.4375 5.44629 14
                    7.38379 14 9.88379V15.0088H13.9688Z" fill="currentColor"></path>
                    </svg>
                  </a>
                </div>
              </div>
              <img src="images/team/3.png" alt="" class="h-full">
            </div>
            <!-- team card  -->
            <div data-aos="fade-left" class="col-span-6 rounded-[20px] bg-white shadow-primary flex flex-col sm:flex-row justify-between gap-6 aos-init">
              <div class="flex-1 py-10 pl-10">
                <h1 class="text-[32px] leading-[45px] font-[900] text-heading">
                  Javed Mukta
                </h1>
                <div class="mt-5">
                  <p class="text-lg text-paragraph">Mentor</p>
                  <div data-scroll-fm="scroll" data-anim-type="count-width" class="w-full h-1.5 rounded-[10px] bg-[#F5F5F5] mt-1.5 relative overflow-hidden before:block before:w-[80%] before:h-full before:bg-sb-orange before:rounded-[10px] width-increase"></div>
                </div>
                <div class="mt-5">
                  <p class="text-lg text-paragraph">Designer</p>
                  <div data-scroll-fm="scroll" data-anim-type="count-width" class="w-full h-1.5 rounded-[10px] bg-[#F5F5F5] mt-1.5 relative overflow-hidden before:block before:w-[80%] before:h-full before:bg-sb-orange before:rounded-[10px] width-increase"></div>
                </div>
                <!-- social links  -->
                <div class="flex rounded-[10px] bg-[#FFFAF0] w-fit px-4 py-2.5 mt-10 gap-[30px]">
                  <!-- Tweeter  -->
                  <a href="https://x.com" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="twitter">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.52217 6.7837L15.4785 0.00878906H14.0671L8.89516 5.89135L4.76437 0.00878906H0L6.24656 8.90426L0 16.0088H1.41155L6.87321 9.79661L11.2356 16.0088H16L9.52183 6.7837H9.52217ZM7.58887 8.98263L6.95596 8.09684L1.92015 1.04853H4.0882L8.15216 6.73674L8.78507 7.62253L14.0677 15.0163H11.8997L7.58887 8.98297V8.98263Z" fill="currentColor"></path>
                    </svg>
                  </a>
                  <!-- facebook  -->
                  <a href="https://www.facebook.com" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="facebook">
                    <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.71875 9.00879H6.375V16.0088H3.25V9.00879H0.6875V6.13379H3.25V3.91504C3.25 1.41504 4.75 0.00878906 7.03125 0.00878906C8.125 0.00878906 9.28125 0.227539 9.28125 0.227539V2.69629H8C6.75 2.69629 6.375 3.44629 6.375 4.25879V6.13379H9.15625L8.71875 9.00879Z" fill="currentColor"></path>
                    </svg>
                  </a>
                  <!-- instagram  -->
                  <a href="https://www.instagram.com" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="instagram">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 3.41504C9.96875 3.41504 11.5938 5.04004 11.5938
                    7.00879C11.5938 9.00879 9.96875 10.6025 8 10.6025C6 10.6025
                    4.40625 9.00879 4.40625 7.00879C4.40625 5.04004 6 3.41504 8
                    3.41504ZM8 9.35254C9.28125 9.35254 10.3125 8.32129 10.3125
                    7.00879C10.3125 5.72754 9.28125 4.69629 8 4.69629C6.6875
                    4.69629 5.65625 5.72754 5.65625 7.00879C5.65625 8.32129
                    6.71875 9.35254 8 9.35254ZM12.5625 3.29004C12.5625 2.82129
                    12.1875 2.44629 11.7188 2.44629C11.25 2.44629 10.875 2.82129
                    10.875 3.29004C10.875 3.75879 11.25 4.13379 11.7188
                    4.13379C12.1875 4.13379 12.5625 3.75879 12.5625
                    3.29004ZM14.9375 4.13379C15 5.29004 15 8.75879 14.9375
                    9.91504C14.875 11.04 14.625 12.0088 13.8125 12.8525C13
                    13.665 12 13.915 10.875 13.9775C9.71875 14.04 6.25 14.04
                    5.09375 13.9775C3.96875 13.915 3 13.665 2.15625
                    12.8525C1.34375 12.0088 1.09375 11.04 1.03125
                    9.91504C0.96875 8.75879 0.96875 5.29004 1.03125
                    4.13379C1.09375 3.00879 1.34375 2.00879 2.15625 1.19629C3
                    0.383789 3.96875 0.133789 5.09375 0.0712891C6.25 0.00878906
                    9.71875 0.00878906 10.875 0.0712891C12 0.133789 13 0.383789
                    13.8125 1.19629C14.625 2.00879 14.875 3.00879 14.9375
                    4.13379ZM13.4375 11.1338C13.8125 10.2275 13.7188 8.04004
                    13.7188 7.00879C13.7188 6.00879 13.8125 3.82129 13.4375
                    2.88379C13.1875 2.29004 12.7188 1.79004 12.125
                    1.57129C11.1875 1.19629 9 1.29004 8 1.29004C6.96875 1.29004
                    4.78125 1.19629 3.875 1.57129C3.25 1.82129 2.78125 2.29004
                    2.53125 2.88379C2.15625 3.82129 2.25 6.00879 2.25
                    7.00879C2.25 8.04004 2.15625 10.2275 2.53125 11.1338C2.78125
                    11.7588 3.25 12.2275 3.875 12.4775C4.78125 12.8525 6.96875
                    12.7588 8 12.7588C9 12.7588 11.1875 12.8525 12.125
                    12.4775C12.7188 12.2275 13.2188 11.7588 13.4375 11.1338Z" fill="currentColor"></path>
                    </svg>
                  </a>
                  <!-- linkdin  -->
                  <a href="https://bd.linkedin.com" target="blank" class="text-heading transition-all duration-300 hover:text-sb-orange" aria-label="linkdin">
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.125
                    15.0088H0.21875V5.66504H3.125V15.0088ZM1.65625 4.41504C0.75
                    4.41504 0 3.63379 0 2.69629C0 1.41504 1.375 0.602539 2.5
                    1.25879C3.03125 1.54004 3.34375 2.10254 3.34375
                    2.69629C3.34375 3.63379 2.59375 4.41504 1.65625
                    4.41504ZM13.9688 15.0088H11.0938V10.4775C11.0938 9.38379
                    11.0625 8.00879 9.5625 8.00879C8.0625 8.00879 7.84375
                    9.16504 7.84375
                    10.3838V15.0088H4.9375V5.66504H7.71875V6.94629H7.75C8.15625
                    6.22754 9.09375 5.44629 10.5 5.44629C13.4375 5.44629 14
                    7.38379 14 9.88379V15.0088H13.9688Z" fill="currentColor"></path>
                    </svg>
                  </a>
                </div>
              </div>
              <img src="images/team/4.png" alt="" class="h-full">
            </div> --}}
          </div>
        </div>
      </section>


      <!--bolg-->
      <section class="mt-[60px] lg:mt-[120px] pt-[50px] lg:pt-[110px] pb-[60px] lg:pb-[120px] bg-no-repeat bg-cover px-4 xl:px-0" style="background: url('images/blog-bg.svg')">
        <div class="container">
          <div class="grid grid-cols-12 gap-x-[30px]">
            <h1 class="text-xl text-sb-orange font-bold text-center col-span-12">
              Our Blogs
            </h1>
            <h2 class="text-heading font-[900] text-3xl lg:text-[40px] leading-[45px] mt-[18px] mb-[60px] text-center col-span-12">
              Boost Your Business with <br>
              Digital most Marketing
            </h2>
            <div class="col-span-12 grid grid-cols-12 gap-[30px]">
              <!-- blog card  -->
              @foreach ($blogs as $blog)
              <div data-aos="fade-up" class="col-span-12 sm:col-span-6 lg:col-span-4 bg-white rounded-[20px] overflow-hidden hover:shadow-primary transition-all duration-300 aos-init">
                <img src="storage/{{$blog->featured_image}}" alt="" class="w-full">
                <div class="px-10 pb-10">
                  <div class="flex gap-10 h-fit items-center mt-5">
                    <p class="flex h-fit items-center text-paragraph text-lg gap-2.5">
                      <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5625 2H6.9375V1.0625C6.9375 0.757812 7.17188 0.5 7.5 0.5C7.80469 0.5 8.0625 0.757812 8.0625 1.0625V2H9C9.82031 2 10.5 2.67969 10.5 3.5V11C10.5 11.8438 9.82031 12.5 9 12.5H1.5C0.65625 12.5 0 11.8438 0 11V3.5C0 2.67969 0.65625 2 1.5 2H2.4375V1.0625C2.4375 0.757812 2.67188 0.5 3 0.5C3.30469 0.5 3.5625 0.757812 3.5625 1.0625V2ZM1.125 6.3125H3V5H1.125V6.3125ZM1.125 7.4375V8.9375H3V7.4375H1.125ZM4.125 7.4375V8.9375H6.375V7.4375H4.125ZM7.5 7.4375V8.9375H9.375V7.4375H7.5ZM9.375 5H7.5V6.3125H9.375V5ZM9.375 10.0625H7.5V11.375H9C9.1875 11.375 9.375 11.2109 9.375 11V10.0625ZM6.375 10.0625H4.125V11.375H6.375V10.0625ZM3 10.0625H1.125V11C1.125 11.2109 1.28906 11.375 1.5 11.375H3V10.0625ZM6.375 5H4.125V6.3125H6.375V5Z" fill="#EC4814"></path>
                      </svg>
                      {{-- {{$blog->created_at}} --}}
                      {{ date('Y-m-d', strtotime($blog->created_at))}}
                    </p>
                    <p class="flex h-fit items-center text-paragraph text-lg gap-2.5">
                      <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.375 7.625C8.64844 7.625 10.5 9.47656 10.5 11.75C10.5 12.1719 10.1484 12.5 9.75 12.5H0.75C0.328125 12.5 0 12.1719 0 11.75C0 9.47656 1.82812 7.625 4.125 7.625H6.375ZM1.125 11.375H9.35156C9.16406 9.89844 7.89844 8.75 6.375 8.75H4.125C2.57812 8.75 1.3125 9.89844 1.125 11.375ZM5.25 6.5C3.58594 6.5 2.25 5.16406 2.25 3.5C2.25 1.85938 3.58594 0.5 5.25 0.5C6.89062 0.5 8.25 1.85938 8.25 3.5C8.25 5.16406 6.89062 6.5 5.25 6.5ZM5.25 1.625C4.19531 1.625 3.375 2.46875 3.375 3.5C3.375 4.55469 4.19531 5.375 5.25 5.375C6.28125 5.375 7.125 4.55469 7.125 3.5C7.125 2.46875 6.28125 1.625 5.25 1.625Z" fill="#EC4814"></path>
                      </svg>
  
                      Mesbah
                    </p>
                  </div>
                  <h1 class="text-heading text-2xl font-bold mt-2.5 pb-6">
                    {{$blog->title}}
                  </h1>
                  <a href="{{ route('blogs.single', ['slug' => $blog->slug]) }}" class="flex h-fit items-center gap-2.5 text-base font-bold text-sb-orange relative before:block before:w-full before:h-full before:border-b before:border-sb-orange before:absolute w-fit before:ease-out before:origin-right hover:before:origin-left before:transition-transform before:duration-300 before:scale-x-0 hover:before:scale-x-100 group">
                    Read More
                    <svg class="group-hover:scale-x-125 origin-left transition-transform duration-300" width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.6875 7.71875L8.6875 12.7188C8.5 12.9062 8.25 13 8 13C7.71875 13 7.46875 12.9062 7.28125 12.7188C6.875 12.3438 6.875 11.6875 7.28125 11.3125L10.5625 8H1C0.4375 8 0 7.5625 0 7C0 6.46875 0.4375 6 1 6H10.5625L7.28125 2.71875C6.875 2.34375 6.875 1.6875 7.28125 1.3125C7.65625 0.90625 8.3125 0.90625 8.6875 1.3125L13.6875 6.3125C14.0938 6.6875 14.0938 7.34375 13.6875 7.71875Z" fill="currentColor"></path>
                    </svg>
                  </a>
                </div>
              </div>
              @endforeach
           
              {{-- <!-- blog card  -->
              <div data-aos="fade-up" data-aos-delay="100" class="col-span-12 sm:col-span-6 lg:col-span-4 bg-white rounded-[20px] overflow-hidden hover:shadow-primary transition-all duration-300 aos-init">
                <img src="images/2.png" alt="" class="w-full">
                <div class="px-10 pb-10">
                  <div class="flex gap-10 h-fit items-center mt-5">
                    <p class="flex h-fit items-center text-paragraph text-lg gap-2.5">
                      <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5625 2H6.9375V1.0625C6.9375 0.757812 7.17188 0.5 7.5 0.5C7.80469 0.5 8.0625 0.757812 8.0625 1.0625V2H9C9.82031 2 10.5 2.67969 10.5 3.5V11C10.5 11.8438 9.82031 12.5 9 12.5H1.5C0.65625 12.5 0 11.8438 0 11V3.5C0 2.67969 0.65625 2 1.5 2H2.4375V1.0625C2.4375 0.757812 2.67188 0.5 3 0.5C3.30469 0.5 3.5625 0.757812 3.5625 1.0625V2ZM1.125 6.3125H3V5H1.125V6.3125ZM1.125 7.4375V8.9375H3V7.4375H1.125ZM4.125 7.4375V8.9375H6.375V7.4375H4.125ZM7.5 7.4375V8.9375H9.375V7.4375H7.5ZM9.375 5H7.5V6.3125H9.375V5ZM9.375 10.0625H7.5V11.375H9C9.1875 11.375 9.375 11.2109 9.375 11V10.0625ZM6.375 10.0625H4.125V11.375H6.375V10.0625ZM3 10.0625H1.125V11C1.125 11.2109 1.28906 11.375 1.5 11.375H3V10.0625ZM6.375 5H4.125V6.3125H6.375V5Z" fill="#EC4814"></path>
                      </svg>
                      October 19, 2022
                    </p>
                    <p class="flex h-fit items-center text-paragraph text-lg gap-2.5">
                      <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.375 7.625C8.64844 7.625 10.5 9.47656 10.5 11.75C10.5 12.1719 10.1484 12.5 9.75 12.5H0.75C0.328125 12.5 0 12.1719 0 11.75C0 9.47656 1.82812 7.625 4.125 7.625H6.375ZM1.125 11.375H9.35156C9.16406 9.89844 7.89844 8.75 6.375 8.75H4.125C2.57812 8.75 1.3125 9.89844 1.125 11.375ZM5.25 6.5C3.58594 6.5 2.25 5.16406 2.25 3.5C2.25 1.85938 3.58594 0.5 5.25 0.5C6.89062 0.5 8.25 1.85938 8.25 3.5C8.25 5.16406 6.89062 6.5 5.25 6.5ZM5.25 1.625C4.19531 1.625 3.375 2.46875 3.375 3.5C3.375 4.55469 4.19531 5.375 5.25 5.375C6.28125 5.375 7.125 4.55469 7.125 3.5C7.125 2.46875 6.28125 1.625 5.25 1.625Z" fill="#EC4814"></path>
                      </svg>
  
                      Mesbah
                    </p>
                  </div>
                  <h1 class="text-heading text-2xl font-bold mt-2.5 pb-6">
                    Inspire meets brands with digital technology
                  </h1>
                  <a href="blog-details.html" class="flex h-fit items-center gap-2.5 text-base font-bold text-sb-orange relative before:block before:w-full before:h-full before:border-b before:border-sb-orange before:absolute w-fit before:ease-out before:origin-right hover:before:origin-left before:transition-transform before:duration-300 before:scale-x-0 hover:before:scale-x-100 group">
                    Read More
                    <svg class="group-hover:scale-x-125 origin-left transition-transform duration-300" width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.6875 7.71875L8.6875 12.7188C8.5 12.9062 8.25 13 8 13C7.71875 13 7.46875 12.9062 7.28125 12.7188C6.875 12.3438 6.875 11.6875 7.28125 11.3125L10.5625 8H1C0.4375 8 0 7.5625 0 7C0 6.46875 0.4375 6 1 6H10.5625L7.28125 2.71875C6.875 2.34375 6.875 1.6875 7.28125 1.3125C7.65625 0.90625 8.3125 0.90625 8.6875 1.3125L13.6875 6.3125C14.0938 6.6875 14.0938 7.34375 13.6875 7.71875Z" fill="currentColor"></path>
                    </svg>
                  </a>
                </div>
              </div>
              <!-- blog card  -->
              <div data-aos="fade-up" data-aos-delay="200" class="col-span-12 sm:col-span-6 lg:col-span-4 bg-white rounded-[20px] overflow-hidden hover:shadow-primary transition-all duration-300 aos-init">
                <img src="images/3.png" alt="" class="w-full">
                <div class="px-10 pb-10">
                  <div class="flex gap-10 h-fit items-center mt-5">
                    <p class="flex h-fit items-center text-paragraph text-lg gap-2.5">
                      <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5625 2H6.9375V1.0625C6.9375 0.757812 7.17188 0.5 7.5 0.5C7.80469 0.5 8.0625 0.757812 8.0625 1.0625V2H9C9.82031 2 10.5 2.67969 10.5 3.5V11C10.5 11.8438 9.82031 12.5 9 12.5H1.5C0.65625 12.5 0 11.8438 0 11V3.5C0 2.67969 0.65625 2 1.5 2H2.4375V1.0625C2.4375 0.757812 2.67188 0.5 3 0.5C3.30469 0.5 3.5625 0.757812 3.5625 1.0625V2ZM1.125 6.3125H3V5H1.125V6.3125ZM1.125 7.4375V8.9375H3V7.4375H1.125ZM4.125 7.4375V8.9375H6.375V7.4375H4.125ZM7.5 7.4375V8.9375H9.375V7.4375H7.5ZM9.375 5H7.5V6.3125H9.375V5ZM9.375 10.0625H7.5V11.375H9C9.1875 11.375 9.375 11.2109 9.375 11V10.0625ZM6.375 10.0625H4.125V11.375H6.375V10.0625ZM3 10.0625H1.125V11C1.125 11.2109 1.28906 11.375 1.5 11.375H3V10.0625ZM6.375 5H4.125V6.3125H6.375V5Z" fill="#EC4814"></path>
                      </svg>
                      October 19, 2022
                    </p>
                    <p class="flex h-fit items-center text-paragraph text-lg gap-2.5">
                      <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.375 7.625C8.64844 7.625 10.5 9.47656 10.5 11.75C10.5 12.1719 10.1484 12.5 9.75 12.5H0.75C0.328125 12.5 0 12.1719 0 11.75C0 9.47656 1.82812 7.625 4.125 7.625H6.375ZM1.125 11.375H9.35156C9.16406 9.89844 7.89844 8.75 6.375 8.75H4.125C2.57812 8.75 1.3125 9.89844 1.125 11.375ZM5.25 6.5C3.58594 6.5 2.25 5.16406 2.25 3.5C2.25 1.85938 3.58594 0.5 5.25 0.5C6.89062 0.5 8.25 1.85938 8.25 3.5C8.25 5.16406 6.89062 6.5 5.25 6.5ZM5.25 1.625C4.19531 1.625 3.375 2.46875 3.375 3.5C3.375 4.55469 4.19531 5.375 5.25 5.375C6.28125 5.375 7.125 4.55469 7.125 3.5C7.125 2.46875 6.28125 1.625 5.25 1.625Z" fill="#EC4814"></path>
                      </svg>
  
                      Mesbah
                    </p>
                  </div>
                  <h1 class="text-heading text-2xl font-bold mt-2.5 pb-6">
                    Inspire meets brands with digital technology
                  </h1>
                  <a href="blog-details.html" class="flex h-fit items-center gap-2.5 text-base font-bold text-sb-orange relative before:block before:w-full before:h-full before:border-b before:border-sb-orange before:absolute w-fit before:ease-out before:origin-right hover:before:origin-left before:transition-transform before:duration-300 before:scale-x-0 hover:before:scale-x-100 group">
                    Read More
                    <svg class="group-hover:scale-x-125 origin-left transition-transform duration-300" width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.6875 7.71875L8.6875 12.7188C8.5 12.9062 8.25 13 8 13C7.71875 13 7.46875 12.9062 7.28125 12.7188C6.875 12.3438 6.875 11.6875 7.28125 11.3125L10.5625 8H1C0.4375 8 0 7.5625 0 7C0 6.46875 0.4375 6 1 6H10.5625L7.28125 2.71875C6.875 2.34375 6.875 1.6875 7.28125 1.3125C7.65625 0.90625 8.3125 0.90625 8.6875 1.3125L13.6875 6.3125C14.0938 6.6875 14.0938 7.34375 13.6875 7.71875Z" fill="currentColor"></path>
                    </svg>
                  </a>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </section>
      <!--Faq-->
      <section class="mt-[60px] lg:mt-[120px] px-4 xl:px-0">
        <div class="container grid grid-cols-6 lg:grid-cols-12 gap-[30px]">
          <!-- left side  -->
          <div data-aos="fade-down" class="col-span-6 aos-init">
            <h1 class="text-xl text-sb-orange font-bold">FAQ</h1>
            <h2 class="text-heading font-[900] text-3xl lg:text-[40px] leading-[45px] mt-[18px]">
              Navigate the Digital World <br>
              with Confidence
            </h2>
            <p class="text-paragraph text-lg mt-2.5 max-w-[520px]">
              Aliquam eros justo, posuere loborti laorematullamcorper the posuer
              viverra .Aliquam eroo, posuere loborti
            </p>
            <div class="flex justify-center items-center h-fit gap-10 p-[30px] bg-[#FFFAF0] w-fit rounded-[20px] mt-[30px]">
              <h1 class="text-heading text-[55px] leading-[61px] font-extrabold w-[85px]" data-scroll-fm="scroll" data-anim-type="count-up" data-count-fm="10" data-type-fm="+" data-speed-fm="1000">10+</h1>
              <p class="text-paragraph text-lg">
                years of <br>
                experiences
              </p>
            </div>
          </div>
          <!-- right side  -->
          <div data-aos="fade-up" class="col-span-6 faq-wrapper aos-init">
            <!-- single card -->
            <div class="bg-white mb-5 faq-toggler overflow-hidden transition-all duration-300 active-faq">
              <h1 class="flex h-fit items-center gap-5 p-5 border-2 border-heading rounded-[10px] bg-[#FFFAF0] pointer-events-none">
                <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center text-white bg-sb-orange text-2xl">
                  <span class="plus">+</span>
                  <span class="scale-x-125 minuse hidden">-</span>
                </span>
                <span class="text-lg font-bold flex-1">What is physical therapy?</span>
              </h1>
              <!-- Description  -->
              <p class="shadow-primary p-5 rounded-b-md bg-white text-paragraph text-lg pointer-events-none">
                It is a long established fact that a reader will be distr acted
                bioiiy the rea dablea content of a page when looking at its layout
                Thoiie point of using.It is a long this established fact that a
                reader
              </p>
            </div>
            <!-- single card -->
            <div class="bg-white mb-5 faq-toggler overflow-hidden transition-all duration-300" style="height: 80px;">
              <h1 class="flex h-fit items-center gap-5 p-5 border-2 border-heading rounded-[10px] bg-[#FFFAF0] pointer-events-none">
                <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center text-white bg-sb-orange text-2xl">
                  <span class="plus">+</span>
                  <span class="scale-x-125 minuse hidden">-</span>
                </span>
                <span class="text-lg font-bold flex-1">What conditions can physical therapy treat?</span>
              </h1>
              <!-- Description  -->
              <p class="shadow-primary p-5 rounded-b-md bg-white text-paragraph text-lg pointer-events-none">
                It is a long established fact that a reader will be distr acted
                bioiiy the rea dablea content of a page when looking at its layout
                Thoiie point of using.It is a long this established fact that a
                reader
              </p>
            </div>
            <!-- single card -->
            <div class="bg-white mb-5 faq-toggler overflow-hidden transition-all duration-300" style="height: 80px;">
              <h1 class="flex h-fit items-center gap-5 p-5 border-2 border-heading rounded-[10px] bg-[#FFFAF0] pointer-events-none">
                <span class="w-[30px] h-[30px] rounded-full flex justify-center items-center text-white bg-sb-orange text-2xl">
                  <span class="plus">+</span>
                  <span class="scale-x-125 minuse hidden">-</span>
                </span>
                <span class="text-lg font-bold flex-1">
                  Is physical therapy painful?
                </span>
              </h1>
              <!-- Description  -->
              <p class="shadow-primary p-5 rounded-b-md bg-white text-paragraph text-lg pointer-events-none">
                It is a long established fact that a reader will be distr acted
                bioiiy the rea dablea content of a page when looking at its layout
                Thoiie point of using.It is a long this established fact that a
                reader
              </p>
            </div>
          </div>
        </div>
      </section>
      @include('partials.footer')
    @push('scripts')
        <!-- Initialize AOS library -->
        <script>
          var swiper = new Swiper(".bannerSlider", {
            slidesPerView: "auto",
            spaceBetween: 30,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
          });
        </script>
    @endpush
</x-layout>
