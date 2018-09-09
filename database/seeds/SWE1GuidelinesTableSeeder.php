<?php

use Illuminate\Database\Seeder;

class SWE1GuidelinesTableSeeder extends Seeder
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
               'guideline_id' => 'SWE.1.RL.1',
               'guideline_description' => "不明瞭又は一貫性のない要件がそれぞれのシステム要件のオーナーに明確にされたというエビデンスがなにも存在しない場合、指標BP1は評定を下げなければならない",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RL.2',
               'guideline_description' => "ソフトウェア要件仕様書が最新の変更を反映してない場合、指標BP1はLより高く評定してはならない",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RL.3',
               'guideline_description' => "ソフトウェア要件はシステム要件から導出されてないが、再利用戦略に基づくプラットフォーム要件から導出されている場合、指標BP1を評定を下げてはならない",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RL.4',
               'guideline_description' => "カテゴリ化が上記のように適切でない場合、指標BP2はLより高く評定してはならない\n(ソフトウェア要件は優先順位付けをサポートするため、及び将来のリリースのために必要な機能をマッピングするためにグルーピング、ソーティング及びカテゴリ化によって構造化される)",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RL.5',
               'guideline_description' => "リリースのための機能のマッピングが顧客及び他の利害関係者のニーズを反映してない場合、指標BP2は評定を下げなければならない",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RC.1',
               'guideline_description' => "優先度に対するエビデンスは何も存在しないが、将来のリリースのための機能をマッピングするリリース計画書が存在する場合、指標BP2は評定を下げるべきではない",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
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
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RC.4',
               'guideline_description' => "メモリ、プロセッサ時間及び/又は周辺リソースの準備が不十分である場合、指標BP4は評定を下げるべきである",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
            ],
            [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RL.7',
               'guideline_description' => "検証基準は別々の作業成果物として文書化されてないが、要件仕様書又はテスト仕様書に明らかに含まれている場合、指標BP5が評定を下げてはならない。",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RL.8',
               'guideline_description' => "ソフトウェア開発のみのケースで、ソフトウェア要件から利害関係者要件までのトレーサビリティが確立されている(原文：確立されてない)場合、指標BP6は評定を下げてはならない",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RL.9',
               'guideline_description' => "ソフトウェア開発のみのケースで、ソフトウェア要件から利害関係者要件までの一貫性が確立されている(原文：確立されてない)場合、指標BP7は評定を下げてはならない",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RL.10',
               'guideline_description' => "ソフトウェア要件の仕様化(BP1)が評定を下げている場合、PA1.1は全ての指標(BP2、BP3、BP4、BP5、BP6、BP7及びBP8)が影響を受けるので、評定を下げなければならない",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RC.5',
               'guideline_description' => "SYS.2に対するPA1.1が評定を下げている場合、これはBP1の評定と整合させるべきである",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RC.6',
               'guideline_description' => "SYS.3に対するPA1.1が評定を下げている場合、これは指標BP1の評定と整合させるべきである",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RC.9',
               'guideline_description' => "SYS.2に対するPA1.1が評定を下げている場合、これは指標BP6の評定と整合させるべきである",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RC.10',
               'guideline_description' => "SYS.3に対するPA1.1が評定を下げている場合、これは指標BP6の評定と整合させるべきである",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RC.11',
               'guideline_description' => "SYS.2に対するPA1.1が評定を下げている場合、これは指標BP7の評定と整合させるべきである",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
           [
               'process_area_name' => 'SWE1',
               'guideline_id' => 'SWE.1.RC.12',
               'guideline_description' => "SYS.3に対するPA1.1が評定を下げている場合、これは指標BP7の評定と整合させるべきである",
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
           ],
        ]);
    }
}
