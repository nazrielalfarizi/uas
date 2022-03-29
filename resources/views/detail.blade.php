<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
body{
    background: white;
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: auto;
}
.cards{
    width: 500px;
    height: 400px;
    background: white;
    border-radius: 20px;
    margin-bottom: 170px;
    box-shadow: inset 0 0 0 0 goldenrod;
    transition: ease-out 1s;
}
.head{
    background-color: white ;
    line-height: 10%;
    border-radius: 20px 20px 0 0;
}
.body{
    font-size: 30px;
    font-weight: 700;
    line-height: 150px;
    text-align: center;
}
.body span{
    font-size: 12px;
    font-weight: 300;
}
.cards1{
    width: 450px;
    height: 200px;
    background: yellow;
    border-radius:10px;
    margin-top:30px;
    margin-bottom: 170px;
    box-shadow: inset 0 0 0 0 goldenrod;
    transition: ease-out 1s;
}
.price{
    font-size:30px;
    margin-top:40px;
}
.booking{
    text-align:left;
}
.batal{
 background-color: red;
  color: white;
  padding: 14px 10px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float :right;
}
.batal2{
    color:white;
    text-decoration:none;
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
<button class="input"><a href="/edit/{{ $item->id }}" class="input">Edit</a></button>
<button class="batal"><a class="batal2" href="/delete/{{ $item->id }}">Delete</a></button>
</div>
<div class="container">
        <div class="cards">
            <div class="head">
                <center>
                <h3>{{ $item -> nama_hotel }}</h3><br>
                <p>{{ $item -> location }}</p>
                <img src="{{ asset('/image/'.$item->image) }}" alt="" style="width: 500px; height:300px;">
                </center>
                <h4>About the Hotel</h4>
                <p>{{ $item -> synopsis }}</p>
                <h4>Facilitate</h4>
                <p>{{ $item -> fasilitas }}</p>
            </div>
        </div>
    </div>
</body>

</html>