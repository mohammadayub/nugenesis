<?php
namespace App;
class Language{
    
    const supportedLanguages=  [
         ['name'=>'en','icon'=>'fi fi-au'],
         ['name'=>'ar','icon'=>'fi fi-sa'],
         ['name'=>'de','icon'=>'fi fi-de'],
         ['name'=>'ja','icon'=>'fi fi-jp'],
         ['name'=>'kr','icon'=>'fi fi-kr'],
    ];

    public static function getLanguageList(){
        $languages=[];
        foreach(Language::supportedLanguages as $l):
            $currentPage = Language::getCurrentPage();
            $l['link'] = $currentPage ? '/'.$l['name']."/".$currentPage :'/'.$l['name'];
            $l['label'] = strtoupper($l['name']);
            $languages[]=$l;
        endforeach;
        return $languages;
    }

    private static function getSelectedLanguage(){
        foreach(Language::getLanguageList() as $l){
            if(\Lang::locale() === $l['name']){
                return $l;
            }
        }
    }

    public static function selectedLanguage($field){
        $selected = Language::getSelectedLanguage();
        if(isset($selected[$field])){
            return $selected[$field];
        }
        return '';
    }

    public static function getCurrentPage(){
        $path=url()->current();
        $path = explode("/",$path);
        if(count($path) > 4){
            return $path[count($path)-1];
        }
        return '';
    }
    

}