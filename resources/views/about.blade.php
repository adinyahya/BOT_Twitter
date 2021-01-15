<!DOCTYPE html>
<html>
<title>About</title>
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
<div class="w3-sand w3-large">

<!-- About Container -->
<section id="about">
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"></h5>
    <h1>About</h1>

<p>Hai website ini di dirikan oleh 3 orang Mahasiswa Jurusan Informatika lulusan dari Kampus Institut Teknologi Adhi Tama Surabaya.</p>

<p>BOT Vs Everybody Adalah website BOT dari Twitter.</p>

<p>Website ini di dirikan saat Corona Virus Pandemic, karena di adakannya PSBB oleh pemerintah kami membangun website ini untuk memenuhi aktifitas #dirumahsaja.</p>

<h2>Contact Us</h2>

<p>Jika ada yang ditanyakan mengenai website ini Silahkan hubungi di kolom kontak kami.</p>

 <br>
   
  </div>
</div>
</section>
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
