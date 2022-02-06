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
    <form method="POST" action="/article/save">
    @csrf
    <!-- @method('PUT'); -->      
    <!-- ID: <input type="text" name="id"> -->
    Name: <input type="text" name="name">
    details: <input type="text" name="details">
    slug: <input type="text" name="slug">
    cate_id: <input type="text" name="cate_id">   
        <button>Submit</button>
    </form>
</div>

</body>
</html>
