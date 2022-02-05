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
  <h2>Categories</h2>
            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Phones</th>
        <th>watch</th>
        <th>sort_wear</th>
        <th>other</th>
      </tr>
    </thead>
    <tbody>
    @foreach($categes as $cate)
      <tr>
        <td>{{$cate[0]}}</td>
        <td>{{$cate[1]}}</td>
        <td>{{$cate[2]}}</td>
        <td>{{$cate[3]}}</td>
             </tr> 
      @endforeach   
    </tbody>
  </table>
</div>

<div class="container mt-3">
  <h2>Products</h2>
            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
      <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['name']}}</td>
        <td>{{$product['price']}}</td>
        <td><a href="/product_dtails/{{$product['id']}}" class="btn btn-secondary" >Details</a></td>
      </tr> 
      @endforeach   
    </tbody>
  </table>
</div>

</body>
</html>
