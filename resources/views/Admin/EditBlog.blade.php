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
            @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border: 1px solid #c3e6cb; border-radius: 5px; position: relative; display: flex; align-items: center; justify-content: space-between;" role="alert">
                {{ session('success') }}
                <button type="button" style="background: none; border: none; font-size: 20px; line-height: 1; color: #155724; cursor: pointer; margin-left: 15px;" onclick="this.parentElement.style.display='none';" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        
            <div id="second" class="tab-content p-4">
                <div class="max-w-3xl mx-auto mt-6 p-6 bg-white rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold mb-6">Edit Team Member</h2>
                    
                    <form action="{{route('update.blog',$blog->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Method override for PUT -->
                    
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 font-bold">Title</label>
                            <input type="text" id="title" name="title" value="{{ old('title', $blog->title) }}" class="w-full p-2 border border-gray-300 rounded mt-2" placeholder="Enter blog title" required>
                            @error('title')
                                <div class="text-red-500 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="mb-4">
                            <label for="mainimage" class="block text-gray-700 font-bold">Feature Image</label>
                            <input type="file" id="mainimage" name="featured_image" class="w-full p-2 border border-gray-300 rounded mt-2" placeholder="Upload Main Image">
                            @if ($blog->featured_image)
                                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}" class="small-image mt-2">
                            @endif
                            @error('featured_image')
                                <div class="text-red-500 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="mb-4">
                            <label for="tags" class="block text-gray-700 font-bold">Tags:</label>
                            <input type="text" id="tags" name="tags" value="{{ old('tags', $blog->tags) }}" class="w-full p-2 border border-gray-300 rounded mt-2" placeholder="Enter Tags" required>
                            @error('tags')
                                <div class="text-red-500 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="mb-4">
                            <label for="content" class="block text-gray-700 font-bold">Content</label>
                            <textarea id="summernote" name="editordata">{{ old('editordata', $blog->description) }}</textarea>
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
                            new Tagify(input);
                        </script>
                    
                        <button type="submit" style="width: 100%; background-color: #3b82f6; color: white; padding-top: 0.5rem; padding-bottom: 0.5rem; border-radius: 0.375rem;">Update Blog</button>
                    </form>
                    
                </div>
            </div>
            
            @push('scripts')
            {{-- <script>
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
            </script> --}}
            @endpush
        </div>
    </div>

    @push('scripts')
   
    @endpush
</x-layout>
