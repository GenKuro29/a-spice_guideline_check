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
    
   public static function SWE2RL8($bp_results)
    {
        // ソフトウェアアーキテクチャ設計の作成(BP1)が評定を下げている場合、PA1.1は全ての指標(BP2、BP3、BP4、BP5、BP6、BP7、BP8及びBP9)が影響を受けるので、評定を下げなければならない。
        $comp1 = $bp_results->where('bp_number', 'BP1')->first()->bp_result;
        $comp2 = $bp_results->where('bp_number', 'BP2')->first()->bp_result;
        $comp3 = $bp_results->where('bp_number', 'BP3')->first()->bp_result;
        $comp4 = $bp_results->where('bp_number', 'BP4')->first()->bp_result;
        $comp5 = $bp_results->where('bp_number', 'BP5')->first()->bp_result;
        $comp6 = $bp_results->where('bp_number', 'BP6')->first()->bp_result;
        $comp7 = $bp_results->where('bp_number', 'BP7')->first()->bp_result;
        $comp8 = $bp_results->where('bp_number', 'BP8')->first()->bp_result;
        $comp9 = $bp_results->where('bp_number', 'BP9')->first()->bp_result;
        if(($comp1 != "F" && ($comp2 == "F" or $comp3 == "F" or $comp4 == "F" or $comp5 == "F" or $comp6 == "F" or $comp7 == "F" or $comp8 == "F" or $comp9 == "F"))){
            return false;
        }else{
            return true;
        }
    }
    
}

?>