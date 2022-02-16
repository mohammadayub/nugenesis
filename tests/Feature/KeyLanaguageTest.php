<?php

namespace Tests\Feature;

use Tests\MainKeyLanguageTest;

class KeyLanguageTest extends MainKeyLanguageTest
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_english_language_keys_compare_with_arabic_language_keys()
    {
        $endata = json_decode(file_get_contents(base_path('resources/lang/en.json')), true);
        $ardata = json_decode(file_get_contents(base_path('resources/lang/ar.json')), true);
        if($this->multi_diff($endata,$ardata)==null){
            $response=$this->call('GET','/en');
            $this->assertEquals(200,$response->status());
        }else
        {
            echo "Compare English Language Keys With Arabic Language Keys";
            print_r($this->multi_diff($endata,$ardata));
        }
     }


    public function test_english_language_keys_compare_with_german_language_keys()
    {
        $endata = json_decode(file_get_contents(base_path('resources/lang/en.json')), true);
        $dedata = json_decode(file_get_contents(base_path('resources/lang/de.json')), true);
        if($this->multi_diff($endata,$dedata)==null){
            $response=$this->call('GET','/en');
            $this->assertEquals(200,$response->status());
        }else
        {
            echo "Compare English Language Keys With German Language Keys";
            print_r($this->multi_diff($endata,$dedata));
        }
    }


    public function test_english_language_keys_compare_with_japanese_language_keys()
    {
        $endata = json_decode(file_get_contents(base_path('resources/lang/en.json')), true);
        $jadata = json_decode(file_get_contents(base_path('resources/lang/ja.json')), true);
        if($this->multi_diff($endata,$jadata)==null){
            $response=$this->call('GET','/en');
            $this->assertEquals(200,$response->status());
        }else
        {
            echo "Compare English Language Keys With Japanese Language Keys";
            print_r($this->multi_diff($endata,$jadata));
        }
    }

    public function test_english_language_keys_compare_with_korean_language_keys()
    {
        $endata = json_decode(file_get_contents(base_path('resources/lang/en.json')), true);
        $krdata = json_decode(file_get_contents(base_path('resources/lang/kr.json')), true);
        if($this->multi_diff($endata,$krdata)==null){
            $response=$this->call('GET','/en');
            $this->assertEquals(200,$response->status());
        }else
        {
            echo "Compare English Language Keys With Korean Language Keys";
            print_r($this->multi_diff($endata,$krdata));
        }
    }



}
