<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>blog</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  </head>
  <body>
      <h1>Blog name</h1>
      <div class='posts'>
        @foreach ($posts as $post)
        <div class='post'>
          <h2 class='title'>{{ $post->title }}</h2>
          <p class='body'>{{ $post->body }}</p>
        </div>
        @endforeach
      </div>
      <div class='paginate'>{{$posts->links()}}</div>
  </body>
</html>