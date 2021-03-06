<?php
namespace Tests;
use Tests\TestCase;
class MainKeyLanguageTest extends TestCase{



    public function multi_diff($arr1,$arr2){
        $result = array();
        foreach ($arr1 as $k=>$v){
          if(!isset($arr2[$k])){
            $result[$k] = $v;
          } else {
            if(is_array($v) && is_array($arr2[$k])){
              $diff = $this->multi_diff($v, $arr2[$k]);
              if(!empty($diff))
                $result[$k] = $diff;
            }
          }
        }
        return $result;
      }




}
