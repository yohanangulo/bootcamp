<h1>Estas editando el post {{$slug}}</h1>
<form action="/post/{{$slug}}" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">
    <input type="submit" value="Create">
</form>