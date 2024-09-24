<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Info</title>
</head>
<body>
 <h2>User</h2>
 <h3><a href="blogs-create">Create Blog</a></h3>
<table>
    @foreach ($users as $user )
      <tr>
        <td>{{$user['author']}}</td>
        <td>{{$user['blog_title']}}</td>
        <td>{{$user['blog_content']}}</td>
        <td>{{$user['date_published']}}</td>
        <td><a href="blogs/{{$user['id']}}">View</a></td>
        <td><a href="blogs/{{$user['id']}}/edit">Edit</a></td>
    </tr>
    @endforeach
</table>




</body>
</html>
