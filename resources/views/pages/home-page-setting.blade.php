<x-layout>
    @slot('title', 'AR Technology')
  
       @push('styles')
       <style>

        .main{
            width: 100%;
            float: left;
        }
        .sidebar{
            width: 20%;
            float: left;
           
        }
        .content{
            width: 80%;
            float: left;
           
        
        }
        .custom-side-menu {
            background-color: #2d3748; /* Dark background */
            color: #ffffff; /* White text */
            height: 100vh; /* Full height */
            width: 100%; /* Sidebar width */
            top: 0;
            left: 0;
            padding-top: 1rem;
            transition: transform 0.3s ease-in-out; /* Smooth slide-in/slide-out transition */
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
            background-color: #4a5568; /* Hover background color */
        }
        
        .custom-side-menu .menu-item.active {
            background-color: #4a5568; /* Active item background color */
        }
        
        /* Overlay for when the menu is open */
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
        
        /* Show the overlay when the menu is open */
        .overlay.show {
            display: block;
        }
        
        .img-margin{
            margin-left: 15px;
        }
        #add-more{
            
            margin-left: 1rem;
            background-color: #0066ff;
            color: #fff;
            padding-left: 1rem;
            padding-right: 1rem;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            border-radius: 0.375rem;
            transition: background-color 0.2s ease;
        }
        #save{
            margin-left: 1rem;
            background-color: #00e6ac;
            color: #fff;
            padding-left: 1rem;
            padding-right: 1rem;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            border-radius: 0.375rem;
            transition: background-color 0.2s ease;
        }
        .top-2 {
            top: 0.1rem;
            left: 100px;
}
        
        
        </style>
       @endpush
        <div class="main">

            <div class="sidebar">
            
                @include('Admin.navigation')
            
            
            </div>
            
            <div class="content">
            
                
                    
                    <!-- Tabs -->
                    <ul id="tabs" class="flex border-b bg-gray-200">
                        <li class="tab-item flex-1">
                            <a href="#first" class="block py-2 px-4 text-gray-800 font-semibold border-b-2 border-transparent hover:border-blue-500 hover:text-blue-500">Slider</a>
                        </li>
                        <li class="tab-item flex-1">
                            <a href="#second" class="block py-2 px-4 text-gray-800 font-semibold border-b-2 border-transparent hover:border-blue-500 hover:text-blue-500">Teams</a>
                        </li>
                        <li class="tab-item flex-1">
                            <a href="#allteam" class="block py-2 px-4 text-gray-800 font-semibold border-b-2 border-transparent hover:border-blue-500 hover:text-blue-500">All Teams</a>
                        </li>
                        <li class="tab-item flex-1">
                            <a href="#third" class="block py-2 px-4 text-gray-800 font-semibold border-b-2 border-transparent hover:border-blue-500 hover:text-blue-500">Faqs</a>
                        </li>
                        <li class="tab-item flex-1">
                            <a href="#fourth" class="block py-2 px-4 text-gray-800 font-semibold border-b-2 border-transparent hover:border-blue-500 hover:text-blue-500">Blog Post</a>
                        </li>
                    </ul>
            
                    <!-- Tab Contents -->
                    <div id="tab-contents">
                        <div id="first" class="tab-content p-4">
                            <form id="dynamic-form" action="{{route('slidersave')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div id="form-fields">
                                    <!-- Initial Form Field -->
                                    <div class="form-field flex items-center mb-4 border p-4 rounded bg-gray-100">
                                        <div class="flex-1">
                                            <label for="title-1" class="block text-sm font-medium text-gray-700">Title</label>
                                            <input type="text" id="title-1" name="titles[]" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        </div>
                                        <div class="flex-1 ml-4 img-margin">
                                            <label for="image-1" class="block text-sm font-medium text-gray-700">Image</label>
                                            <input type="file" id="image-1" name="images[]" accept="image/*" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        </div>
                                        <button type="button" style="
                                        margin-left: 1rem;
                                        background-color: #E11D48;
                                        padding-left: 1rem;
                                        padding-right: 1rem;
                                        padding-top: 0.5rem;
                                        padding-bottom: 0.5rem;
                                        border-radius: 0.375rem;
                                        transition: background-color 0.2s ease;
                                        margin-top: 22px;
                                        color: #fff;">Remove</button>
                                    </div>
                                    
                                </div>
                    
                                <button type="button" id="add-more">Add More</button>

                                <button type="submit" id="save">Save</button>
                            </form>
                            @if ($slider->count() > 0)
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"  style="width: 50%;display: flex;margin-top:20px;">
                                @foreach ($slider as $slide)
                                    <div class="relative border p-4 rounded bg-gray-100 slider-item" data-slide-id="{{ $slide->id }}">
                                        <!-- Close Button -->
                                        <button class="absolute top-2 right-2 text-red-500 hover:text-red-700" onclick="removeSlide({{$slide->id}})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                        
                                        <!-- Image Display -->
                                        <img src="{{ asset('/' . $slide->image) }}" alt="{{ $slide->title }}" class="w-full h-16 object-cover mx-auto rounded-md" style="height: 70px;width:140px">
                                        
                                        <!-- Title and Page Name -->
                                        <h4 class="text-sm font-semibold mt-2 text-center">{{ $slide->title }}</h4>
                                        <p class="text-xs mt-1 text-center">{{ $slide->page_name }}</p>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Pagination -->
                            <div class="mt-4">
                                {{ $slider->links() }}
                            </div>
                        @else
                            <p>No slider data available.</p>
                        @endif  
                        </div>
                        <div id="second" class="tab-content hidden p-4">
                            <div class="max-w-3xl mx-auto mt-6 p-6 bg-white rounded-lg shadow-lg">
                                <h2 class="text-2xl font-semibold mb-6">Add Team Member</h2>
                                
                                <form id="team-form" action="{{route('addteam')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                
                                    <!-- Name and Image in One Row -->
                                    <div class="mb-4 flex items-center">
                                        <!-- Team Member Name -->
                                        <div class="flex-1 mr-4">
                                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                            <input type="text" id="name" name="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        </div>
                                
                                        <!-- Team Member Image -->
                                        <div class="flex-1">
                                            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                            <input type="file" id="image" name="image" accept="image/*" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="mb-4 flex flex-wrap items-center">
                                        <!-- LinkedIn URL -->
                                        <div class="flex-1 mr-4 mb-4">
                                            <label for="linkedin" class="block text-sm font-medium text-gray-700">LinkedIn URL</label>
                                            <input type="url" id="linkedin" name="linkedin_link" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        </div>
                                
                                        <!-- Instagram URL -->
                                        <div class="flex-1 mb-4">
                                            <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram URL</label>
                                            <input type="url" id="instagram" name="instagram_link" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        </div>
                                    </div>
                                
                                    <div class="mb-4 flex flex-wrap items-center">
                                        <!-- Twitter URL -->
                                        <div class="flex-1 mr-4 mb-4">
                                            <label for="twitter" class="block text-sm font-medium text-gray-700">Twitter URL</label>
                                            <input type="url" id="twitter" name="twitter_link" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        </div>
                                
                                        <!-- Facebook URL -->
                                        <div class="flex-1 mb-4">
                                            <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook URL</label>
                                            <input type="url" id="facebook" name="facebook_link" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        </div>
                                    </div>
                                
                                    <!-- Skills Section -->
                                    <div id="skills-section" class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700">Skills</label>
                                
                                        <div class="skill-item flex items-center mb-2">
                                            <div class="flex-1">
                                                <input type="text" name="skills[0][name]" placeholder="Skill Name" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                            </div>
                                            <div class="flex-1 mx-4">
                                                <input type="number" name="skills[0][range]" placeholder="Range (0-100)" min="0" max="100" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                            </div>
                                            <button type="button" class="remove-skill bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">Remove</button>
                                        </div>
                                    </div>
                                
                                    <!-- Add More Skills Button -->
                                    <button type="button" id="add-skill" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mb-4">Add More</button>
                                
                                    <!-- Submit Button -->
                                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Save</button>
                                </form>
                            </div>
                        
                            @push('scripts')
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    let skillIndex = 1; // Start with 1 since the first skill is already in the form
                        
                                    // Add new skill input fields
                                    document.getElementById('add-skill').addEventListener('click', function () {
                                        const skillsSection = document.getElementById('skills-section');
                        
                                        const newSkill = document.createElement('div');
                                        newSkill.classList.add('skill-item', 'flex', 'items-center', 'mb-2');
                        
                                        newSkill.innerHTML = `
                                            <div class="flex-1">
                                                <input type="text" name="skills[${skillIndex}][name]" placeholder="Skill Name" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                            </div>
                                            <div class="flex-1 mx-4">
                                                <input type="number" name="skills[${skillIndex}][range]" placeholder="Range (0-100)" min="0" max="100" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                            </div>
                                            <button type="button" class="remove-skill bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">Remove</button>
                                        `;
                        
                                        skillsSection.appendChild(newSkill);
                                        skillIndex++;
                                    });
                        
                                    // Remove a skill input field
                                    document.getElementById('skills-section').addEventListener('click', function (e) {
                                        if (e.target.classList.contains('remove-skill')) {
                                            e.target.parentElement.remove();
                                        }
                                    });
                                });
                            </script>
                            @endpush
                        </div>
                        <div id="allteam" class="tab-content hidden p-4">
                          
                            @if ($teams->count() > 0)
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Image
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Skills
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($teams as $team)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $team->name }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}" class="h-16 w-16 object-cover rounded">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    @foreach ($team->skill as $skills)
                                                        <div>{{ $skills->name }} </div>
                                                    @endforeach
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    <a href="" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    <form id="teamdelete-{{ $team->id }}" action="{{ route('delete', $team->id)}}" method="POST" class="inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        
                                <!-- Pagination -->
                                <div class="mt-4">
                                    {{ $teams->links() }}
                                </div>
                            </div>
                            @else
                                <p>No  data available.</p>
                            @endif  
                        </div>
                        <div id="third" class="tab-content hidden p-4">
                            Content for Tab 3
                        </div>
                        <div id="fourth" class="tab-content hidden p-4">
                            <div class="">
                                <h1 class="text-2xl font-semibold mb-6 text-center">Create Blog</h1>
                            
                                @if (session('success'))
                                    <div class="text-green-500 mb-4">{{ session('success') }}</div>
                                @endif
                            
                                <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="title" class="block text-gray-700 font-bold">Title</label>
                                        <input type="text" id="title" name="title" class="w-full p-2 border border-gray-300 rounded mt-2" placeholder="Enter blog title" required>
                                        @error('title')
                                            <div class="text-red-500 mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="mainimage" class="block text-gray-700 font-bold">Feature Image</label>
                                        <input type="file" id="mainimage" name="featured_image" class="w-full p-2 border border-gray-300 rounded mt-2" placeholder="Upload Main Image" required>
                                        @error('featured_image')
                                            <div class="text-red-500 mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="mainimage" class="block text-gray-700 font-bold">Tags:</label>
                                        <input   name="tags" class="w-full p-2 border border-gray-300 rounded mt-2" placeholder="Enter Tags " required>
                                        @error('tags')
                                            <div class="text-red-500 mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="content" class="block text-gray-700 font-bold">Content</label>
                                        <textarea id="summernote" name="editordata"></textarea>
                                       
                                        @error('editordata')
                                            <div class="text-red-500 mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
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
                                        var input = document.querySelector('input[name=tags]');
            
                                        // initialize Tagify on the above input node reference
                                        new Tagify(input)
                                    </script>
                                    <button type="submit"  style="width: 100%; background-color: #3b82f6; color: white; padding-top: 0.5rem; padding-bottom: 0.5rem; border-radius: 0.375rem;">Create Blog</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
                @push('scripts')
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const tabsContainer = document.querySelector("#tabs");
                        const tabTogglers = tabsContainer.querySelectorAll("a");
                        const tabContents = document.querySelectorAll(".tab-content");
            
                        tabTogglers.forEach(toggler => {
                            toggler.addEventListener("click", function(e) {
                                e.preventDefault();
            
                                const targetTab = document.querySelector(this.getAttribute("href"));
            
                                tabContents.forEach(content => {
                                    if (content === targetTab) {
                                        content.classList.remove("hidden");
                                    } else {
                                        content.classList.add("hidden");
                                    }
                                });
            
                                tabTogglers.forEach(t => t.classList.remove("border-blue-500", "text-blue-500"));
                                this.classList.add("border-blue-500", "text-blue-500");
                            });
                        });
            
                        // Set default tab active
                        document.querySelector("#first").click();
                    });
                </script>
                @endpush
                @push('scripts')
                <script>
                    let fieldCount = 1;
            
                    // Function to add a new form field
                    function addField() {
                        fieldCount++;
                        const formFields = document.getElementById('form-fields');
                        const newField = document.createElement('div');
                        newField.className = 'form-field flex items-center mb-4';
                        newField.innerHTML = `
                            <div class="flex-1">
                                <label for="title-${fieldCount}" class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" id="title-${fieldCount}" name="titles[]" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div class="flex-1 ml-4">
                                <label for="image-${fieldCount}" class="block text-sm font-medium text-gray-700">Image</label>
                                <input type="file" id="image-${fieldCount}" name="images[]" accept="image/*" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <button type="button" class="ml-4 bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700" onclick="removeField(this)">Remove</button>
                        `;
                        formFields.appendChild(newField);
                    }
            
                    // Function to remove a form field
                    function removeField(button) {
                        button.parentElement.remove();
                    }
            
                    document.getElementById('add-more').addEventListener('click', addField);
                    function removeSlide(id) {
                       
                if (confirm('Are you sure you want to delete this slide?')) {
                    $.ajax({
                        type: 'post',
                        url: `/sliders/${id}`,
                        data: {
                            '_token': $('meta[name="csrf-token"]').attr('content') // Include CSRF token
                        },
                        success: function(response) {
                            if (response.success) {
                                // Remove the slider item from the DOM
                                var slide = $(`.slider-item[data-slide-id="${id}"]`);
                                if (slide.length > 0) {
                                    slide.remove(); // Remove the slider item from the DOM
                                    alert('Slide deleted successfully.');
                                } else {
                                    alert('Failed to find the slide in the DOM.');
                                }
                            } else {
                                alert('Failed to delete slide.');
                            }
                        },
                        error: function(xhr) {
                            console.error('Error:', xhr);
                            alert('An error occurred while deleting the slide.');
                        }
                    });
                }
            }
                
            
                </script>
              
       <script src="{{ asset('js/homesetting.js') }}"></script>
              
                @endpush
            
            </div>
            
            </div>
        
</x-layout>
