<x-layout>
    @slot('title', 'AR Technology')
@include('Admin.navigation')
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
            /* width: 100%; */
            max-width: 20%;
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

    @push('scripts')
        
    @endpush
</x-layout>
