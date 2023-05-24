<html>
<head>
    <title>
        Edit
    </title>
</head>
<body>
<h1>Edit Add</h1>
<form method="PUT" action="/advertisement/{{ $ad->id }}/update">
    <input type="text" name="title" value="{{$ad->title}}" /><br />
    <input type="text" name="description" value="{{$ad->description}}" /><br />
    <input type="number" name="price" value="{{$ad->price}}" /><br />
    <input type="submit" value="Update" />
</form>
</body>
</html>
