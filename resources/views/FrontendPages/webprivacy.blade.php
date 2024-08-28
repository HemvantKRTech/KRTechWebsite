<x-layout>
    @slot('title', 'AR Technology')
    @include('partials.navigation')
    
    <section class="relative h-fit max-w-[100vw] flex justify-center items-center">
        <img src="/images/about/bread-crumb.png" alt="" class="w-full min-h-[140px]">
        <div class="w-full h-full absolute top-0 left-0 bg-heading/70"></div>
        <div class="container absolute py-5 px-4 xl:px-0">
          <h1 class="text-white text-[55px] font-extrabold">Privacy Policies</h1>
          <div class="flex items-center gap-7">
                <a href="/" class="text-lg font-bold text-white transition-all duration-300 hover:text-sb-orange">Home</a>
                <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 13C1.71875 13 1.46875 12.9062 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.5 12.9062 2.25 13 2 13Z" fill="#EC4814"></path>
                </svg>
                <a href="#" class="text-lg font-bold text-white transition-all duration-300 hover:text-sb-orange">
                Pivacy Policies
                </a>
            </div>
        </div>
    </section>
    <section class="px-4 xl:px-0 py-[60px] lg:py-[120px] max-w-screen overflow-hidden">
      <div class="container">
        {!! $privacy->privacypolicies !!}
      </div>
    </section>

    
        
        
       @include('partials.footer')
    
</x-layout>
