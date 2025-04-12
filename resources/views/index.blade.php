<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Document</title>
</head>
<body class="bg-gray-100 min-h-screen p-6">
    <div class="max-w-6xl mx-auto space-y-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2">
            @foreach ($posts as $post)
                <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $post->title }}</h2>

                    <p class="text-gray-600 text-sm mb-4">
                        {{ $post->excerpt }}...
                    </p>

                    <span class="text-xs text-gray-500">
                        Publicado el {{ $post->published_at }}
                    </span>
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $posts->links('pagination::tailwind') }}
        </div>
    </div>
</body>


</html>
