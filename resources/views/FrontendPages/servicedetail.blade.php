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
                Services Detail
                </a>
            </div>
        </div>
    </section>
    
    <section class="mt-[60px] lg:mt-[120px]">
        <div class="container px-4 xl:px-0">
          <img src="{{asset('storage/'.$service->feature_image)}}" alt="" data-aos="fade-in" class="rounded-[20px] overflow-hidden w-full aos-init aos-animate">
          <div class="grid grid-cols-8 lg:grid-cols-12 gap-[30px] mt-14">
            <div class="col-span-8 overflow-hidden">
              <h1 class="text-[40px] leading-[45px] font-[900] text-heading">
              {{$service->service_name}}
              </h1>
              <p class="text-lg text-paragraph mt-[30px]">
                {!!$service->content !!}
              </p>
              {{-- <div class="grid col-span-6 md:grid-cols-12 mt-[30px] gap-[30px]">
                <!-- card  -->
                <a href="service_details.html" data-aos="fade-right" class="col-span-6 shadow-primary bg-white group p-[30px] rounded-[20px] aos-init">
                  <div class="flex w-full justify-between">
                    <div class="flex w-20 h-20 border-2 justify-center items-center border-sb-orange bg-sb-orange text-white rounded-[20px] transition-all duration-300">
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
                    Digita Transformation <br>
                    Manag IT
                  </h1>
                  <p class="text-lg mt-5 text-paragraph">
                    IT Solution is a broad categ encompasses various technologicIT
                    Solution is a broad categ encompasses various technological
                    solutionsIT Solution is a broad
                  </p>
                </a>
                <!-- card  -->
                <a href="service_details.html" data-aos="fade-up" class="col-span-6 shadow-primary bg-white group p-[30px] rounded-[20px] aos-init">
                  <div class="flex w-full justify-between">
                    <div class="flex w-20 h-20 border-2 justify-center items-center border-sb-orange bg-sb-orange text-white rounded-[20px] transition-all duration-300">
                      <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40.3409 7.91894H33.8281C33.4385 7.91894 33.125 7.6055 33.125 7.21579V0.703149C33.125 0.313525 33.4384 0 33.8281 0C34.2179 0 34.5313 0.313437 34.5313 0.703149V6.51273H40.3409C40.7305 6.51273 41.044 6.82616 41.044 7.21588C41.0439 7.6055 40.7276 7.91894 40.3409 7.91894Z" fill="currentColor"></path>
                        <path d="M40.34 40.1836H9.89455C9.50493 40.1836 9.19141 39.8702 9.19141 39.4804V0.703149C9.19141 0.313525 9.50484 0 9.89455 0H33.8242C34.0117 0 34.1904 0.0732594 34.3222 0.205055L40.8262 6.709C40.958 6.83787 41.04 7.01659 41.04 7.21295V39.4805C41.043 39.8702 40.7267 40.1836 40.34 40.1836ZM10.5977 38.7774H39.6368V7.5059L33.5343 1.4063H10.5977V38.7774Z" fill="currentColor"></path>
                        <path d="M43.6105 45.0005H13.168C12.7784 45.0005 12.4648 44.687 12.4648 44.2973V39.4809C12.4648 39.0913 12.7783 38.7778 13.168 38.7778C13.5576 38.7778 13.8711 39.0912 13.8711 39.4809V43.5942H42.9073V12.3228L39.8428 9.25831C39.5675 8.98292 39.5675 8.5376 39.8428 8.26513C40.1182 7.98975 40.5636 7.98975 40.836 8.26513L44.0997 11.5259C44.2315 11.6548 44.3135 11.8335 44.3135 12.0298V44.2974C44.3135 44.687 44.0001 45.0005 43.6105 45.0005Z" fill="currentColor"></path>
                        <path d="M36.0254 15.9805H14.211C13.8213 15.9805 13.5078 15.6671 13.5078 15.2774C13.5078 14.8877 13.8213 14.5742 14.211 14.5742H36.0254C36.415 14.5742 36.7286 14.8877 36.7286 15.2774C36.7286 15.6671 36.415 15.9805 36.0254 15.9805Z" fill="currentColor"></path>
                        <path d="M36.0244 20.7969H21.9414C21.5518 20.7969 21.2383 20.4835 21.2383 20.0938C21.2383 19.7042 21.5517 19.3906 21.9414 19.3906H36.0244C36.4141 19.3906 36.7276 19.7041 36.7276 20.0938C36.7276 20.4835 36.4141 20.7969 36.0244 20.7969Z" fill="currentColor"></path>
                        <path d="M19.546 20.7969H14.211C13.8213 20.7969 13.5078 20.4835 13.5078 20.0938C13.5078 19.7042 13.8213 19.3906 14.211 19.3906H19.546C19.9356 19.3906 20.2491 19.7041 20.2491 20.0938C20.249 20.4835 19.9356 20.7969 19.546 20.7969Z" fill="currentColor"></path>
                        <path d="M20.0644 11.1641H14.211C13.8213 11.1641 13.5078 10.8507 13.5078 10.461C13.5078 10.0712 13.8213 9.75781 14.211 9.75781H20.0644C20.4541 9.75781 20.7676 10.0712 20.7676 10.461C20.7676 10.8507 20.4542 11.1641 20.0644 11.1641Z" fill="currentColor"></path>
                        <path d="M36.0254 11.1641H22.5664C22.1768 11.1641 21.8633 10.8507 21.8633 10.461C21.8633 10.0712 22.1767 9.75781 22.5664 9.75781H36.0254C36.415 9.75781 36.7286 10.0712 36.7286 10.461C36.7286 10.8507 36.415 11.1641 36.0254 11.1641Z" fill="currentColor"></path>
                        <path d="M29.1172 6.35161H14.211C13.8213 6.35161 13.5078 6.03817 13.5078 5.64846C13.5078 5.25875 13.8213 4.94531 14.211 4.94531H29.1172C29.5068 4.94531 29.8204 5.25875 29.8204 5.64846C29.8204 6.03817 29.5068 6.35161 29.1172 6.35161Z" fill="currentColor"></path>
                        <path d="M36.0254 25.6133H14.211C13.8213 25.6133 13.5078 25.2999 13.5078 24.9102C13.5078 24.5205 13.8213 24.207 14.211 24.207H36.0254C36.415 24.207 36.7286 24.5205 36.7286 24.9102C36.7286 25.2999 36.415 25.6133 36.0254 25.6133Z" fill="currentColor"></path>
                        <path d="M36.0244 30.4258H25.3106C24.9209 30.4258 24.6074 30.1124 24.6074 29.7227C24.6074 29.333 24.9209 29.0195 25.3106 29.0195H36.0244C36.4141 29.0195 36.7276 29.333 36.7276 29.7227C36.7276 30.1124 36.4141 30.4258 36.0244 30.4258Z" fill="currentColor"></path>
                        <path d="M23.0704 30.4258H14.211C13.8213 30.4258 13.5078 30.1124 13.5078 29.7227C13.5078 29.333 13.8213 29.0195 14.211 29.0195H23.0675C23.4571 29.0195 23.7706 29.333 23.7706 29.7227C23.7705 30.1124 23.4571 30.4258 23.0704 30.4258Z" fill="currentColor"></path>
                        <path d="M36.0254 35.2422H14.211C13.8213 35.2422 13.5078 34.9288 13.5078 34.5391C13.5078 34.1495 13.8213 33.8359 14.211 33.8359H36.0254C36.415 33.8359 36.7286 34.1494 36.7286 34.5391C36.7286 34.9288 36.415 35.2422 36.0254 35.2422Z" fill="currentColor"></path>
                        <path d="M4.78905 15.127H1.39065C1.00103 15.127 0.6875 14.8106 0.6875 14.4238V7.8438C0.6875 7.2022 0.936547 6.59866 1.39065 6.14455C1.84475 5.69045 2.4483 5.44141 3.08989 5.44141C3.73149 5.44141 4.33504 5.69045 4.78914 6.14455C5.24324 6.59866 5.49229 7.2022 5.49229 7.8438V14.4238C5.49229 14.6113 5.41903 14.7901 5.28723 14.9219C5.15526 15.0508 4.97655 15.127 4.78905 15.127ZM2.0938 13.7178H4.08599V7.84079C4.08599 7.57418 3.98346 7.32513 3.79304 7.13471C3.60555 6.94722 3.35358 6.84176 3.08697 6.84176C2.82036 6.84176 2.57131 6.94429 2.38382 7.13471C2.19632 7.3222 2.09087 7.57418 2.09087 7.84079L2.0938 13.7178Z" fill="currentColor"></path>
                        <path d="M4.78905 26.7676H1.39065C1.00103 26.7676 0.6875 26.4542 0.6875 26.0645V14.4219C0.6875 14.0323 1.00094 13.7188 1.39065 13.7188H4.78905C5.17868 13.7188 5.4922 14.0322 5.4922 14.4219V26.0615C5.4922 26.4512 5.17876 26.7676 4.78905 26.7676ZM2.0938 25.3613H4.08599V15.125H2.0938V25.3613Z" fill="currentColor"></path>
                        <path d="M4.78905 29.3321H1.39065C1.00103 29.3321 0.6875 29.0186 0.6875 28.6289V26.0625C0.6875 25.6729 1.00094 25.3594 1.39065 25.3594H4.78905C5.17868 25.3594 5.4922 25.6728 5.4922 26.0625V28.6289C5.4922 29.0157 5.17575 29.3321 4.78905 29.3321ZM2.09087 27.9258H4.08298V26.7656H2.09078C2.09078 26.7657 2.09078 27.9258 2.09087 27.9258Z" fill="currentColor"></path>
                        <path d="M3.08693 34.746C2.79983 34.746 2.54493 34.5731 2.43655 34.3095L0.901384 30.5507C0.825198 30.3632 0.833979 30.1552 0.921872 29.9736L1.73926 28.3183C1.85642 28.0781 2.10254 27.9258 2.36914 27.9258H3.81056C4.07717 27.9258 4.32329 28.0782 4.44045 28.3183L5.25784 29.9736C5.34573 30.1552 5.35451 30.3632 5.27832 30.5507L3.74023 34.3095C3.62892 34.5731 3.37119 34.746 3.08693 34.746ZM2.32232 30.3104L3.08693 32.1855L3.85447 30.3134L3.3711 29.3319H2.80569L2.32232 30.3104Z" fill="currentColor"></path>
                        <path d="M7.01078 16.837C6.62116 16.837 6.30763 16.5206 6.30763 16.1338V8.87992L4.8428 8.87114C4.45318 8.86821 4.14258 8.55176 4.14258 8.16507C4.1455 7.77837 4.45894 7.46484 4.84573 7.46484H4.84865L7.01371 7.47655C7.40041 7.47948 7.71393 7.79291 7.71393 8.1797L7.711 16.1338C7.71384 16.5206 7.40041 16.837 7.01078 16.837Z" fill="currentColor"></path>
                      </svg>
                    </div>
                    <!-- <h1 class="text-[55px] font-bold text-heading/10">02</h1> -->
                  </div>
  
                  <h1 class="text-2xl leading-10 font-bold mt-5 text-heading">
                    Cyber Shield Technologies IT Project Services
                  </h1>
                  <p class="text-lg mt-5 text-paragraph">
                    IT Solution is a broad categ encompasses various technologicIT
                    Solution is a broad categ encompasses various technological
                    solutionsIT Solution is a broad
                  </p>
                </a>
                <img data-aos="fade-up" src="./assets/img/blogs/service-details-img-1.png" alt="" class="col-span-6 rounded-[20px] overflow-hidden w-full aos-init">
                <img data-aos="fade-left" src="./assets/img/blogs/service-details-img-2.png" alt="" class="col-span-6 rounded-[20px] overflow-hidden w-full aos-init">
              </div> --}}
              <ul class="flex flex-col font-bold text-lg text-heading mt-[30px] gap-5">
                <li class="flex h-fit items-center gap-3.5">
                  <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5C4.45312 20.5 0 16.0469 0 10.5ZM14.4922 8.78125C14.9219 8.35156 14.9219 7.6875 14.4922 7.25781C14.0625 6.82812 13.3984 6.82812 12.9688 7.25781L8.75 11.4766L6.99219 9.75781C6.5625 9.32812 5.89844 9.32812 5.46875 9.75781C5.03906 10.1875 5.03906 10.8516 5.46875 11.2812L7.96875 13.7812C8.39844 14.2109 9.0625 14.2109 9.49219 13.7812L14.4922 8.78125Z" fill="#EC4814"></path>
                  </svg>
  
                  Stay ahead with cutting-edge technology your business with IT
                  Solutions
                </li>
                <li class="flex h-fit items-center gap-3.5">
                  <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5C4.45312 20.5 0 16.0469 0 10.5ZM14.4922 8.78125C14.9219 8.35156 14.9219 7.6875 14.4922 7.25781C14.0625 6.82812 13.3984 6.82812 12.9688 7.25781L8.75 11.4766L6.99219 9.75781C6.5625 9.32812 5.89844 9.32812 5.46875 9.75781C5.03906 10.1875 5.03906 10.8516 5.46875 11.2812L7.96875 13.7812C8.39844 14.2109 9.0625 14.2109 9.49219 13.7812L14.4922 8.78125Z" fill="#EC4814"></path>
                  </svg>
  
                  Enhance your business performance with technology
                </li>
                <li class="flex h-fit items-center gap-3.5">
                  <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5C4.45312 20.5 0 16.0469 0 10.5ZM14.4922 8.78125C14.9219 8.35156 14.9219 7.6875 14.4922 7.25781C14.0625 6.82812 13.3984 6.82812 12.9688 7.25781L8.75 11.4766L6.99219 9.75781C6.5625 9.32812 5.89844 9.32812 5.46875 9.75781C5.03906 10.1875 5.03906 10.8516 5.46875 11.2812L7.96875 13.7812C8.39844 14.2109 9.0625 14.2109 9.49219 13.7812L14.4922 8.78125Z" fill="#EC4814"></path>
                  </svg>
  
                  Empower your business with IT Solutions Unlock the potential of
                  technology
                </li>
              </ul>
              <p class="text-lg text-paragraph mt-[30px]">
                It is a long established fact that a reader will be distracted by
                the readable content of a page when looking at its a layout. The
                point of using Lorem Ipsum is that it has a more-or-less normal
                distributio
              </p>
            </div>
            <div class="col-span-8 lg:col-span-4 sticky top-0 overflow-hidden">
              <div data-aos="fade-left" class="rounded-t-[20px] rounded-b overflow-hidden aos-init">
                <h1 class="w-full text-center bg-sb-orange text-white font-bold text-2xl py-6">
                  Project Information
                </h1>
                <ul class="text-lg font-bold text-heading pl-10 w-full rounded-b border-2 border-[#F5F5F5] py-5">
                  <li class="w-full border-b-2 border-[#F5F5F5] py-2.5">
                    Connect, Engage, Succeed
                  </li>
                  <li class="w-full border-b-2 border-[#F5F5F5] py-2.5">
                    Powering Your Mobile Experience
                  </li>
                  <li class="w-full border-b-2 border-[#F5F5F5] py-2.5">
                    Enhance Your Mobile Journey
                  </li>
                  <li class="w-full border-b-2 border-[#F5F5F5] py-2.5">
                    Cyber Shield Technologies
                  </li>
                  <li class="w-full py-2.5">Simplify Life with Mobile Apps</li>
                </ul>
              </div>
              <div data-aos="fade-up" class="flex justify-center items-center h-fit rounded-[20px] overflow-hidden mt-[30px] relative xl:max-h-[400px] aos-init">
                <img src="./assets/img/blogs/s-sidebar-img.png" alt="" class="relative z-0 w-full lg:h-[360px]">
                <div class="absolute w-full h-full bg-heading/70"></div>
                <div class="w-full h-full text-center flex flex-col items-center absolute pt-10">
                  <h1 class="text-xl font-bold text-sb-orange">Contact US now</h1>
                  <h2 class="text-white font-bold text-2xl mt-2.5">
                    If You Need Help
                  </h2>
                  <h3 class="text-[32px] leading-[45px] text-white font-[900] mt-7">
                    0125836994
                  </h3>
                  <h4 class="text-lg text-white font-bold mt-4">
                    or Contact Form
                  </h4>
                  <div class="bg-btn-wrapper group overflow-hidden w-fit rounded-[20px] mt-10">
                    <a class="bg-btn flex h-fit items-center gap-2.5 justify-center px-7 py-5 rounded-[20px] hover:text-white uppercase" href="#">
                      Lets Start
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
        
        
       @include('partials.footer')
    
</x-layout>
