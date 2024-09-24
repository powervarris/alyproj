<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Details</title>
</head>

<body>
<div>
    <h2>User Details</h2>
    <table>
        <tr>
            <th>Author</th>
            <td>{{$user['author']}}</td>
        </tr>
        <tr>
            <th>Blog Title</th>
            <td>{{$user['blog_title']}}</td>
        </tr>
        <tr>
            <th>Short Description</th>
            <td>{{$user['blog_content']}}</td>
        </tr>
        <tr>
            <th>Date Published</th>
            <td>{{$user['date_published']}}</td>
        </tr>
    </table>
</div>
</body>
