<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

    <div class="max-w-2xl mx-auto px-6 py-12">
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
            <h1 class="text-2xl font-bold text-gray-900 mb-6">Create a New Post</h1>

            <!-- Form Start -->
            <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Title -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none">
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image URL -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Image URL</label>
                    <input type="text" name="image" value="{{ old('image') }}" placeholder="https://example.com/image.jpg" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none">
                    @error('image')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Body Content -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                    <textarea name="body" rows="6" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none">{{ old('body') }}</textarea>
                    @error('body')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex justify-end space-x-4">
                    <a href="/" class="px-5 py-2 bg-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-300 transition">Cancel</a>
                    <button type="submit" class="px-5 py-2 bg-amber-600 text-white font-semibold rounded-lg hover:bg-amber-700 transition">Publish Post</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>