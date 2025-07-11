<!DOCTYPE html>
<html>
<head>
  <title>Book List</title>
</head>
<body>

<h2>Books Table</h2>

<a href="{{ route('book.add') }}">Add New Book</a>
<br><br>

<table border="1">
  <tr>
    <th>Title</th>
    <th>Author</th>
    <th>Genre</th>
    <th>Actions</th>
  </tr>
  <tr>
    <td>Harry Potter</td>
    <td>J.K. Rowling</td>
    <td>Fantasy</td>
    <td>
      <a href="{{ route('book.edit') }}">Edit</a>
      <button>Delete</button>
    </td>
  </tr>
  <tr>
    <td>The Alchemist</td>
    <td>Paulo Coelho</td>
    <td>Adventure</td>
    <td>
      <button>Edit</button>
      <button>Delete</button>
    </td>
  </tr>
</table>

</body>
</html>
