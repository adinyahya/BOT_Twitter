<!DOCTYPE html>
<html>
<title>FreeUseImage</title>
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
  color:purple;
}
.tg{
  background-color:purple;
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
    <h3 class="w3-center w3-padding-64"><span class="tg w3-wide"><i class="fa fa-image"></i>FreeUseQuote - GAMBAR QUOTES (<i class="fa fa-twitter"></i>TWITTER) </span></h3>
    
    <p>Ini adalah web yang dibuat untuk membantu anda membuat quotes dari text tweet di twitter, Anda dapat menempelkan tautan link tweet dari twitter yang ingin anda buat.</p>
    <p><strong>Tempel URL Tweet</strong></p>
    
    <form class="example" >
   <input id="url" type="text" placeholder="Masukkan URL tweet..">
  <button id="btn-submit" type="button">Buat</button>
</form>
    <br>
    <div class="ex">
    <div id="img">
    <a id="down-mg" href="" download="quotes_twitter">
    <p class="c">*Silahkan klik gambar untuk memulai mendownloadnya.</p>
          <img id="img-mg" width="600px" height="450px" src="" alt="Cinque Terre">
          </a>
         
        </div>
        <div id="loading"><p class="c text-center">Tunggu . . .</p></div>
        
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>Contoh : https://twitter.com/(tweet_status)</i></p>
    </div>
    </div>
  </div>
</div>
</section>
<!-- Menu Container -->
<section id="menu">
    <div class="w3-container" id="about">
      <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding"><span class="tg w3-wide">BAGAIMANA CARA MEMBUATNYA?</span></h5>
         <p>   1. Temukan Tweet yang ingin Anda buat quotes.</p>
         <p>   2. Ketuk ikon bagikan dan salin tautan tweet.</p>
         <p>   3. Tempel tautan tweet ke form teks URL di atas dan klik tombol "Buat".</p>
         <p>   4. Klik pada gambar untuk menyimpan gambar quotes ke perangkat Anda.</p>
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
    <script type="text/javascript">

$.ajaxSetup({

headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

}

});
      $("#img").hide();
      $("#loading").hide();

      $("#btn-submit").on("click", () => {
        $("#loading").show();
        $("#img").hide();  
        

        let url = $("#url").val();
        $("#loading").show();
        $.post("response-image", {
          url: url
        })
        .done(r => {
          if(r.error) {
            $("#img").hide();
          } else {
            $("#img-mg").attr("src", r.data);
            $("#down-mg").attr("href", r.data);
            $("#img").show();
           
          }
          $("#loading").hide();
        })
        .catch(e => {
          $("#img").hide();
          $("#loading").hide();
        })
        
      });

    </script>
</body>
</html>
