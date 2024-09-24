<!DOCTYPE html>
<html>
<head>
    <title>Edit a Blog Post</title>
</head>
<body>
    <form action="/blogs/{{ $user['id'] }}" method="POST">
        @csrf
        @method('PUT')
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" value="{{ $user['author'] }}"><br>
        <label for="blog_title">Blog Title:</label><br>
        <input type="text" id="blog_title" name="blog_title" value="{{ $user['blog_title'] }}"><br>
        <label for="blog_content">Blog Content:</label><br>
        <textarea id="blog_content" name="blog_content">{{ $user['blog_content'] }}</textarea><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
