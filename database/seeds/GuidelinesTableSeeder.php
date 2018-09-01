<?php

use Illuminate\Database\Seeder;

class GuidelinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guidelines')->insert([
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RL.6',
               'guideline_description' => 'ソフトウェア要件及びそれらの相互依存性が正確性、技術的実現可能性及び検証可能性の面で評価されてない場合、指標BP3はFとしてはならない',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RC.2',
               'guideline_description' => 'コスト及びスケジュールへの影響分析がプロジェクト計画における作業パッケージの見積もりによってカバーされてない場合、これは指標BP3の評定を下げるために使用されるべきではない',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RC.3',
               'guideline_description' => "運用環境における影響の分析が上記リストのからの側面又はプロジェクトに関連する他の側面から考慮されてない場合、指標BP4は評定を下げるべきである\n<インタフェース>\n - 信号及び信号品質\n - 電圧及び電流\n<環境>\n - 温度\n - EMC\n<パフォーマンス>\n - インタフェース応答時間(信号応答、サンプル時間、サイクルタイム、バスロード、信号遅延、ジッター)\n - マイクロコントローラ応答時間(処理時間)\n<リソース>\n - RAM/ROMメモリ使用\n - EEPROM/データフラッシュメモリ使用",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
            
        ]);
    }
}
