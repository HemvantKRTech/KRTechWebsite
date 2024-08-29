<x-layout>
    @slot('title', 'AR Technology')
    @include('partials.navigation')
    
    <section class="relative h-fit max-w-[100vw] flex justify-center items-center">
        <img src="/images/about/bread-crumb.png" alt="" class="w-full min-h-[140px]">
        <div class="w-full h-full absolute top-0 left-0 bg-heading/70"></div>
        <div class="container absolute py-5 px-4 xl:px-0">
          <h1 class="text-white text-[55px] font-extrabold">Contact Us</h1>
          <div class="flex items-center gap-7">
                <a href="/" class="text-lg font-bold text-white transition-all duration-300 hover:text-sb-orange">Home</a>
                <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 13C1.71875 13 1.46875 12.9062 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.5 12.9062 2.25 13 2 13Z" fill="#EC4814"></path>
                </svg>
                <a href="#" class="text-lg font-bold text-white transition-all duration-300 hover:text-sb-orange">
                Contact Us
                </a>
            </div>
        </div>
    </section>
   
    <section class="px-4 xl:px-0 pt-[60px] lg:pt-[120px]">
        <div class="container">
          <div class="flex justify-between flex-col gap-5 md:flex-row md:items-end">
            <div class="">
              <h1 class="flex h-fit items-center gap-2.5">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_1_13847)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3087 10.3902H10.9406L16.1511 15.6007L15.5987 16.153L10.3882 10.9425V18.3107H9.61V10.9425L4.39949 16.153L3.84711 15.6007L9.05762 10.3902H1.68945V9.61195H9.05762L3.84711 4.40145L4.39949 3.84906L9.61 9.05957V1.69141H10.3882V9.05957L15.5987 3.84906L16.1511 4.40145L10.9406 9.61195H18.3087V10.3902Z" fill="#5B5B5B"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.12418 2.82445C4.84203 2.82445 5.42391 3.40637 5.42391 4.12418C5.42391 4.84203 4.84199 5.42391 4.12418 5.42391C3.40637 5.42391 2.82445 4.84199 2.82445 4.12418C2.82445 3.40637 3.40637 2.82445 4.12418 2.82445ZM17.1755 4.12418C17.1755 4.84203 16.5936 5.42391 15.8758 5.42391C15.158 5.42391 14.5761 4.84199 14.5761 4.12418C14.5761 3.40637 15.158 2.82445 15.8758 2.82445C16.5936 2.82445 17.1755 3.40637 17.1755 4.12418ZM18.3096 11.2997C17.5918 11.2997 17.0099 10.7178 17.0099 10C17.0099 9.28215 17.5918 8.70027 18.3096 8.70027C19.0275 8.70027 19.6094 9.28219 19.6094 10C19.6094 10.7179 19.0275 11.2997 18.3096 11.2997ZM11.2997 1.69035C11.2997 2.4082 10.7178 2.99012 10 2.99012C9.28215 2.99012 8.70027 2.4082 8.70027 1.69035C8.70027 0.972539 9.28219 0.390625 10 0.390625C10.7179 0.390625 11.2997 0.972539 11.2997 1.69035ZM15.8758 17.1755C15.158 17.1755 14.5761 16.5936 14.5761 15.8758C14.5761 15.158 15.158 14.5761 15.8758 14.5761C16.5936 14.5761 17.1755 15.158 17.1755 15.8758C17.1755 16.5936 16.5936 17.1755 15.8758 17.1755ZM8.70027 18.3096C8.70027 17.5918 9.28219 17.0099 10 17.0099C10.7179 17.0099 11.2997 17.5918 11.2997 18.3096C11.2997 19.0275 10.7178 19.6094 10 19.6094C9.28215 19.6094 8.70027 19.0275 8.70027 18.3096ZM2.82445 15.8758C2.82445 15.158 3.40637 14.5761 4.12418 14.5761C4.84203 14.5761 5.42391 15.158 5.42391 15.8758C5.42391 16.5936 4.84199 17.1755 4.12418 17.1755C3.40637 17.1755 2.82445 16.5936 2.82445 15.8758ZM1.69035 8.70027C2.4082 8.70027 2.99012 9.28219 2.99012 10C2.99012 10.7179 2.4082 11.2997 1.69035 11.2997C0.972539 11.2997 0.390625 10.7178 0.390625 10C0.390625 9.28215 0.972539 8.70027 1.69035 8.70027Z" fill="#103A33"></path>
                    <path d="M13.6201 13.622C15.6205 11.6216 15.6205 8.37835 13.6201 6.37795C11.6197 4.37755 8.37636 4.37755 6.37596 6.37795C4.37555 8.37835 4.37555 11.6216 6.37596 13.622C8.37636 15.6225 11.6197 15.6225 13.6201 13.622Z" fill="#EC4814"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3078 12.074C12.3078 13.3482 7.69336 13.3482 7.69336 12.074C7.69336 10.7998 8.72645 9.76684 10.0007 9.76684C11.2748 9.76688 12.3078 10.7998 12.3078 12.074ZM8.9343 8.03883C8.9343 8.62777 9.41172 9.1052 10.0007 9.1052C10.5896 9.1052 11.067 8.62777 11.067 8.03883C11.067 7.45004 10.5896 6.97266 10.0007 6.97266C9.41168 6.97262 8.9343 7.45004 8.9343 8.03883Z" fill="white"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2543 11.5781C11.9358 12.6196 8.26301 12.6534 7.72703 11.6794C7.70488 11.8077 7.69336 11.9396 7.69336 12.0743C7.69336 13.3484 12.3078 13.3484 12.3078 12.0743C12.3078 11.9039 12.2894 11.7379 12.2543 11.5781Z" fill="#1A2429"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_1_13847">
                      <rect width="20" height="20" fill="white"></rect>
                    </clipPath>
                  </defs>
                </svg>
                <span class="text-xl font-bold text-sb-orange">Contact Us_</span>
              </h1>
              <h2 class="text-[40px] leading-[45px] font-extrabold text-heading capitalize mt-4">
                Get In Touch
              </h2>
            </div>
            <p class="text-lg text-paragraph max-w-[390px] w-full">
              IT Solution is a broad category that encompasses various
              technological solutions
            </p>
          </div>
          <div class="grid grid-cols-6 lg:grid-cols-12 gap-[60px] shadow-primary rounded-[20px] overflow-hidden mt-[60px] p-4 lg:p-[60px]">
            <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="col-span-6 grid grid-cols-12 gap-[30px]">
              @csrf
              <input type="text" name="name" class="col-span-12 sm:col-span-6 border-2 border-[#F5F5F5] rounded-[20px] px-5 py-3.5 text-lg text-heading outline-none focus:outline-none" placeholder="Your Name" required>
              <input type="email" name="email" class="col-span-12 sm:col-span-6 border-2 border-[#F5F5F5] rounded-[20px] px-5 py-3.5 text-lg text-heading outline-none focus:outline-none" placeholder="Your Email" required>
              <input type="text" name="phone_number" class="col-span-12 sm:col-span-6 border-2 border-[#F5F5F5] rounded-[20px] px-5 py-3.5 text-lg text-heading outline-none focus:outline-none" placeholder="Phone Number">
              <input type="text" name="subject" class="col-span-12 sm:col-span-6 border-2 border-[#F5F5F5] rounded-[20px] px-5 py-3.5 text-lg text-heading outline-none focus:outline-none" placeholder="Subject" required>
          
              <textarea name="message" class="col-span-12 border-2 border-[#F5F5F5] rounded-[20px] px-5 py-3.5 text-lg text-heading overflow-hidden min-h-[176px] outline-none focus:outline-none" placeholder="Message here.." required></textarea>
          
              <div class="bg-btn-wrapper group overflow-hidden w-full rounded-[999] col-span-12">
                  <button type="submit" class="bg-btn flex h-fit items-center gap-2.5 justify-center px-7 py-5 rounded-[999] hover:text-heading uppercase w-full">
                      submit now
                      <span class="">
                          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M13.6875 7.71484L8.6875 12.7148C8.5 12.9023 8.25 12.9961 8 12.9961C7.71875 12.9961 7.46875 12.9023 7.28125 12.7148C6.875 12.3398 6.875 11.6836 7.28125 11.3086L10.5625 7.99609H1C0.4375 7.99609 0 7.55859 0 6.99609C0 6.46484 0.4375 5.99609 1 5.99609H10.5625L7.28125 2.71484C6.875 2.33984 6.875 1.68359 7.28125 1.30859C7.65625 0.902344 8.3125 0.902344 8.6875 1.30859L13.6875 6.30859C14.0938 6.68359 14.0938 7.33984 13.6875 7.71484Z" fill="white"></path>
                          </svg>
                      </span>
                  </button>
              </div>
          </form>
          
            <div class="col-span-6">
              <div class="flex items-center gap-[20px] h-fit">
                <div class="w-11 aspect-square flex justify-center items-center rounded-full border-2 border-[#F5F5F5]">
                  <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.5 0C15.3125 0 16 0.6875 16 1.5C16 2 15.75 2.4375 15.375 2.71875L8.59375 7.8125C8.21875 8.09375 7.75 8.09375 7.375 7.8125L0.59375 2.71875C0.21875 2.4375 0 2 0 1.5C0 0.6875 0.65625 0 1.5 0H14.5ZM6.78125 8.625C7.5 9.15625 8.46875 9.15625 9.1875 8.625L16 3.5V10C16 11.125 15.0938 12 14 12H2C0.875 12 0 11.125 0 10V3.5L6.78125 8.625Z" fill="#EC4814"></path>
                  </svg>
                </div>
                <div class="">
                  <h1 class="text-2xl text-heading font-bold">Email</h1>
                  <p class="text-lg text-paragraph mt-1">info@artechnology.in</p>
                </div>
              </div>
              <div class="flex items-center gap-[20px] h-fit mt-10">
                <div class="w-11 aspect-square flex justify-center items-center rounded-full border-2 border-[#F5F5F5]">
                  <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.9688 13.0938L15.2188 16.25C15.125 16.7188 14.75 17.0312 14.2812 17.0312C6.40625 17 0 10.5938 0 2.71875C0 2.25 0.28125 1.875 0.75 1.78125L3.90625 1.03125C4.34375 0.9375 4.8125 1.1875 5 1.59375L6.46875 5C6.625 5.40625 6.53125 5.875 6.1875 6.125L4.5 7.5C5.5625 9.65625 7.3125 11.4062 9.5 12.4688L10.875 10.7812C11.125 10.4688 11.5938 10.3438 12 10.5L15.4062 11.9688C15.8125 12.1875 16.0625 12.6562 15.9688 13.0938Z" fill="#EC4814"></path>
                  </svg>
                </div>
                <div class="">
                  <h1 class="text-2xl text-heading font-bold">Phone</h1>
                  <p class="text-lg text-paragraph mt-1">+91 7889217740</p>
                </div>
              </div>
              <div class="flex items-center gap-[20px] h-fit mt-10">
                <div class="w-11 aspect-square flex justify-center items-center rounded-full border-2 border-[#F5F5F5]">
                  <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.25 15.625C3.625 13.5938 0 8.75 0 6C0 2.6875 2.65625 0 6 0C9.3125 0 12 2.6875 12 6C12 8.75 8.34375 13.5938 6.71875 15.625C6.34375 16.0938 5.625 16.0938 5.25 15.625ZM6 8C7.09375 8 8 7.125 8 6C8 4.90625 7.09375 4 6 4C4.875 4 4 4.90625 4 6C4 7.125 4.875 8 6 8Z" fill="#EC4814"></path>
                  </svg>
                </div>
                <div class="">
                  <h1 class="text-2xl text-heading font-bold">Location</h1>
                  <p class="text-lg text-paragraph mt-1">
                    KR Technology,SCF-25,2nd Floor, Phase 11,Sector-65, Mohali(PB)
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-[60px] lg:pt-[120px]">
        {{-- <img src="/assets/img/map.png" alt="" > --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3431.2877583641616!2d76.74116437537101!3d30.682178774608737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed9c716d363b%3A0x476846d64549eb1!2sKR%20Technology!5e0!3m2!1sen!2sin!4v1724915491518!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </section>
      
   
      
        
        <!-- footer start  -->
       @include('partials.footer')
       @push('scripts')
       <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('#contactForm');
        
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission
        
                const formData = new FormData(form);
        
                fetch('{{ route("contact.submit") }}', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                  Toastify({
                    text: 'Thanks to contact us. Our team will contact you ASAP.',
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "right", 
                    stopOnFocus: true, 
                    style: {
                        background: "#EC4814", 
                    },
                }).showToast(); // Show success message
                    form.reset(); // Optionally reset the form
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
        </script>
        
       @endpush
    
</x-layout>
