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
            @if (Session::has('message'))
            <script type="text/javascript">
                Toastify({
                    text: 'Team Update successfully',
                    duration: 3000,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "#28a745", // Green background for success
                    },
                }).showToast();
            </script>
        @endif
            <div id="second" class="tab-content p-4">
                <div class="max-w-3xl mx-auto mt-6 p-6 bg-white rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold mb-6">Edit Team Member</h2>
                    
                    <form id="team-form" action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                    
                        <!-- Name and Image in One Row -->
                        <div class="mb-4 flex items-center">
                            <!-- Team Member Name -->
                            <div class="flex-1 mr-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" id="name" value="{{ old('name', $team->name) }}" name="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                    
                            <!-- Team Member Image -->
                            <div class="flex-1">
                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                @if ($team->image)
                                    <img src="{{ asset('storage/' . $team->image) }}" alt="Team Member Image" class="w-32 h-32 object-cover mb-2">
                                @endif
                                <input type="file" id="image" name="image" accept="image/*" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>
                    
                        <div class="mb-4 flex flex-wrap items-center">
                            <!-- LinkedIn URL -->
                            <div class="flex-1 mr-4 mb-4">
                                <label for="linkedin" class="block text-sm font-medium text-gray-700">LinkedIn URL</label>
                                <input type="url" id="linkedin" value="{{ old('linkedin_link', $team->linkedin_link) }}" name="linkedin_link" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                    
                            <!-- Instagram URL -->
                            <div class="flex-1 mb-4">
                                <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram URL</label>
                                <input type="url" id="instagram" value="{{ old('instagram_link', $team->instagram_link) }}" name="instagram_link" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>
                    
                        <div class="mb-4 flex flex-wrap items-center">
                            <!-- Twitter URL -->
                            <div class="flex-1 mr-4 mb-4">
                                <label for="twitter" class="block text-sm font-medium text-gray-700">Twitter URL</label>
                                <input type="url" id="twitter" value="{{ old('twitter_link', $team->twitter_link) }}" name="twitter_link" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                    
                            <!-- Facebook URL -->
                            <div class="flex-1 mb-4">
                                <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook URL</label>
                                <input type="url" id="facebook" value="{{ old('facebook_link', $team->facebook_link) }}" name="facebook_link" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>
                    
                        <!-- Skills Section -->
                        <div id="skills-section" class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Skills</label>
                    
                            @foreach ($team->skill as $index => $skills)
                                <div class="skill-item flex items-center mb-2">
                                    <div class="flex-1">
                                        <input type="text" name="skills[{{ $index }}][name]" value="{{ old('skills.' . $index . '.name', $skills->name) }}" placeholder="Skill Name" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    </div>
                                    <div class="flex-1 mx-4">
                                        <input type="number" name="skills[{{ $index }}][range]" value="{{ old('skills.' . $index . '.range', $skills->range) }}" placeholder="Range (0-100)" min="0" max="100" required class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    </div>
                                    <button type="button" style="background: red" class="remove-skill bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">Remove</button>
                                </div>
                            @endforeach
                        </div>
                    
                        <!-- Add More Skills Button -->
                        <button type="button" id="add-skill" style="background: rgb(5, 142, 41)" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mb-4">Add More</button>
                    
                        <!-- Submit Button -->
                        <button type="submit" style="background: rgb(0, 153, 255)" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Save</button>
                    </form>
                </div>
            </div>
            
            @push('scripts')
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    let skillIndex = {{ $team->skill->count() }}; // Start with the number of existing skills
            
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
                            <button type="button"  style="background: red" class="remove-skill bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">Remove</button>
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
    </div>

    @push('scripts')
   
    @endpush
</x-layout>
