<!DOCTYPE html>
<html>
<head>
  <title>Edit Book</title>
</head>
<body>

<h2>Edit Book</h2>

<form action="{{ route('book.update') }}" method="post">
  @csrf

  <label>Title:</label>
  <input type="text" name="title" value="Harry Potter"><br><br>

  <label>Author:</label>
  <input type="text" name="author"><br><br>

  <label>Genre:</label>
  <input type="text" name="genre"><br><br>

  <button type="submit">Update</button>
</form>

</body>
</html>