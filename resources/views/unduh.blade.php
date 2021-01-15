<!DOCTYPE html>
<html>
<title>Download Pecyvideo</title>
<head>
@include('includ.head')
</head>
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/coffeehouse.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}
#customers {
    margin-top: 10px;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: red;
  color: white;
}
.imgx{
    align-items: center; 
    margin-left: 230px;
}

a
{
  text-decoration: none;
}
.m
{
    color:red;
}

@media only screen and (max-width:670px)
{
.fun
{
  font-size:14px;
  color: red;
}
.imgx
{
  width: 100%;
  margin:-3px;
}
}
</style>


<body>

<!-- Links (sit on top) -->
@include('includ.menu')


<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-large">

<!-- About Container -->
<section id="about">
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
  <br>
    <h4 class="w3-center w3-padding-64"><span class="w3-tag w3-wide"><i class="fa fa-video-camera"></i>FreeUseVideo - UNDUH VIDEO  </span></h4>
     <!-- echo $imgnya -->
    <img src="<?php echo $kirimimg; ?>" class="imgx" width="250px" height="250px">
   
    <!-- <div class="w3-panel w3-leftbar w3-light-grey">
    
      <p><i class="fun">URL : </i></p>
    </div> -->
    <table id="customers">
    <tr>
      <th>Format Video</th> 

      <th>Size</th>
      <th>Unduh Link</th>
      
      
      
    </tr>
        
        <tr>
            <td>{{ $formatnya }}</td> 
            <td>{{ $sizenya }}</td> 
            <td><a class="m" href="{{ $downloadnya }}">Download</a></td>
        </tr>
        
  </table>
  </div>
</div>
<br><br>
</section>
<!-- Menu Container -->

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding w3-large">
@include('includ.footer')
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
