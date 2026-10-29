<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - Nyein's Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
    <main class="max-w-3xl mx-auto px-6 py-12">
        <a href="/" class="text-amber-700 hover:underline mb-6 inline-block">&larr; Back to Home</a>

        <article class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 space-y-6">
            <h1 class="text-3xl font-bold text-gray-900">{{ $post->title }}</h1>
            
            @if($post->image)
                <img src="{{ $post->image }}" alt="Post Image" class="w-full h-80 object-cover rounded-xl">
            @endif

            <div class="text-gray-700 leading-relaxed whitespace-pre-line">
                {{ $post->body }}
            </div>

            <!-- Login ဝင်ထားမှသာ မြင်ရမည့် Edit နှင့် Delete ခလုတ်များ -->
            @auth
                <div class="flex space-x-4 pt-6 border-t border-gray-100 mt-6">
                    <!-- Edit Button -->
                    <a href="{{ route('posts.edit', $post->id) }}" class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-lg hover:bg-blue-700 transition">
                        Edit Post
                    </a>

                    <!-- Delete Button -->
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white text-sm font-semibold rounded-lg hover:bg-red-700 transition">
                            Delete Post
                        </button>
                    </form>
                </div>
            @endauth
        </article>
    </main>
</body>
</html>