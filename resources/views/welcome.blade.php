<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyein's Blog</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar Section -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <a href="/" class="text-xl font-bold text-gray-900 flex items-center space-x-2">
                    <span>📖</span>
                    <span>Nyein's Blog</span>
                </a>
            </div>

            <nav class="hidden md:flex space-x-8 text-sm font-medium text-gray-600">
                <a href="/" class="text-amber-700 font-semibold">Home</a>
                <a href="#posts" class="hover:text-amber-700">All Posts</a>
<a href="{{ route('categories') }}" class="hover:text-amber-700">Categories</a>            </nav>

            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ route('posts.create') }}" class="px-4 py-2 text-sm font-medium text-white bg-amber-700 rounded-lg hover:bg-amber-800 transition shadow-sm">
                        + Create Post
                    </a>
                    <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-gray-700 hover:text-amber-700">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-sm font-medium text-red-600 hover:text-red-800">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-amber-700">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-medium text-white bg-amber-700 rounded-lg hover:bg-amber-800 transition">
                        Register
                    </a>
                @endauth

            </div>

        </div>
        
    </header>

    <!-- Hero Section (Home Page ကို ဝင်လိုက်ချင်း ပေါ်မည့် ကြိုဆိုရေးသားချက် - Posts တွေ တန်းမပေါ်စေရန်) -->
    <section class="bg-amber-50 py-16 border-b border-amber-100">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Welcome to Nyein's Blog 🚀</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-6">
                Explore interesting stories, tutorials, thoughts, and daily updates shared by our community.
            </p>
            <a href="#posts" class="inline-block px-6 py-3 bg-amber-700 text-white font-semibold rounded-xl shadow hover:bg-amber-800 transition">
                Explore All Posts &darr;
            </a>
        </div>
    </section>

    <!-- Main Content (All Posts Section) -->
    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="mb-8 flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Latest Blog Posts</h2>
                <p class="text-gray-500 text-sm mt-1">Check out what's new and trending.</p>
            </div>
        </div>

        <!-- Posts Grid -->
        <div id="posts" class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($posts as $post)
            <div class="blog-card bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100 flex flex-col justify-between">
                <div>
                    <img src="{{ $post->image }}" alt="Post Image" class="w-full h-30 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $post->title }}</h3>
                        <p class="text-xs text-gray-400 mb-3">Nyein • {{ optional($post->created_at)->format('M, Y') }}</p>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $post->body }}</p>
                    </div>
                </div>
                
                <div class="p-5 pt-0">
                    <a href="/posts/{{ $post->id }}" class="inline-block px-4 py-2 bg-amber-100 text-amber-800 text-xs font-semibold rounded-lg hover:bg-amber-200 transition">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('posts.show', $post->id) }}">
    {{ $post->title }}
</a>
    </main>
<!-- Footer Section -->
<footer class="bg-black boder-t border-gray-100 py-8 mt-16">
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