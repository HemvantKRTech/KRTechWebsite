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
            <div class="container mx-auto px-4 py-8">
                <h1>All Comments</h1>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Name
                                </th>
                                <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Email
                                </th>
                                <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Comment
                                </th>
                                <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-50 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comment as $item)
                            <tr>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{$item->name}}
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{$item->email}}
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    {{$item->message}}
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                                    <div class="flex space-x-2">
                                        @if ($item->admin_approval == 1)
                                        <button class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 focus:outline-none" onclick="performAction('{{ $item->id }}', 'disapprove')">
                                            Disapprove
                                        </button>
                                        @else
                                        <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 focus:outline-none" onclick="performAction('{{ $item->id }}', 'approve')">
                                            Approve
                                        </button>
                                        @endif
                                        <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 focus:outline-none" onclick="performAction('{{ $item->id }}', 'delete')">
                                            Delete
                                        </button>
                                    </div>
                                    
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="{{ asset('js/comment.js') }}"></script>
    @endpush
</x-layout>
