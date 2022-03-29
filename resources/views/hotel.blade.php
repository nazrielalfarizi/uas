<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url('/image/c.avif');
  width: 100%;
  display: inline-block;
  background-size: cover;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
h4{
  margin-top:5px;
  margin-bottom:1px;
}
p{
  line-height:40%;
  margin-left:30px;
}
.input {
  background-color: #4CAF50;
  color: white;
  padding: 3px 10px;
  margin: 8px 0;
  margin-right:2px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration:none;
  float:right;
}
</style>
</head>
<body>

<div class="topnav">
  <a >Hotelio</a>
  <a href="/home">Home</a>
  <a href="/hotel">Hotels</a>
</div>

<div style="padding-left:16px">
  
</div>
<div class="wrapper flex-container">
      <!-- MAIN CONTAINER -->
      <section class="container" style="margin-top:30px; margin-left:40px;">
        <div class="location" id="home" style="display:flex;">
            @foreach ($items as $item)
            <div class="box">
              <a href="/detail/{{ $item->id }}"><img src="{{ asset('/image/'.$item->image) }}" alt="" style="width: 200px; height:300px; margin-left:30px;"></a>
              <p><b>{{ $item -> nama_hotel }}</b></p>
              <p>{{ $item -> location }}</p>
              <p><b>${{ $item -> price }}</b>/nights</p>
            </div>
            @endforeach
        </div>
    </div>

    <button class="input"><a href="add" class="input">Add</a></button>
</body>
</html>