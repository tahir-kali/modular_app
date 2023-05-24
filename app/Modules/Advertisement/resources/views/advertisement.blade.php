<!-- index.blade.php -->

<html>
<head>
    <title>Modular App</title>
</head>
<body>
<h1>Create Ad</h1>
<form method="POST" action="/ads">
    @csrf
    <input type="text" name="title" placeholder="Title"><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <input type="number" name="price" placeholder="Price"><br>

    <button type="submit">Create</button>
</form>
<h1>Advertisements</h1>

@foreach($ads as $key => $ad)
    <div class="ad">
        <h3>{{ intval($key+1).'math '.$ad->title }}</h3>
        <p>{{ $ad->description }}</p>
        <p>{{ $ad->price }}</p>
        <p>{{ $ad->is_active===1?"Active":"InActive" }}</p>
        <div class="row">
            <a href="{{ route('advertisement.edit', $ad->id) }}">Edit</a>
            <form method="POST" action="/ads/{{ $ad->id }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>

@endforeach


<style>
  .ad {
    border: 1px solid grey;
    padding: 10px;
    margin-block: 5px;
    border-radius: 10px;
  }

  .row {
    display: flex;
  }
</style>
</body>
</html>
