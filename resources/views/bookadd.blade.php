<!DOCTYPE html>
<html>
<head>
  <title>Add Book</title>
</head>
<body>

<h2>Add New Book</h2>

<form action="{{ route('book.store') }}" method="post">
  @csrf

  <label>Title:</label>
  <input type="text" name="title"><br><br>

  <label>Author:</label>
  <input type="text" name="author"><br><br>

  <label>Genre:</label>
  <input type="text" name="genre"><br><br>

  <button type="submit">Submit</button>
</form>

</body>
</html>
