<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MWECAU | 404 - Page Not Found</title>
    {{-- tailwind for --}}
    {{-- @vite('resources/css/app.css') --}}

    {{-- Tailwind for production --}}
    <link rel="stylesheet" href="https://www.mwecau.ac.tz/build/assets/app-CPH6n9WF.css">
    {{-- Optional: Google Fonts for typography --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        /* Custom animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-900 via-indigo-900 to-gray-800 flex items-center justify-center min-h-screen">
    <div class="container mx-auto text-center p-5">
        <div
            class="max-w-md mx-auto bg-gray-800/80 backdrop-blur-md text-white p-10 rounded-3xl shadow-2xl border border-gray-700/50">
            <!-- Logo with subtle animation -->
            <img src="{{ asset('img/mwecau.png') }}" alt="MWECAU Logo" class="w-28 mx-auto mb-8 animate-float">

            <!-- 404 with gradient text -->
            <h1
                class="text-8xl font-extrabold bg-gradient-to-r from-red-500 via-pink-500 to-purple-500 text-transparent bg-clip-text">
                404</h1>

            <!-- Subtitle with refined typography -->
            <h4 class="text-2xl font-semibold mt-6 text-gray-200">Page Not Found</h4>
            <p class="mt-4 text-gray-400 leading-relaxed">It seems we’ve hit a dead end. The page you’re looking for
                doesn’t exist or has been moved.</p>

            <!-- Call-to-action button -->
            <a href="/"
                class="mt-8 inline-block px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-full shadow-md transition-all duration-300">
                Return Home
            </a>
        </div>

        <!-- Footer (optional) -->
        <footer class="mt-10 text-gray-500 text-sm">
            &copy; {{ date('Y') }} MWECAU. All rights reserved.
        </footer>
    </div>
</body>

</html>
