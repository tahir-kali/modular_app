<html>
<head>
    <title>Modular App</title>
</head>
<body>
<h1>Advertisement</h1>
@foreach($ads as $key=>$ad)
    <div class="ad">
        <h3>{{intval($key+1).'. '.$ad->title}}</h3>
        <p>{{$ad->description}}</p>
    </div>
@endforeach
<style>
    .ad{
        border:1px solid grey;
        padding:10px;
        margin-block:5px;
        border-radius: 10px;
    }
</style>
</body>
</html>
