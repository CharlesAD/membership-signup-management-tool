<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Membership Form</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles <!-- Livewire Styles -->
</head>
<body class="bg-[#FDEB19] font-sans antialiased">

    <!-- Header -->
    <header class="bg-[#FDEB19] text-black p-6 shadow-md flex border-b-4 border-black">            <!-- Logo -->
        <img src="{{ asset('C6 logo.png') }}" alt="Logo" class="h-8 md:h-10 lg:h-12 max-h-20 w-auto">
    </header>

    <!-- Main Content -->
    <main class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-[#00CCFF] border-4 border-black shadow-md p-6">
            <h1 class="text-3xl font-bold text-black">Membership Form</h1>

                <h2 class="text-xl font-semibold text-black mb-4">Join Our Membership</h2>

                <!-- Include the Livewire MembershipForm Component -->
                <livewire:membership-form />
                
                <!-- Placeholder Note -->
                <p class="text-sm text-black mt-4">
                    Have questions? Contact us at <a href="mailto:support@example.com" class="text-blue-600 hover:underline">support@example.com</a>.
                </p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#FDEB19] p-4 text-center mt-10 border-t-4 border-black fixed bottom-0 left-0 w-full">
        <div class="text-center">
            <p>&copy; {{ date('Y') }} Membership Form. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    @livewireScripts <!-- Livewire Scripts -->
</body>
</html>