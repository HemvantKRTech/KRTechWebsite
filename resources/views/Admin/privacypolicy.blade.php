<x-layout>
    @slot('title', 'AR Technology')

    @push('styles')
    <style>
        .main {
            width: 100%;
            float: left;
        }
        .sidebar {
            width: 20%;
            float: left;
        }
        .content {
            width: 80%;
            float: left;
        }
        .custom-side-menu {
            background-color: #2d3748;
            color: #ffffff;
            height: 100vh;
            width: 100%;
            top: 0;
            left: 0;
            padding-top: 1rem;
            transition: transform 0.3s ease-in-out;
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
            background-color: #4a5568;
        }
        .custom-side-menu .menu-item.active {
            background-color: #4a5568;
        }
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
        .overlay.show {
            display: block;
        }
    </style>
    @endpush

    <div class="main">
        <div class="sidebar">
            @include('Admin.navigation')
        </div>
        <div class="content">
            {{-- <div class="container mx-auto px-4 py-8"> --}}
                @if (session('success'))
                <div style="
                    background-color: #d4edda; /* Light green background */
                    color: #155724; /* Dark green text */
                    padding: 1rem; /* Padding around the message */
                    border: 1px solid #c3e6cb; /* Light green border */
                    border-radius: 0.375rem; /* Rounded corners */
                    margin-bottom: 1rem; /* Margin below the alert */
                    font-family: Arial, sans-serif; /* Font family */
                ">
                    {{ session('success') }}
                </div>
            @endif

                <div class="overflow-x-auto">
                    <div class=" mx-auto p-6 bg-white rounded-lg shadow-md">
                        <h2 class="text-2xl font-bold mb-6 text-gray-800">Add/Update Privacy Policies</h2>
                        <form action="{{route('privacypolicystore')}}" method="POST" enctype="multipart/form-data">
                            @csrf <!-- Laravel CSRF protection -->

                            <!-- Service Icon -->
                           
                            <!-- Service Content with Summernote -->
                            <div class="mb-4">
                                <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Privacy Policy Content</label>
                                <textarea name="content" id="summernote"  class="summernote w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter detailed content" required>{{$Privacy->privacypolicies}}</textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-end">
                                <button type="submit" style="
                                padding-left: 1.5rem; /* px-6 */
                                padding-right: 1.5rem; /* px-6 */
                                padding-top: 0.5rem; /* py-2 */
                                padding-bottom: 0.5rem; /* py-2 */
                                background-color: #3b82f6; /* bg-blue-500 */
                                color: #ffffff; /* text-white */
                                border-radius: 0.375rem; /* rounded (medium size) */
                                border: none; /* To remove default border */
                                cursor: pointer; /* Change cursor to pointer */
                                outline: none; /* Removes default outline */
                                transition: background-color 0.3s, box-shadow 0.3s; /* Smooth transition for hover and focus effects */
                            "
                            onmouseover="this.style.backgroundColor='#2563eb'" /* hover:bg-blue-600 */
                            onfocus="this.style.boxShadow='0 0 0 2px #3b82f6'" /* focus:ring-2 focus:ring-blue-500 */
                            onblur="this.style.boxShadow='none'">
                                    Add or Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    </div>

    @push('scripts')
    <!-- Include Summernote JS -->
    
    
    <!-- Initialize Summernote -->
    <script>

 $('#summernote').summernote({
       
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
    
    @endpush
</x-layout>
