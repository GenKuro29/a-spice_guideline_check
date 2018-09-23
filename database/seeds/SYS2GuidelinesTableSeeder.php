<?php

use Illuminate\Database\Seeder;

class SYS2GuidelinesTableSeeder extends Seeder
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
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RL.1',
                'guideline_description' => "不明瞭又は一貫性のない要件が個々の利害関係者要件と共に明確にされてない場合、指標BP1は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RL.2',
                'guideline_description' => "システム要件仕様書が最新の変更を反映してない場合、指標BP!はLより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RL.3',
                'guideline_description' => "システム要件が顧客要件から導出されてないが、再利用戦略に基づき、プラットフォーム要件から導出されている場合、指標BP1は評定を下げてはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RL.4',
                'guideline_description' => "カテゴリ化が上記のように適切でない場合、指標BP2はLより高く評定してはならない\n(システム要件は優先順位付けをサポートするため、及び将来のリリースのために必要な機能をマッピングするためにグルーピング、ソーティング及びカテゴリ化によって構造化される)",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RL.5',
                'guideline_description' => "リリースに対する機能のマッピングが顧客及び他の利害関係者のニーズを反映してない場合、指標BP2は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RC.1',
                'guideline_description' => "優先度に対するエビデンスは何もないが、将来のリリースに対する機能の割当を実証するリリース計画書が存在する場合、指標BP2を下げるべきではない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RL.6',
                'guideline_description' => "システム要件およびそれらの依存性が正確性、技術的実現可能性及び検証可能性の面で評価されてない場合、指標BP3はFと評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RC.2',
                'guideline_description' => "コスト及びスケジュールへの影響分析がプロジェクト計画における作業パッケージの見積もりによってカバーされている場合、これは指標BP3の評定を下げるために使用してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RC.3',
                'guideline_description' => "運用環境における影響の分析が上記リストからの側面又はプロジェクトに関連する他の側面から考慮されてない場合、指標BP4は評定を下げるべきである。\n※運用環境における影響分析は適用におけるシステムの影響だけでなく、同様に次の可能な側面を考慮した他システムおよび車両全体への影響をカーバする\n・　インタフェース\n    -  実装\n    -  エネルギーフロー(メカニック、油圧、空気圧、電気、温度など)\n    -  マテリアルフロー(燃料、油、水など)\n    -  信号及び信号品質\n    -  ノイズ、振動、摩耗\n・　環境\n    -  温度\n    -  湿度\n    -  排気\n    -  EMC\n    -  放射線\n・　パフォーマンス\n    -  インタフェース応答時間(メカニック、油圧、空気圧、電機、4.10.1.4を参照)\n    -  サブシステム応答時間(例えば、マイクロコントローラ処理時間)\n・　リソース\n    -  エネルギーフロー\n    -  マテリアルフロー\n    -  メモリ使用（RAM、ROM、EEPROM/データフラッシュ)",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RC.4',
                'guideline_description' => "メモリ、プロセッサ時間及び/又は周辺リソースの準備が不十分である場合、指標BP4は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RL.7',
                'guideline_description' => "検証基準が別々の作業成果物として文書化されてないが、要件仕様書またはテスト仕様書に含まれている場合、指標BP5は評定を下げてはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RL.8',
                'guideline_description' => "顧客要件はシステム要件の分析の結果として必ずしも更新されるとは限らない。この場合、分析の結果が文書化され、システム要件から対応するソース(例えば、eメール、会議記録、プレゼンを通じた顧客の確認)までの包括性及びトレーサビリティが与えられている場合、指標BP7は評定を下げてはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RL.9',
                'guideline_description' => "システム要件の仕様化の指標(BP1)が評定を下げている場合、PA1.1は全ての指標(BP2、BP3、BP4、BP5、BP6、BP7及びBP8)が影響を受けるので、評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RC.5',
                'guideline_description' => "SYS.1に対するPA1.1が評定を下げている場合、これは指標BP1の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RC.6',
                'guideline_description' => "指標BP.3が評定を下げている場合、これはプロジェクトの見積もり及びリソースについての指標(MAN.3.BP5)の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RC.7',
                'guideline_description' => "指標BP.3が評定を下げている場合、これはリスクの識別についての指標(MAN.5.BP3)の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RC.8',
                'guideline_description' => "SYS.1に対するPA1.1が評定を下げている場合、これは指標BP6(2.3.1を参照)の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS2',
                'guideline_id' => 'SYS.2.RC.9',
                'guideline_description' => "SYS.1に対するPA1.1が評定を下げている場合、これは指標BP7の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],

            
        ]);
    }
}
