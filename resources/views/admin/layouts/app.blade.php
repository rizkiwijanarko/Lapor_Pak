<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


    <title>@yield('title', 'My Application')</title>
</head>

<body>
    <div class="flex h-screen overflow-hidden font-['Poppins']">
        {{-- <include src="./partials/sidebar.html"></include> --}}
        @include('admin.layouts.sidebar')

        <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
            {{-- <include src="./partials/header.html" /> --}}
            @include('admin.layouts.header')
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    {{-- <script src="https://cdn.datatables.net/2.1.5/js/dataTables.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js"></script>
    @yield('scripts')
    <script src="{{ asset('app.js') }}"></script>
</body>

</html>
