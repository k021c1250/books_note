<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Books_note</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Books_note</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                     <h3 class='note_names'>ほんのなまえ</h3>
                    <h2 class='title'>{{ $post->book_id }}</h2>
                    <p class='bodys'>本文</p>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>