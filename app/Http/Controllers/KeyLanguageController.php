<?php

namespace App\Http\Controllers;

class KeyLanguageController extends Controller
{
    public function index()
    {
        $endata = json_decode(file_get_contents(base_path('resources/lang/en.json')), true);
        $ardata = json_decode(file_get_contents(base_path('resources/lang/ar.json')), true);
        $dedata = json_decode(file_get_contents(base_path('resources/lang/de.json')), true);
        $jadata = json_decode(file_get_contents(base_path('resources/lang/ja.json')), true);
        $krdata = json_decode(file_get_contents(base_path('resources/lang/kr.json')), true);

            /*
            // Define en function
            function print_recursive($arr){
                foreach ($arr as $key => $val) {
                    echo 'KEY IS: ' . $key;
                    echo '<br>';
                if (is_array($val)) {
                    print_recursive($val);
                }
                }
            return;
            }
            // Call function
            echo "</br>";
            echo "<h1>English Language</h1>";
            echo "</br>";

            $engdata=array(print_recursive($endata));
            echo "</br>";
            echo "<h1>Arabic Language</h1>";
            echo "</br>";
            $arbdata=array(print_recursive($ardata));

            echo "</br>";
            echo "<h1>German Language</h1>";
            echo "</br>";

            $deddata=array(print_recursive($dedata));

            echo "</br>";
            echo "<h1>Korean Language</h1>";
            echo "</br>";

            $krkdata=array(print_recursive($krdata));

            echo "</br>";
            echo "<h1>Japanese Language</h1>";
            echo "</br>";

            $japdata=array(print_recursive($jadata));

            $result_array =array_diff_key($engdata,$arbdata,$deddata,$japdata,$krkdata);
            if(empty($result_array[0])){
                echo "they are same";
            }
            if(!empty($result_array[0])){
                echo "they are not same";
            }

            */

       function multi_diff($arr1,$arr2){
          $result = array();
          foreach ($arr1 as $k=>$v){
            if(!isset($arr2[$k])){
              $result[$k] = $v;
            } else {
              if(is_array($v) && is_array($arr2[$k])){
                $diff = multi_diff($v, $arr2[$k]);
                if(!empty($diff))
                  $result[$k] = $diff;
              }
            }
          }
          return $result;
        }
        echo "</br>";
        echo "<h1>Compare English With Arabic Language</h1>";
        echo "</br>";
        print_r(multi_diff($endata,$ardata));
        echo "</br>";
        echo "<h1>Compare English With German Language</h1>";
        echo "</br>";
        print_r(multi_diff($endata,$dedata));
        echo "</br>";
        echo "<h1>Compare English With Japense Language</h1>";
        echo "</br>";
        print_r(multi_diff($endata,$jadata));
        echo "</br>";
        echo "<h1>Compare English With Korean Language</h1>";
        echo "</br>";
        print_r(multi_diff($endata,$krdata));



   }



}
