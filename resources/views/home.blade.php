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
  <!-- dd({{$cates}}); -->
 <!-- <a href="/create">create</a> -->
 <a href="{{route('category.create')}}" class="btn btn-info">create</a>
  <h2>Categories</h2>
            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>action</th>
        <th>action</th>
        <th>action</th>
        <!-- <th>sort_wear</th>
        <th>other</th> -->
      </tr>
    </thead>
    <tbody>
    @foreach($cates as $cate)
      <tr>
        <td>{{$cate['id']}}</td>
        <td>{{$cate['name']}}</td>
        <!-- <td>
       <from style="display:inline;" method="POST" action="/delete/{{$cate['id']}}">
       @method('DELETE')
         @csrf 
     <button class="btn btn-secondary" type="submit">Delete</button>
      </form>
  </td>  -->
  <!-- <td></td> -->
<!-- @method('Delete');-->
<td><a href="/detais_cate/{{$cate['id']}}" class="btn btn-info mt-3">Show</a></td>
   <td>  <a href="/delete_cate/{{$cate['id']}}" class="btn btn-info">Delete</a></td> 
     <!-- <td>  <a href="/delete/{{$cate['id']}}" class="btn btn-secondary">Update</a></td>  -->
     <td>  <a href="/cate/{{$cate['id']}}/edit" class="btn btn-info">Update</a></td>
        </tr> 
      @endforeach   
    </tbody>
  </table>
</div>



</body>
</html>
