<!DOCTYPE html>
<html>
<title>Policy</title>
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
</style>
<body>

<!-- Links (sit on top) -->
@include('includ.menu')

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<section id="about">
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"></h5>
    <h1>FAQ</h1>
    <p>1. Bagaimana cara meenggunakan website ini ?</p>
          <p>> Silahkan ikuti cara yang ada di bawah form input URL.</p>
    <p>2. Bagaimana saya mendapatkan link/url itu ?</p>
          <p>> Silahkan klik di menu bagikan pada tweet di twitter lalu klik salin.</p>
    <p>3. Apakah aplikasi ini free ?</p>
          <p>> Iya ini sangat free :).</p>
   <br>
    <div class="ex">
    <div class="w3-panel w3-leftbar w3-light-grey">
      <!-- <p><i>Contoh : https://twitter.com/cctvidiots/status/1255147745741959173?s=20</i></p> -->
    </div>
    </div>
  </div>
</div>
</section>
</div>

<!-- Footer -->
<br><br><br><br><br><br><br>
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
