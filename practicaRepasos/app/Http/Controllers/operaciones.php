<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Operaciones extends Controller
{
    public function calcular(Request $request)
    {
        $output = ''; 

       
        if ($request->input('mb_a_gb_1')) {
            $mb = $request->input('mb_a_gb_1');
            $resultMbToGb = $mb / 1024;
            $output .= "Mb a Gb: $resultMbToGb GB<br>";
        }

      
        if ($request->input('gb_a_mb_2')) {
            $gb = $request->input('gb_a_mb_2');
            $resultGbToMb = $gb * 1024;
            $output .= "Gb a Mb: $resultGbToMb MB<br>";
        }

   
        if ($request->input('gb_a_tb_1')) {
            $gb = $request->input('gb_a_tb_1');
            $resultGbToTb = $gb / 1024;
            $output .= "Gb a Tb: $resultGbToTb TB<br>";
        }

       
        if ($request->input('tb_a_gb_2')) {
            $tb = $request->input('tb_a_gb_2');
            $resultTbToGb = $tb * 1024;
            $output .= "Tb a Gb: $resultTbToGb GB<br>";
        }


        return $output;
    }
}
