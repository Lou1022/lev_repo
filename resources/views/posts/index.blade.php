<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyBlog</title>
        <style>
            .post{
                width: 65%;
                height: 400px;
                margin: 5px;
                align-self: center;
                border: 2px solid black;
            }
            header {
                padding: 0%;
                width: 100%;
                text-align: center;
            }
            .one {
                text-align: center;
                color: brown;
            }
            .two {
                text-align: left;
                border-top: 3px solid black;
                border-bottom: 3px solid black;
                margin: 5px;
                align: center;
            }
            .three {
                margin: 0%;
                padding: 3px;
            }
            #box{
                padding-left: 10px;
                padding-right: 10px;
                display: inline-block;
            }
            body {
                background-color: aqua;
                padding: 0%;
                margin: 0%;
            }
        </style>
    </head>
    <body>
        <header>
            <h1 class = "one">Blog Name</h1>
            <div class = "two">
                <h5 id = "box"><a href="/">Home</a></h5>
                <h5 id = "box"><a href='/posts/create'>Create</a></h5>
            </div>
        </header>
        <div>
            @foreach ($posts as $post)
                <div class = "post">
                    <a href="/posts/{{ $post->id }}">
                        <h5  class = three>{{ $post->title }}</h5>
                    </a>
                    <p1>{{ $post->body }}</p1>
                </div>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                </form>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>