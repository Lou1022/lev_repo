<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyBlog</title>
        <style>
            .post{
                padding-bottom: 30px;
                width: 65%;
                height: auto;
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
            }
            .three {
                margin: 0%;
                padding: 3px;
            }
            #box{
                padding-left: 10px;
                padding-right: 10px;
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
            <h1 class = one>Blog Name</h1>
            <div class = two>
                <h5 id = box>Home</h5>
            </div>
        </header>
            <div class = post>
                <h5  class = three>
                    {{ $post->title }}
                </h5>
                <p1>{{ $post->body }}</p1>
            </div>
            <div>
                <a href="/">戻る</a>
            </div>
    </body>
</html>