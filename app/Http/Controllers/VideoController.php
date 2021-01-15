<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\tweet_header;


class VideoController extends Controller
{
    //

public function unduhvideo(Request $request)
{
  // return view('unduh');
  $urlnya = $request->keyword;
  
  if( $_SERVER['REQUEST_METHOD'] == "POST" ) 
    {
    $link = $request->input('keyword');
    } else {
     $link = $request->input('keyword');
    }

    $curl = $this->curl($link);

    // mengubah JSON menjadi array
    $data = json_decode($curl, TRUE);
    // dd($data);
    $cekurl = $data["error"];
    
    // dd($cekurl);

    if($cekurl == false){

    $sql= DB::select('select * from tweet_header where link_tweet = ?', [$urlnya]);
    $jumlahdata = count($sql);
    

  
            if($jumlahdata == 0){
              // echo "data 0";
              date_default_timezone_set('Asia/Jakarta');
              $waktu=date('Y-m-d H:i:s');
              $cekImg = $data["data"]["link_img"];
              $cekLink_tweet = $data["data"]["link_tweet"];
              // dd($cekImg);
              // dd($cekLink_tweet);
              
              // $inputHeader = tweet_header::create(['link_img'=>request($cekImg), 'link_tweet'=>request($cekLink_tweet)]);
              // $inputHeader = DB::insert("insert into tweet_header set category_bot='video', link_img='$cekImg', link_tweet='$cekLink_tweet', status_tweet='statusnya kosong', status_link='kosong atuh', description='gak ada deskripsi', created_at='$waktu', updated_at='$waktu'");
              $inputHeader = DB::table('tweet_header')->insert(
                ['category_bot' => 'video', 
                 'link_img' => $cekImg,
                 'link_tweet' => $cekLink_tweet,
                 'status_tweet' => 'statusnya kosong',
                 'status_link' => 'kosong atuh',
                 'description' => 'gak ada deskripsi',
                 'created_at' => $waktu,
                 'updated_at' => $waktu]);
             
              $last_id = DB::getPdo()->lastInsertId();
              // dd($last_id);
              foreach($data["data"]["detail"] as $row){
              $cekFormat = $row["format"];
              $cekSize = $row["size"];
              $cekLink = $row["link"];
              $inputDetail = DB::insert("insert into tweet_detil set tweet_header_id='$last_id', format='$cekFormat', size='$cekSize', link_download='$cekLink'");

               }
              if ($inputHeader==TRUE && $inputDetail ==TRUE){
                
                
                $view = DB::table('tweet_detil')->where('tweet_header_id', $last_id)->Orderby('id', 'asc')->limit(1)->get();
                foreach ($view as $row) {
                  if($row->format == "application/x-mpegURL")
                  {
              
                  }else
                  {
                    $im = $data["data"]["link_img"];
                    return view('unduh', ['formatnya' => $row->format, 'sizenya' => $row->size, 'downloadnya' => $row->link_download, 'kirimimg' => $im]);
                   
                  }
                }
            
              }else
              {
                // echo "<script> alert('Gagal'); </script>";
              }
            
            
            }else
            {
              // echo "cek"; 
              foreach($sql as $v){
              $t = $v->id;
              // dd($t);
              $view = DB::table('tweet_detil')->where('tweet_header_id', $t)->Orderby('id', 'asc')->limit(1)->get();
              // $view = DB::select('select * from tweet_detil where tweet_header_id = ?', array('66')->);
              foreach ($view as $row) 
              {
                if($row->format == "application/x-mpegURL")
                {
            
                }else
                {
                  $im = $data["data"]["link_img"];
                  return view('unduh', ['formatnya' => $row->format, 'sizenya' => $row->size, 'downloadnya' => $row->link_download, 'kirimimg' => $im]);
                 
                }
              }
                
              }
            }
  }
  else
  {
  echo redirect(url('video'));
  echo "<script> alert('Video Tidak Ada / Sudah Dihapus'); </script>";
  
  
  }

  
}
function getMp4 ($string)
{
    return strtoupper(explode("/", $string)[1]);
}  
function curl($urltwitter)
{
    
  $ch = curl_init(); 
  curl_setopt($ch, CURLOPT_URL, "http://35.247.182.190:3000/generate");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS,
          "url=$urltwitter");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

  $output = curl_exec($ch);  
  curl_close($ch);      
  return $output;

}

}