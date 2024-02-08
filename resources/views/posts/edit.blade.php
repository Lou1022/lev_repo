<!DOCTYPE html>
<http>
    <head>
        <meta charset="utf-8">
        <title>MyBlog</title>
        <style>
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
            }
            .three {
                margin: 0%;
                padding: 3px;
            }
            .toback{
                padding: 2%;
                padding-left: 0;
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
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <h5 class="three">Title</h5>
                <input type="text" name="post[title]" value="{{ $post->title }}" />
                <p style="color:red">{{ $errors->first('post.title')}}</p>
            </div>
            <div>
                <h5 class="three">Body</h5>
                <textarea name="post[body]" cols="100" rows="50">{{ $post->body }}</textarea>
                <p style="color:red">{{ $errors->first('post.body')}}</p>
            </div>
            <input type="submit" value="保存" />
        </form>
        <div class="toback">
            <a href="/">Back</a>
        </div>
    </body>