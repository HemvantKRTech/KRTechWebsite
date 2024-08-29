<x-layout>
    @slot('title', 'AR Technology')
    @include('partials.navigation')
    
      <section class="relative h-fit max-w-[100vw] flex justify-center items-center">
        <img src="/images/about/bread-crumb.png" alt="" class="w-full min-h-[140px]">
        <div class="w-full h-full absolute top-0 left-0 bg-heading/70"></div>
        <div class="container absolute py-5 px-4 xl:px-0">
          <h1 class="text-white text-[55px] font-extrabold">Blogs</h1>
          <div class="flex items-center gap-7">
            <a href="/" class="text-lg font-bold text-white transition-all duration-300 hover:text-sb-orange">Home</a>
            <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 13C1.71875 13 1.46875 12.9062 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.5 12.9062 2.25 13 2 13Z" fill="#EC4814"></path>
            </svg>
            <a href="#" class="text-lg font-bold text-white transition-all duration-300 hover:text-sb-orange">
              Blogs
            </a>
          </div>
        </div>
      </section>
      <section class="px-4 xl:px-0 py-[60px] lg:py-[120px] max-w-screen overflow-hidden relative">
        <div class="container grid grid-cols-8 lg:grid-cols-12 gap-[30px]">
          <div class="col-span-8 flex flex-col">
            <!-- single blog  -->
            <div data-aos="fade-in" class="rounded-t-[20px] overflow-hidden w-full aos-init aos-animate">
              <div class="relative w-full">
                <!-- date  -->
                <div class="bg-sb-orange absolute bottom-0 translate-y-1/2 left-4 sm:left-10 px-2 lg:px-5 py-2.5 text-white rounded-[20px]">
                  <div class="flex gap-[30px]">
                    <div class="flex h-fit gap-2.5 items-center text-sm">
                      <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.375 7.625C8.64844 7.625 10.5 9.47656 10.5
                        11.75C10.5 12.1719 10.1484 12.5 9.75 12.5H0.75C0.328125
                        12.5 0 12.1719 0 11.75C0 9.47656 1.82812 7.625 4.125
                        7.625H6.375ZM1.125 11.375H9.35156C9.16406 9.89844 7.89844
                        8.75 6.375 8.75H4.125C2.57812 8.75 1.3125 9.89844 1.125
                        11.375ZM5.25 6.5C3.58594 6.5 2.25 5.16406 2.25 3.5C2.25
                        1.85938 3.58594 0.5 5.25 0.5C6.89062 0.5 8.25 1.85938 8.25
                        3.5C8.25 5.16406 6.89062 6.5 5.25 6.5ZM5.25 1.625C4.19531
                        1.625 3.375 2.46875 3.375 3.5C3.375 4.55469 4.19531 5.375
                        5.25 5.375C6.28125 5.375 7.125 4.55469 7.125 3.5C7.125
                        2.46875 6.28125 1.625 5.25 1.625Z" fill="currentColor"></path>
                      </svg>
                      <p class="">By admin</p>
                    </div>
                    <div class="flex h-fit gap-2.5 items-center text-sm">
                      <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.4062 5.85156L11.1562 10.3516C11.0391 10.6094 10.7812 10.75 10.4766 10.75H1.5C0.65625 10.75 0 10.0938 0 9.25V1.75C0 0.929688 0.65625 0.25 1.5 0.25H4.24219C4.64062 0.25 5.01562 0.414062 5.29688 0.695312L6.44531 1.75H9.75C10.5703 1.75 11.25 2.42969 11.25 3.25V4H10.125V3.25C10.125 3.0625 9.9375 2.875 9.75 2.875H6L4.5 1.49219C4.42969 1.42188 4.33594 1.375 4.24219 1.375H1.5C1.28906 1.375 1.125 1.5625 1.125 1.75V8.5L2.78906 5.17188C2.90625 4.91406 3.16406 4.75 3.44531 4.75H12.75C13.2891 4.75 13.6641 5.33594 13.4062 5.85156Z" fill="currentColor"></path>
                      </svg>
  
                      <p class="">Category</p>
                    </div>
                    <div class="flex h-fit gap-2.5 items-center text-sm">
                      <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.875 0.5C8.54688 0.5 10.75 2.35156 10.75 4.625C10.75 6.92188 8.54688 8.75 5.875 8.75C5.42969 8.75 5.00781 8.70312 4.58594 8.60938C3.88281 9.05469 2.85156 9.5 1.5625 9.5C1.32812 9.5 1.11719 9.38281 1.04688 9.14844C0.953125 8.9375 0.976562 8.70312 1.14062 8.51562C1.16406 8.51562 1.67969 7.95312 2.05469 7.20312C1.39844 6.5 1 5.60938 1 4.625C1 2.35156 3.17969 0.5 5.875 0.5ZM4.84375 7.50781C5.19531 7.60156 5.52344 7.625 5.875 7.625C7.9375 7.625 9.625 6.28906 9.625 4.625C9.625 2.98438 7.9375 1.625 5.875 1.625C3.78906 1.625 2.125 2.98438 2.125 4.625C2.125 5.46875 2.52344 6.07812 2.875 6.42969L3.4375 7.01562L3.0625 7.74219C2.96875 7.88281 2.875 8.04688 2.78125 8.21094C3.20312 8.09375 3.60156 7.90625 4 7.64844L4.39844 7.41406L4.84375 7.50781ZM11.3359 3.52344C13.9375 3.61719 16 5.42188 16 7.625C16 8.60938 15.5781 9.5 14.9219 10.2031C15.2969 10.9531 15.8125 11.5156 15.8359 11.5156C16 11.7031 16.0234 11.9375 15.9297 12.1484C15.8594 12.3828 15.6484 12.5 15.4141 12.5C14.125 12.5 13.0938 12.0547 12.3906 11.6094C11.9688 11.7031 11.5469 11.75 11.125 11.75C9.20312 11.75 7.53906 10.8125 6.74219 9.45312C7.14062 9.40625 7.53906 9.3125 7.89062 9.17188C8.54688 10.0625 9.74219 10.625 11.125 10.625C11.4531 10.625 11.7812 10.6016 12.1328 10.5078L12.5781 10.4141L12.9766 10.6484C13.375 10.9062 13.7734 11.0938 14.1953 11.2109C14.1016 11.0469 14.0078 10.8828 13.9141 10.7422L13.5391 10.0156L14.1016 9.42969C14.4531 9.07812 14.875 8.46875 14.875 7.625C14.875 6.07812 13.375 4.8125 11.4766 4.64844L11.5 4.625C11.5 4.25 11.4297 3.875 11.3359 3.52344Z" fill="currentColor"></path>
                      </svg>
  
                      <p class="">Comments (05)</p>
                    </div>
                  </div>
                </div>
                <img src="{{ asset('storage/'.$blog->featured_image) }}" alt="" class="w-full">
              </div>
              <div class="w-full border-x-2 border-b-2 border-[#F5F5F5] rounded-b-[20px] p-4 lg:p-10">
                <h1 class="text-heading font-[900] text-3xl sm:text-[40px] leading-[45px] mt-[30px] capitalize">
                  {{$blog->title}}
                </h1>
                {!! $blog->description !!}
              </div>
            </div>
            @if (count($blog->comments ) > 0)
            <h1 class="text-heading text-2xl font-bold mt-[60px]">
              "Many Thoughts On “{{$blog->title}}”
            </h1>
            @endif
            <!-- comment  -->
            @foreach ($blog->comments as $item)
            <div data-aos="fade-up" class="border-2 border-[#F5F5F5] rounded p-10 mt-[30px] aos-init aos-animate">
              <div class="flex justify-between">
                <div class="">
                  <p class="text-paragraph text-lg">
                    {{ date('Y-m-d', strtotime($item->created_at))}}
                  </p>
                  <h1 class="font-bold text-2xl text-heading mt-1">
                    {{$item->name}}
                  </h1>
                </div>
                <div class="border-btn-wrapper rounded-[20px]">
                  <a class="border-btn flex h-fit items-center gap-2.5 px-6 py-3 rounded border-[#F5F5F5]" href="blog-details.html">Reply
                  </a>
                </div>
              </div>
              <p class="text-lg text-heading mt-5">
                {{$item->message}}
              </p>
            </div>
            @endforeach
            <h1 class="text-heading text-[32px] font-[900] leading-[45px] mt-10">
              Leave A comment
            </h1>
            <form id="commentForm" action="{{route('addcomment')}}" method="POST">
              @csrf <!-- CSRF Token for security -->
              <input type="hidden" name="blogid" value="{{$blog->id}}">
              <div data-aos="fade-right" class="grid grid-cols-12 mt-[30px] gap-[30px] aos-init">
                  
                  <!-- Name Input -->
                  <input type="text" name="name" class="col-span-12 sm:col-span-6 shadow-primary rounded-[20px] px-5 py-3.5 text-lg text-heading outline-none focus:outline-none" placeholder="Your Name" required>
                  
                  <!-- Email Input -->
                  <input type="email" name="email" class="col-span-12 sm:col-span-6 shadow-primary rounded-[20px] px-5 py-3.5 text-lg text-heading outline-none focus:outline-none" placeholder="Your Email" required>
                  
                  <!-- Phone Number Input -->
                  <input type="text" name="phone" class="col-span-12 sm:col-span-6 shadow-primary rounded-[20px] px-5 py-3.5 text-lg text-heading outline-none focus:outline-none" placeholder="Phone Number" required>
                  
                  <!-- Dropdown for Options using select tag -->
                  <div class="col-span-12 sm:col-span-6">
                      <select name="option" class="shadow-primary rounded-[20px] px-5 py-3.5 text-lg text-heading w-full outline-none focus:outline-none" required>
                          <option value="" >Choose an Option</option>
                          <option value="Option - 1">Option - 1</option>
                          <option value="Option - 2">Option - 2</option>
                          <option value="Option - 3">Option - 3</option>
                          <option value="Option - 4">Option - 4</option>
                          <option value="Option - 5">Option - 5</option>
                      </select>
                  </div>
                  
                  <!-- Message Textarea -->
                  <textarea name="message" class="col-span-12 shadow-primary rounded-[20px] px-5 py-3.5 text-lg text-heading overflow-hidden min-h-[176px] outline-none focus:outline-none" placeholder="Message here.." required></textarea>
          
                  <!-- Submit Button -->
                  <div class="bg-btn-wrapper group overflow-hidden w-full rounded-[999] col-span-6">
                      <button type="submit" class="bg-btn flex h-fit items-center gap-2.5 justify-center px-7 py-5 rounded-[999] hover:text-heading uppercase w-full">
                          Submit Now
                          <span>
                              <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M13.6875 7.71484L8.6875 12.7148C8.5 12.9023 8.25 12.9961 8 12.9961C7.71875 12.9961 7.46875 12.9023 7.28125 12.7148C6.875 12.3398 6.875 11.6836 7.28125 11.3086L10.5625 7.99609H1C0.4375 7.99609 0 7.55859 0 6.99609C0 6.46484 0.4375 5.99609 1 5.99609H10.5625L7.28125 2.71484C6.875 2.33984 6.875 1.68359 7.28125 1.30859C7.65625 0.902344 8.3125 0.902344 8.6875 1.30859L13.6875 6.30859C14.0938 6.68359 14.0938 7.33984 13.6875 7.71484Z" fill="white"></path>
                              </svg>
                          </span>
                      </button>
                  </div>
          
              </div>
          </form>
          </div>
          <div class="col-span-8 lg:col-span-4 sticky top-0">
            <!-- search  -->
            <div data-aos="fade-up" class="w-full bg-white shadow-primary p-10 rounded-[20px] aos-init aos-animate">
              <h1 class="text-2xl font-bold text-heading">Search</h1>
              <div class="flex border-2 rounded-[20px] border-[#F5F5F5] items-center overflow-hidden mt-[30px]">
                <input type="text" id="search" class="flex-1 text-lg text-heading py-3.5 px-5 outline-none focus:outline-none" placeholder="Search">
                <label for="search" class="pr-5"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.6719 12.8906C15.082 13.3281 15.082 14.0117 14.6719 14.4492C14.2344 14.8594 13.5508 14.8594 13.1133 14.4492L9.85938 11.168C8.73828 11.9062 7.37109 12.2891 5.89453 12.0977C3.37891 11.7422 1.35547 9.69141 1.02734 7.20312C0.5625 3.48438 3.70703 0.339844 7.42578 0.804688C9.91406 1.13281 11.9648 3.15625 12.3203 5.67188C12.5117 7.14844 12.1289 8.51562 11.3906 9.60938L14.6719 12.8906ZM3.16016 6.4375C3.16016 8.37891 4.71875 9.9375 6.66016 9.9375C8.57422 9.9375 10.1602 8.37891 10.1602 6.4375C10.1602 4.52344 8.57422 2.9375 6.66016 2.9375C4.71875 2.9375 3.16016 4.52344 3.16016 6.4375Z" fill="#EC4814"></path>
                  </svg>
                </label>
              </div>
            </div>
            <!-- category  -->
            <div data-aos="fade-up" class="w-full bg-white shadow-primary p-10 rounded-[20px] mt-10 aos-init aos-animate">
              <h1 class="text-2xl font-bold text-heading">Category</h1>
              <ul class="mt-4">
                <li class="flex justify-between h-fit items-center py-3 border-b border-[#F5F5F5]">
                  <p class="text-lg text-paragraph">CloudConnect IT Services</p>
                  <div class="w-11 aspect-square rounded-full flex justify-center items-center border-2 border-[#F5F5F5]">
                    <p class="text-lg text-sb-orange text-center">(02)</p>
                  </div>
                </li>
                <li class="flex justify-between h-fit items-center py-3 border-b border-[#F5F5F5]">
                  <p class="text-lg text-paragraph">SecureNet IT Solutions</p>
                  <div class="w-11 aspect-square rounded-full flex justify-center items-center border-2 border-[#F5F5F5]">
                    <p class="text-lg text-sb-orange text-center">(01)</p>
                  </div>
                </li>
                <li class="flex justify-between h-fit items-center py-3 border-b border-[#F5F5F5]">
                  <p class="text-lg text-paragraph">CyberShield Technologies</p>
                  <div class="w-11 aspect-square rounded-full flex justify-center items-center border-2 border-[#F5F5F5]">
                    <p class="text-lg text-sb-orange text-center">(03)</p>
                  </div>
                </li>
                <li class="flex justify-between h-fit items-center py-3 border-b border-[#F5F5F5]">
                  <p class="text-lg text-paragraph">IT Optimization Services</p>
                  <div class="w-11 aspect-square rounded-full flex justify-center items-center border-2 border-transparent">
                    <p class="text-lg text-sb-orange text-center">(05)</p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- Latest Blog  -->
            <div data-aos="fade-up" class="w-full bg-white shadow-primary p-10 rounded-[20px] mt-10 aos-init aos-animate">
              <h1 class="text-2xl font-bold text-heading">Latest Blogs</h1>
              <div class="flex flex-col gap-5 mt-[30px]">
                @foreach ($latestblogs as $item)
                <a href="{{route('blogs.single',$item->slug)}}" class="border-2 border-[#F5F5F5] transition-all duration-300 hover:border-sb-orange rounded-[20px] py-3.5 px-5">
                    <div class="flex h-fit items-center gap-2.5">
                      <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1V2H9V1C9 0.46875 9.4375 0 10 0C10.5312 0 11 0.46875 11 1V2H12.5C13.3125 2 14 2.6875 14 3.5V5H0V3.5C0 2.6875 0.65625 2 1.5 2H3V1C3 0.46875 3.4375 0 4 0C4.53125 0 5 0.46875 5 1ZM0 6H14V14.5C14 15.3438 13.3125 16 12.5 16H1.5C0.65625 16 0 15.3438 0 14.5V6ZM2 9.5C2 9.78125 2.21875 10 2.5 10H3.5C3.75 10 4 9.78125 4 9.5V8.5C4 8.25 3.75 8 3.5 8H2.5C2.21875 8 2 8.25 2 8.5V9.5ZM6 9.5C6 9.78125 6.21875 10 6.5 10H7.5C7.75 10 8 9.78125 8 9.5V8.5C8 8.25 7.75 8 7.5 8H6.5C6.21875 8 6 8.25 6 8.5V9.5ZM10.5 8C10.2188 8 10 8.25 10 8.5V9.5C10 9.78125 10.2188 10 10.5 10H11.5C11.75 10 12 9.78125 12 9.5V8.5C12 8.25 11.75 8 11.5 8H10.5ZM2 13.5C2 13.7812 2.21875 14 2.5 14H3.5C3.75 14 4 13.7812 4 13.5V12.5C4 12.25 3.75 12 3.5 12H2.5C2.21875 12 2 12.25 2 12.5V13.5ZM6.5 12C6.21875 12 6 12.25 6 12.5V13.5C6 13.7812 6.21875 14 6.5 14H7.5C7.75 14 8 13.7812 8 13.5V12.5C8 12.25 7.75 12 7.5 12H6.5ZM10 13.5C10 13.7812 10.2188 14 10.5 14H11.5C11.75 14 12 13.7812 12 13.5V12.5C12 12.25 11.75 12 11.5 12H10.5C10.2188 12 10 12.25 10 12.5V13.5Z" fill="#0E191E"></path>
                      </svg>
    
                      <p class="text-sm text-paragraph">{{ date('Y-m-d', strtotime($item->created_at))}}</p>
                    </div>
                    <h1 class="text-lg font-bold text-heading mt-3.5">
                      {{$item->title}}
                    </h1>
                  </a>
                @endforeach
                
              </div>
            </div>
            <!-- Tags  -->
            @php
            $tags = json_decode($blog->tags, true);
            @endphp
            <div data-aos="fade-up" class="w-full bg-white shadow-primary p-10 rounded-[20px] mt-10 aos-init aos-animate">
              <h1 class="text-2xl font-bold text-heading">Tags</h1>
              <div class="flex flex-wrap gap-4 justify-between mt-[30px]">
                @if (!empty($tags))
                  @foreach ($tags as $item)
                      <a href="blog-details.html" class="border-2 border-[#F5F5F5] transition-all duration-300 hover:border-sb-orange rounded-[20px] py-1.5 px-2.5">
                          <p class="text-lg text-paragraph">{{ $item['value'] }}</p>
                      </a> 
                  @endforeach
              @else
                  <p>No tags available.</p>
              @endif
                
              </div>
            </div>
          </div>
        </div>
      </section>
        <!-- footer start  -->
    @include('partials.footer')
    @push('scripts')
    
    <script src="{{ asset('js/website.js') }}"></script>

    @endpush
</x-layout>
