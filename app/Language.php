<?php
namespace App;
class Language{
    
    const supportedLanguages=  [
         ['name'=>'en','icon'=>'fi fi-au','full_name'=>'English'],
         ['name'=>'ar','icon'=>'fi fi-sa','full_name'=>'Arabic'],
         ['name'=>'de','icon'=>'fi fi-de','full_name'=>'German'],
         ['name'=>'kr','icon'=>'fi fi-kr','full_name'=>'Korean'],
    ];
    
    const RTL_LANGUAGES=['ar'];

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

    private static function getSelectedLanguageName(){
        $selected= Language::getSelectedLanguage();
        if($selected && isset($selected['name'])){
            return $selected['name'];
        }

        return '';
    }

    public static function isRTL(){
        return in_array(Language::getSelectedLanguageName(),Language::RTL_LANGUAGES);
    }

    public static function direction(){
        if(Language::isRTL()){
            return 'rtl';
        }
        return 'ltr';
    }
    

}