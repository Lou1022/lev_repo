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
        <form action="/posts" method="POST">
            @csrf
            <div>
                <h5 class="three">Title</h5>
                <input tyoe="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}" />
                <p style="color:red">{{ $errors->first('post.title')}}</p>
            </div>
            <div>
                <h5 class="three">Body</h5>
                <textarea name="post[body]" placeholder="？お疲れさまでした" value="{{ old('post.body') }}" cols="100" rows="50"></textarea>
                <p style="color:red">{{ $errors->first('post.body')}}</p>
            </div>
            <div class="category">
                <h5>Category</h5>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="保存" />            
        </form>
        <div class="toback">
            <a href="/">Back</a>
        </div>
    </body>