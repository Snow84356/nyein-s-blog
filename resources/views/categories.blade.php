<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Nyein's Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-gray-900 flex items-center space-x-2">
                <span>📖</span>
                <span>Nyein's Blog</span>
            </a>
            <nav class="hidden md:flex space-x-8 text-sm font-medium text-gray-600">
                <a href="/" class="hover:text-amber-700">Home</a>
                <a href="/#posts" class="hover:text-amber-700">All Posts</a>
                <a href="{{ route('categories') }}" class="text-amber-700 font-semibold">Categories</a>
            </nav>
            <a href="/" class="text-sm font-medium text-amber-700 hover:underline">&larr; Back to Home</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Blog Categories</h1>
            <p class="text-gray-500 text-sm mt-1">Browse posts by different topics and categories.</p>
        </div>

        <!-- Categories List Grid (ယာယီ အမျိုးအစားများ) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900 mb-2">💻 Technology & AI</h3>
                <p class="text-gray-600 text-sm">Explore tutorials, coding tips, and AI animation updates.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900 mb-2">🎨 Design & Art</h3>
                <p class="text-gray-600 text-sm">Discover creative inspiration, UI designs, and stories.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900 mb-2">✨ Lifestyle & Daily</h3>
                <p class="text-gray-600 text-sm">Read personal notes, daily thoughts, and community updates.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900 mb-2">💻 Technology & AI</h3>
                <p class="text-gray-600 text-sm">Explore tutorials, coding tips, and AI animation updates.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900 mb-2">🎨 Design & Art</h3>
                <p class="text-gray-600 text-sm">Discover creative inspiration, UI designs, and stories.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900 mb-2">✨ Lifestyle & Daily</h3>
                <p class="text-gray-600 text-sm">Read personal notes, daily thoughts, and community updates.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900 mb-2">💻 Technology & AI</h3>
                <p class="text-gray-600 text-sm">Explore tutorials, coding tips, and AI animation updates.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900 mb-2">🎨 Design & Art</h3>
                <p class="text-gray-600 text-sm">Discover creative inspiration, UI designs, and stories.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900 mb-2">✨ Lifestyle & Daily</h3>
                <p class="text-gray-600 text-sm">Read personal notes, daily thoughts, and community updates.</p>
            </div>
        </div>
    </main>
<!-- Footer Section -->
<footer class="bg-black border-t border-gray-100 py-8 mt-16">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
        <div class="flex items-center space-x-2">
            <span class="text-lg">📖</span>
            <span class="font-bold text-gray-900">Nyein's Blog</span>
        </div>
        <p class="text-sm text-gray-500">
            &copy; {{ date('Y') }} Nyein's Blog. All rights reserved. Built with Laravel 10 & Tailwind CSS.
        </p>
        <div class="flex space-x-6 text-sm text-gray-600">
            <a href="/" class="hover:text-amber-700">Home</a>
            <a href="/#posts" class="hover:text-amber-700">Posts</a>
            <a href="{{ route('categories') }}" class="hover:text-amber-700">Categories</a>
        </div>
    </div>
</footer>
</body>
</html>