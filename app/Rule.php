<?php
namespace App;

use App\Guideline;

class Rule
{
    public static function MAN3RC18($bp_results)
    {
        // 作業範囲の定義(BP1)が評定をさげている場合、指標BP2は評定を下げるべきである
        $comp1 = $bp_results->where('bp_number', 'BP1')->first()->bp_result;
        $comp2 = $bp_results->where('bp_number', 'BP2')->first()->bp_result;
        // dd($bp_results,$comp1,$comp2); //デバッグ
        if($comp1 != "F" && $comp2 == "F"){
            return false;
        }else{
            return true;
        }
    }
    
    public static function MAN3RC19($bp_results)
    {
        //作業範囲の定義(BP1)が評定をさげている場合、指標BP2は評定を下げるべきである
        $comp1 = $bp_results->where('bp_number', 'BP1')->first()->bp_result;
        $comp2 = $bp_results->where('bp_number', 'BP3')->first()->bp_result;
        // dd($bp_results,$comp1,$comp2); //デバッグ
        if($comp1 != "F" && $comp2 == "F"){
            return false;
        }else{
            return true;
        }
    }
    
}

?>