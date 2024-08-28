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
               
                <div class="overflow-x-auto">
                    <div class=" mx-auto p-6 bg-white rounded-lg shadow-md">
                        <h2 class="text-2xl font-bold mb-6 text-gray-800">Add New Service</h2>
                        <form action="{{route('addservice')}}" method="POST" enctype="multipart/form-data">
                            @csrf <!-- Laravel CSRF protection -->

                            <!-- Service Icon -->
                            <div class="mb-4">
                                <label for="icon" class="block text-gray-700 text-sm font-bold mb-2">Service Icon (URL or Upload)</label>
                                <input type="file" name="icon" id="icon" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            </div>

                            <!-- Two Inputs in One Row -->
                            <div class="flex mb-4 space-x-4">
                                <!-- Service Name -->
                                <div class="w-1/2">
                                    <label for="service_name" class="block text-gray-700 text-sm font-bold mb-2">Service Name</label>
                                    <input type="text" name="service_name" id="service_name" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter service name" required>
                                </div>

                                <!-- Service Slug -->
                                <div class="w-1/2">
                                    <label for="slug" class="block text-gray-700 text-sm font-bold mb-2">Service Slug</label>
                                    <input type="text" name="slug" id="slug" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter service slug" required>
                                </div>
                            </div>

                            <div class="flex mb-4 space-x-4">
                            <div class="w-1/2">
                                <label for="feature_image" class="block text-gray-700 text-sm font-bold mb-2">Feature Image</label>
                                <input type="file" name="feature_image" id="feature_image" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            </div>

                            <!-- Service Description -->
                            <div class="w-1/2">
                                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Service Description</label>
                                <textarea name="description" id="description" rows="4" class="w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter service description" required></textarea>
                            </div>
                            </div>
                            <!-- Service Content with Summernote -->
                            <div class="mb-4">
                                <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Service Content</label>
                                <textarea name="content" id="summernote" class="summernote w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter detailed content" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-end">
                                <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Add Service
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
    
    @vite('resources/js/comment.js')
    @endpush
</x-layout>
