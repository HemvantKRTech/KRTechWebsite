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
        .center{
            text-align: center;
        }
    </style>
    @endpush

    <div class="main">
        <div class="sidebar">
            @include('Admin.navigation')
        </div>
        <div class="content">
            <div class="container mx-auto px-4 py-8">
                <h1>All Services</h1>

                <!-- Display Success Message -->
                @if(session('success'))
                    <div class="alert alert-success mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Services Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-2 px-4 border-b">#</th>
                                <th class="py-2 px-4 border-b">Icon</th>
                                <th class="py-2 px-4 border-b">Name</th>
                                <th class="py-2 px-4 border-b">Slug</th>
                                <th class="py-2 px-4 border-b">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="center">
                            @forelse($services as $index=> $service)
                                <tr id="service{{$service->id}}">
                                    <td class="py-2 px-4 border-b">{{ $index +1}}</td>
                                    <td class="py-2 px-4 border-b" style="text-align: -webkit-center;">
                                        @if($service->icon)
                                            <img src="{{ asset('/storage/' . $service->icon) }}" alt="Icon" class="w-10 h-10 rounded-full">
                                        @else
                                            <span>No Icon</span>
                                        @endif
                                    </td>
                                    <td class="py-2 px-4 border-b">{{ $service->service_name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $service->slug }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <!-- Edit Button -->
                                        {{-- <a href="" class="inline-block px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                                            Edit
                                        </a> --}}

                                        <!-- Delete Button -->
                                        
                                            <a href="#" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600" onclick="deleteservice({{$service->id}})">
                                                Delete
                                            </a>
                                        
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-2 px-4 text-center">No services available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
    function deleteservice(id) {
        // Define the URL based on the action and ID
        const url = `/deleteservice/${id}`;
    
        // Perform AJAX request
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // CSRF token
            },
            body: JSON.stringify({}) // Send empty body as we don't need additional data
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Toastify({
                    text: data.message,
                    duration: 3000,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "#28a745", // Green background for success
                    },
                }).showToast();

            } else {
                Toastify({
                    text: 'Operation failed: ' + data.message,
                    duration: 3000,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "#dc3545", // Red background for failure
                    },
                }).showToast();
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    }
</script>
    @endpush
</x-layout>
