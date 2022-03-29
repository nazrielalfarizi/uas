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
    background-image:url(../assets/background3.jpg);
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.input[type=submit]:hover {
  background-color: #45a049;
}

.batal{
 background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.batal2{
    color:white;
    text-decoration:none;
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
@csrf
<center>
  <h2>Input Data Hotel</h2>
    <form action="{{ url('update', $item -> id) }}" method="post" enctype="multipart/form-data">
        @csrf
       <table>
           <tr>
               <td>Nama Hotel</td>
               <td><input type="text" name="nama_hotel" value="{{ $item -> nama_hotel }}">
           </tr>
           <tr>
               <td>Lokasi </td>
               <td><input type="text" name="location" value="{{ $item -> location }}"></td>
           </tr>
           <tr>
               <td>Harga per Malam</td>
                <td><input type="number" name="price" value="{{ $item -> price }}"></td>
           </tr>
           <tr>
               <td>Image</td>
               <td><input type="file" name="image" value="{{ asset('/image/'. $item -> image) }}"></td>
           </tr>
           <tr>
                <td>Fasilitas</td>
                <tr>
                                    <td>
                                            <input type="checkbox" value="Shower" name="fasilitas" @if ($item -> fasilitas == 'Shower') {{ 'checked' }}
                                            @endif>
                                            <label >Shower</label>
                                    </td>
                                    <td>
                                            <input type="checkbox" value="Wifi" name="fasilitas" @if ($item -> fasilitas == 'Wifi') {{ 'checked' }}
                                            @endif>
                                            <label >Wifi</label>
                                    </td>
                                    <td>
                                            <input type="checkbox" value="Pool" name="fasilitas" @if ($item -> fasilitas == 'Pool') {{ 'checked' }}
                                            @endif>
                                            <label >Pool</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                            <input type="checkbox" value="Double Bed" name="fasilitas" @if ($item -> fasilitas == 'Double Bed') {{ 'checked' }}
                                            @endif>
                                            <label >Double Bed</label>
                                    </td>
                                    <td>
                                            <input type="checkbox"  value="Breakfast" name="fasilitas" @if ($item -> fasilitas == 'Breakfast') {{ 'checked' }}
                                            @endif>
                                            <label >Breakfast</label>
                                    </td>
                                    <td>
                                            <input  type="checkbox" value="Refrigator" name="fasilitas" @if ($item -> fasilitas == 'Refrigator') {{ 'checked' }}
                                            @endif>
                                            <label>Refrigator</label>
                                    </td>
                                </tr>
            </tr>
            <tr>
                <td>Synopsis</td>
                <td><textarea name="synopsis" id="" cols="35" rows="5">{{ $item-> synopsis}}</textarea></td>
            </tr>
        <tr>
            <td>
            <button class="batal"><a class="batal2" href="/detail/{{ $item->id }}"> Cancel</a></button> <button class="input" type="submit" value="submit">Insert</button>
            </td>
        </tr>
       </table>
    </form></center>
</body>
</html>