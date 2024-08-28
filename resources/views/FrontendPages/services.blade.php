<x-layout>
    @slot('title', 'AR Technology')
    @include('partials.navigation')
    
    <section class="relative h-fit max-w-[100vw] flex justify-center items-center">
        <img src="/images/about/bread-crumb.png" alt="" class="w-full min-h-[140px]">
        <div class="w-full h-full absolute top-0 left-0 bg-heading/70"></div>
        <div class="container absolute py-5 px-4 xl:px-0">
          <h1 class="text-white text-[55px] font-extrabold">Services</h1>
          <div class="flex items-center gap-7">
                <a href="/" class="text-lg font-bold text-white transition-all duration-300 hover:text-sb-orange">Home</a>
                <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 13C1.71875 13 1.46875 12.9062 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.5 12.9062 2.25 13 2 13Z" fill="#EC4814"></path>
                </svg>
                <a href="#" class="text-lg font-bold text-white transition-all duration-300 hover:text-sb-orange">
                Services
                </a>
            </div>
        </div>
    </section>
    <section class="px-4 xl:px-0 py-[60px] lg:py-[120px] max-w-screen overflow-hidden">
      <div class="container">
        <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-[30px]">
          <!-- card  -->
          @foreach ($service as $item)
          <a href="{{route('servicedetail',$item->slug)}}" data-aos="fade-right" class="col-span-4 shadow-primary bg-white group p-[30px] rounded-[20px] aos-init">
            <div class="flex w-full justify-between">
              <div class="flex w-20 h-20 bg-[#FFFAF0] border-2 border-heading justify-center items-center text-heading group-hover:border-sb-orange group-hover:bg-sb-orange group-hover:text-sb-orange rounded-[20px] transition-all duration-300">
                <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_1_14077)">
                    <path d="M33.6328 44.9981H11.3672C10.0107 44.9981 8.90625 43.8936 8.90625 42.5372V37.9375C8.90625 37.5479 9.21969 37.2344 9.6094 37.2344C9.99911 37.2344 10.3125 37.5478 10.3125 37.9375V42.5372C10.3125 43.1201 10.7842 43.5919 11.3673 43.5919H33.6328C34.2158 43.5919 34.6875 43.1202 34.6875 42.5372V37.9375C34.6875 37.5479 35.001 37.2344 35.3907 37.2344C35.7804 37.2344 36.0938 37.5478 36.0938 37.9375V42.5372C36.0937 43.8936 34.9893 44.9981 33.6328 44.9981Z" fill="currentColor"></path>
                    <path d="M35.3907 6.44145H9.6094C9.21978 6.44145 8.90625 6.12802 8.90625 5.7383C8.90625 5.34868 9.21969 5.03516 9.6094 5.03516H35.3907C35.7803 5.03516 36.0938 5.34859 36.0938 5.7383C36.0937 6.12793 35.7803 6.44145 35.3907 6.44145Z" fill="currentColor"></path>
                    <path d="M35.3907 38.6426H9.6094C9.21978 38.6426 8.90625 38.3291 8.90625 37.9394V2.46093C8.90625 1.10448 10.0107 0 11.3672 0H33.6328C34.9893 0 36.0937 1.10448 36.0937 2.46093V37.9395C36.0937 38.3291 35.7803 38.6426 35.3907 38.6426ZM10.3125 37.2364H34.6875V2.46093C34.6875 1.87796 34.2159 1.40621 33.6328 1.40621H11.3672C10.7842 1.40621 10.3125 1.87787 10.3125 2.46093L10.3125 37.2364Z" fill="currentColor"></path>
                    <path d="M25.2618 41.8204H19.7364C19.3467 41.8204 19.0332 41.5069 19.0332 41.1172C19.0332 40.7275 19.3466 40.4141 19.7364 40.4141H25.2588C25.6485 40.4141 25.962 40.7275 25.962 41.1172C25.962 41.5069 25.6485 41.8204 25.2618 41.8204Z" fill="currentColor"></path>
                    <path d="M21.8766 26.9508C21.7974 26.9508 21.7154 26.9479 21.6334 26.942C20.523 26.8658 19.5211 26.2829 18.8121 25.2985C18.1324 24.3552 17.8072 23.1481 17.8922 21.8971C17.9771 20.6491 18.4634 19.4948 19.2633 18.651C20.0982 17.7692 21.1676 17.3268 22.2808 17.403C23.3911 17.4791 24.3931 18.0621 25.1021 19.0465C25.7817 19.9898 26.107 21.1969 26.022 22.4478C25.937 23.6959 25.4508 24.8501 24.6509 25.694C23.8775 26.5113 22.9019 26.9508 21.8766 26.9508ZM19.2955 21.9937C19.1695 23.8511 20.2623 25.442 21.73 25.5416C21.777 25.5445 21.8267 25.5474 21.8736 25.5474C23.2798 25.5474 24.4986 24.15 24.6187 22.357C24.6803 21.4342 24.4459 20.5494 23.9596 19.8727C23.4996 19.234 22.8697 18.859 22.1871 18.8121C20.7164 18.7096 19.4215 20.1393 19.2955 21.9937Z" fill="currentColor"></path>
                    <path d="M22.5244 30.4653C21.0976 30.4653 19.6298 30.1782 18.2383 29.4224C15.8857 28.145 14.2334 25.6783 13.9258 22.9858C13.7764 21.6822 13.9463 20.3199 14.4121 19.0425C14.875 17.774 15.622 16.6196 16.5713 15.7085C18.1065 14.229 20.21 13.3238 22.3399 13.2242C24.4697 13.1246 26.6465 13.8277 28.3165 15.1548C28.4952 15.2984 28.671 15.4507 28.8351 15.606C30.2911 16.9888 31.129 18.896 31.1348 20.8384C31.1378 22.0748 30.7482 23.2349 30.42 23.9879C29.9483 25.0777 29.1602 25.9508 28.2637 26.3843C27.5459 26.7301 26.711 26.7798 26.0313 26.5191C25.4805 26.3082 25.0732 25.9097 24.8535 25.3736C24.6162 24.7906 24.5781 24.1724 24.5723 23.7008C24.5489 21.6705 25.0498 19.7779 25.5362 17.9469C25.6358 17.5719 26.0195 17.3492 26.3945 17.4489C26.7695 17.5486 26.9922 17.9323 26.8925 18.3073C26.4092 20.1266 25.9551 21.8434 25.9756 23.6832C25.9785 24.0524 26.0048 24.4801 26.1513 24.8405C26.2217 25.0133 26.3476 25.1334 26.5322 25.2067C26.8427 25.3268 27.2939 25.2916 27.6513 25.1188C28.2401 24.8346 28.7939 24.2047 29.1278 23.4312C29.4032 22.7984 29.7285 21.8375 29.7285 20.8444C29.7255 19.2858 29.0488 17.7506 27.8682 16.6286C27.7334 16.4997 27.5898 16.3766 27.4404 16.2565C26.0342 15.1374 24.2001 14.5456 22.4072 14.6276C20.6142 14.7126 18.8418 15.4743 17.5468 16.7194C15.9238 18.2809 15.0713 20.6218 15.3231 22.8249C15.578 25.069 16.955 27.1227 18.9091 28.1862C21.7949 29.7506 25.164 28.9186 27.4843 27.9459C27.8417 27.7965 28.2548 27.9635 28.4042 28.3209C28.5536 28.6783 28.3866 29.0914 28.0292 29.2408C26.5 29.8823 24.5517 30.4653 22.5244 30.4653Z" fill="currentColor"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_1_14077">
                      <rect width="45" height="45" fill="white"></rect>
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <!-- <h1 class="text-[55px] font-bold text-heading/10">01</h1> -->
            </div>

            <h1 class="text-2xl leading-10 font-bold mt-5 text-heading">
             {{$item->service_name}}
            </h1>
            <p class="text-lg mt-5 text-paragraph">
              {{$item->description}}
            </p>
          </a>  
          @endforeach
          
          
        </div>
      </div>
    </section>

    
        
        
       @include('partials.footer')
    
</x-layout>
