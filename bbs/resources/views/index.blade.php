<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>hello bbs</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>hello bbs</h1>
        <p>{{ $message }}</p>
        @foreach ($articles as $article)
            <p>
            <a href='{{ route("article.show", ["id" =>  $article->id]) }}'>
                    {{ $article->content }},
                    {{ $article->user_name }}
                </a>
            </p>
        @endforeach
    </body>
</html>