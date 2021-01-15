<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class JodohController extends Controller
{
    //
    public function ramal()
    {

        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
        $cewek = $_POST["orang_pertama"];
        $cowok = $_POST["orang_kedua"];
        $g = date('d/m/Y', strtotime($cewek));
        $f = date('d/m/Y', strtotime($cowok));

        
        $curl = $this->curl($f, $g);
        $data = json_decode($curl, TRUE);
        
        $tanggal1 = $data["data"]["orang_pertama"]["tanggal_kustom"];
        $tanggal2 = $data["data"]["orang_kedua"]["tanggal_kustom"];
        $kategori = $data["data"]["arti"]["kategori"];
        // dd($kategori);
        $arti = $data["data"]["arti"]["arti"];
        
        return view('jodoh', ['tgl1' => $tanggal1, 'tgl2' => $tanggal2, 'ktg' => $kategori, 'artinya' => $arti]);
        
        }
    }
    function curl($tglcew, $tglcow){
    
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, "http://35.247.182.190:3000/primbonjodoh");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
                "orang_pertama=$tglcew&orang_kedua=$tglcow");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      
        $output = curl_exec($ch);  
        curl_close($ch);      
        return $output;
    
      }
}
