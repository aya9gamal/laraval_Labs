<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
<p>Create article page</p>
    <form method="POST" action="/edit_article/{{$article['id']}}">
    @csrf
    <input type="hidden" name="id" value="{{$article['id']}}">
        Name: <input type="text" name="name" value="{{$article['name']}}">
        details: <input type="text" name="details" value="{{$article['details']}}">
        slug: <input type="text" name="slug" value="{{$article['slug']}}">
        cate_id: <input type="text" name="cate_id" value="{{$article['cate_id']}}">
        is_used: <input type="text" name="is_used" value="{{$article['is_used']}}">
        <button>update</button>
    </form>
</div>

</body>
</html>
