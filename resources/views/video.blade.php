<!DOCTYPE html>
<html>
<title>FreeUseVideo</title>
<head>
@include('includ.head')
</head>
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
  
  background-color:#f6f5f1;
  
}
* {
  box-sizing: border-box;
} 
.bgimg {
  background-position: center;
  background-size: cover;
  min-height: 50%;
  width: 1100px;
  margin-left: 200px;
}

.menu {
  display: none;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
a
{
  text-decoration: none;
}
.tg{
  background-color:green;
  color:#fff;
  display:inline-block;
  padding-left:8px;
  padding-right:8px;
  text-align:center
}
@media only screen and (max-width:670px)
{
.fun
{
  font-size:14px;
  color: red;
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
    <h3 class="w3-center w3-padding-64"><span class="tg w3-wide"><i class="fa fa-video-camera"></i>FreeUseVideo - SIMPAN VIDEO (<i class="fa fa-twitter"></i>TWITTER) </span></h3>
    <p>Ini adalah web yang dibuat untuk membantu anda mengunduh video dari twitter, Anda dapat menempelkan tautan link video dari twitter yang ingin anda unduh.</p>
    <p><strong>Tempel URL Tweet Video</strong></p>
   
    <form class="example" method="POST" action="{{url('unduh')}}">
      {{ csrf_field() }}
 
      <input name="keyword" type="text" required placeholder="URL...">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
    <br>
    <div class="ex">
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i class="fun" >Contoh : https://twitter.com/(tweet_status)</i></p>
    </div>
    </div>
  </div>
</div>
</section>
<!-- Menu Container -->
<section id="menu">
    <div class="w3-container" id="about">
      <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding"><span class="tg w3-wide">BAGAIMANA CARA MENGUNDUHNYA?</span></h5>
         <p>   1. Temukan Tweet yang memiliki video yang ingin Anda unduh.</p>
         <p>   2. Ketuk ikon bagikan dan salin tautan tweet.</p>
         <p>   3. Tempel tautan tweet ke dalam kotak teks URL di atas dan klik tombol "Unduh".</p>
         <p>   4. Anda akan melihat tautan unduhan berbagai format.</p>
         <p>   5. Klik tautan unduhan untuk menyimpan video ke perangkat Anda.</p>
      </div>
    </div>
    </section>


<!-- Contact/Area Container -->
<br><br>
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
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
</body>
</html>
