<!DOCTYPE html>
<html lang="en">
<head>
  <title> First Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3"> 


  <h2>Articles</h2>
  <a href="/create_article" class="btn btn-info mb-3">create new article</a>  
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>details</th>
        <th>slug</th>
        <th>category_id</th>
        <th>is_used</th>
        <th>action</th>
        <th>action</th>
        <th>action</th>
        <!-- <th>sort_wear</th>
        <th>other</th> -->
      </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
      <tr>
        <td>{{$article['id']}}</td>
        <td>{{$article['name']}}</td>  
        <td>{{$article['details']}}</td>     
        <td>{{$article['slug']}}</td>  
        <td>{{$article['cate_id']}}</td>   
        <td>{{$article['is_used']}}</td>  
        <td><a href="/detais_artic/{{$article['id']}}" class="btn btn-info">Show</a></td>   
   <td> <a href="/delete_article/{{$article['id']}}" class="btn btn-info">Delete</a></td>     
    <td> <a href="/article/{{$article['id']}}/edit" class="btn btn-info">Update</a></td>
        </tr> 
      @endforeach   
    </tbody>
  </table>
</div>
</body>
</html>