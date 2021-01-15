
<!DOCTYPE html>
<html>
<title>JodohKamu</title>
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
.ex img
{
  align-items: center;
    margin-left: 0px;
}

.po img
{
  align-items: center;
    margin-left: 250px;
    margin-top:-60px;
}
.c 
{
  color:red;
}
.datecewek 
{
    padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}
.datecowok 
{
    margin-top: 10px;
    
    margin-bottom: 10px;
    padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

.alertmerah {
  font-family: "calibri", sans-serif;
  padding: 20px;
  background-color: red;
  color: white;
}
.alertkuning {
  font-family: "calibri", sans-serif;
  padding: 20px;
  background-color: #d2940e;
  color: white;
}
.alerthijau {
  font-family: "calibri", sans-serif;
  padding: 20px;
  background-color: green;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

.tg{
  background-color:brown;
  color:#fff;
  display:inline-block;
  padding-left:8px;
  padding-right:8px;
  text-align:center
}
@media only screen and (max-width:670px)
{
.ex img
{
  width: 100%;
  height:90%;
  margin:-3px;
}
.po img
{
    width:50%;
    height:50%;
    margin-left:125px;
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
  <h3 class="w3-center w3-padding-64"><span class="tg w3-wide"> <i class="fa fa-heart"></i> JodohKamu - RAMAL STATUS SAYA <i class="fa fa-heart"></i> </span></h3>
    <p>Ini adalah web untuk meramal jodoh, silahkan masukkan tanggal lahir pasangan.</p>


    <p><strong>Tanggal Lahir Cewek</strong></p>
    
    <form class="example" method="POST" action="{{ url('jodoh') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input id="orang_pertama" name="orang_pertama" type="date" class="datecewek">
    <br><br>
    <p><strong>Tanggal Lahir Cowok</strong></p>

   <input id="orang_kedua" name="orang_kedua" type="date" class="datecowok">
   <br><br><br>
  <button id="btn-submit" type="submit">Ramal</button>
</form>

    <br>
    <div class="ex">
    <div id="img">
    <?php
    if(!isset($ktg))
    {

    }else{

    if(strtolower($ktg) == strtolower('TINARI')){
      echo '<div class="alerthijau">'; ?>
      <span class='closebtn' onclick='this.parentElement.style.display="none";'>&times;</span>
      <?php
      echo '<div id="loading"><p class="">Tanggal Orang Pertama : <i>'.$tgl1.'</i></p></div>';
      echo '<div id="loading"><p class="">Tanggal Orang kedua : <i>'.$tgl2.'</i></p></div>';
      echo '<p><u>Ramalan</u></p>';          
      echo '<div id="loading"><p class=""><b>'.$ktg.'</b>. '.$artinya.'</p></div>';
      echo '</div>';
      }else if (strtolower($ktg) == strtolower('JODOH'))
      {
        echo '<div class="alerthijau">';?>
        <span class='closebtn' onclick='this.parentElement.style.display="none";'>&times;</span>
        <?php
        echo '<div id="loading"><p class="">Tanggal Orang Pertama : <i>'.$tgl1.'</i></p></div>';
        echo '<div id="loading"><p class="">Tanggal Orang kedua : <i>'.$tgl2.'</i></p></div>';
        echo '<p><u>Ramalan</u></p>';          
        echo '<div id="loading"><p class=""><b>'.$ktg.'</b>. '.$artinya.'</p></div>';
        echo '</div>';
      }else if(strtolower($ktg) == strtolower('PEGAT'))
      {
        echo '<div class="alertmerah">';?>
        <span class='closebtn' onclick='this.parentElement.style.display="none";'>&times;</span>
        <?php
         echo '<div id="loading"><p class="">Tanggal Orang Pertama : <i>'.$tgl1.'</i></p></div>';
         echo '<div id="loading"><p class="">Tanggal Orang kedua : <i>'.$tgl2.'</i></p></div>';
         echo '<p><u>Ramalan</u></p>';          
         echo '<div id="loading"><p class=""><b>'.$ktg.'</b>. '.$artinya.'</p></div>';
         echo '</div>';
      }else if(strtolower($ktg) == strtolower('RATU'))
      {
        echo '<div class="alerthijau">';?>
        <span class='closebtn' onclick='this.parentElement.style.display="none";'>&times;</span>
        <?php
         echo '<div id="loading"><p class="">Tanggal Orang Pertama : <i>'.$tgl1.'</i></p></div>';
         echo '<div id="loading"><p class="">Tanggal Orang kedua : <i>'.$tgl2.'</i></p></div>';
         echo '<p><u>Ramalan</u></p>';          
         echo '<div id="loading"><p class=""><b>'.$ktg.'</b>. '.$artinya.'</p></div>';
         echo '</div>';
      }else if(strtolower($ktg) == strtolower('PESTHI'))
      {
        echo '<div class="alerthijau">';?>
        <span class='closebtn' onclick='this.parentElement.style.display="none";'>&times;</span>
        <?php
         echo '<div id="loading"><p class="">Tanggal Orang Pertama : <i>'.$tgl1.'</i></p></div>';
         echo '<div id="loading"><p class="">Tanggal Orang kedua : <i>'.$tgl2.'</i></p></div>';
         echo '<p><u>Ramalan</u></p>';          
         echo '<div id="loading"><p class=""><b>'.$ktg.'</b>. '.$artinya.'</p></div>';
         echo '</div>';
      }else if(strtolower($ktg) == strtolower('TOPO'))
      {
        echo '<div class="alertkuning">';?>
        <span class='closebtn' onclick='this.parentElement.style.display="none";'>&times;</span>
        <?php
         echo '<div id="loading"><p class="">Tanggal Orang Pertama : <i>'.$tgl1.'</i></p></div>';
         echo '<div id="loading"><p class="">Tanggal Orang kedua : <i>'.$tgl2.'</i></p></div>';
         echo '<p><u>Ramalan</u></p>';          
         echo '<div id="loading"><p class=""><b>'.$ktg.'</b>. '.$artinya.'</p></div>';
         echo '</div>';
      }else if(strtolower($ktg) == strtolower('SUJANAN'))
      {
        echo '<div class="alertmerah">';?>
        <span class='closebtn' onclick='this.parentElement.style.display="none";'>&times;</span>
        <?php
         echo '<div id="loading"><p class="">Tanggal Orang Pertama : <i>'.$tgl1.'</i></p></div>';
         echo '<div id="loading"><p class="">Tanggal Orang kedua : <i>'.$tgl2.'</i></p></div>';
         echo '<p><u>Ramalan</u></p>';          
         echo '<div id="loading"><p class=""><b>'.$ktg.'</b>. '.$artinya.'</p></div>';
         echo '</div>';
      }else if(strtolower($ktg) == strtolower('PADU'))
      {
        echo '<div class="alertmerah">';?>
        <span class='closebtn' onclick='this.parentElement.style.display="none";'>&times;</span>
        <?php
        echo '<div id="loading"><p class="">Tanggal Orang Pertama : <i>'.$tgl1.'</i></p></div>';
        echo '<div id="loading"><p class="">Tanggal Orang kedua : <i>'.$tgl2.'</i></p></div>';
        echo '<p><u>Ramalan</u></p>';          
        echo '<div id="loading"><p class=""><b>'.$ktg.'</b>. '.$artinya.'</p></div>';
        echo '</div>';
      }
    }
        ?>
   
        </div>
        
        
   
    </div>
  </div>
</div>
</section>
<!-- Menu Container -->
<section id="menu">
    <div class="w3-container" id="about">
      <div class="w3-content" style="max-width:700px"><br>
        <h5 class="w3-center w3-padding"><span class="tg w3-wide">BAGAIMANA CARA MENGGUNAKANNYA?</span></h5>
         <p>   1. Masukkan tanggal lahir si Cewek.</p>
         <p>   2. Masukkan tanggal lahir si Cowok.</p>
         <p>   3. Klik ramal jodoh untuk memulai meramal.</p>
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
</body>
</html>
