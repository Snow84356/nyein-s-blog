@auth
    <div class="flex space-x-4 mt-6">
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