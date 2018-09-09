<?php

use Illuminate\Database\Seeder;

class SWE2GuidelinesTableSeeder extends Seeder
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
                'process_area_name' => 'SWE2',
                'guideline_id' => 'SWE.2.RL.1',
                'guideline_description' => "ソフトウェアアーキテクチャが動的観点を反映していない場合、指標BP1は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE2',
                'guideline_id' => 'SWE.2.RL.2',
                'guideline_description' => "ソフトウェアアーキテクチャが適用可能な非機能要件を反映していない場合、指標BP1は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE2',
                'guideline_id' => 'SWE.2.RL.3',
                'guideline_description' => "ソフトウェアアーキテクチャ設計のエレメントに対するソフトウェア要件の割当がクラスターに基づいているが、個別要件に基づいてない場合、指標BP2は評定を下げてはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE2',
                'guideline_id' => 'SWE.2.RL.4',
                'guideline_description' => "ソフトウェアのインタフェースの定義が上記定義に関して欠落又は不完全な場合、指標BP3は評定を下げなければならない。\n<定義>\n ソフトウェアのインタフェースはソフトウェアーキテクチャのエレメントのインプット及びアプトプットを表す。ソフトウェアのインタフェースは移管(transfer)されるデータの送信者、受信者、フォーマット、サイズ、分解能(resolution)、品質情報、頻度などによって定義される。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE2',
                'guideline_id' => 'SWE.2.RL.5',
                'guideline_description' => "上記テーマに関する動的なふるまいの記述のエビデンスが不足している場合、指標BP4は評定を下げなければならない。\n - 実行時のソフトウェアシステムの動的な振る舞い\n - 応答時間",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE2',
                'guideline_id' => 'SWE.2.RL.6',
                'guideline_description' => "上記定義に関するリソース消費目標の記述のエビデンスが不足している場合、指標BP5は評定を下げなければならない。\n - メモリに対して要求される応答時間及びリソースはソフトウェアアーキテクチャ設計全てのリソースの重要エレメントに対して、利害関係者から導出される要求であり、プロジェクトのフェーズに依存する可能性がある。\n - CPU負荷に対して、実行環境は例えば、使用プロファイル及び外部トリガーと同様に検討されなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE2',
                'guideline_id' => 'SWE.2.RL.7',
                'guideline_description' => "アーキテクチャ開発のための3つの記述されたアプローチが被評価プロジェクトにおいて何も観察できない場合、PA 1.1は評定を下げなければならない。\n<アプローチ>\n - ソリューションの選択肢の作成(例えば、完全な新システムの開発に対する)\n - 反復アーキテクチャ開発\n - 既存のアーキテクチャの実施及び適用(例えば、プラットフォーム開発に対する)",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE2',
                'guideline_id' => 'SWE.2.RC.1',
                'guideline_description' => "アーキテクチャ選択のためのに使用される手順が必要な関係者(requiered parties)又は能力を含んでいない場合、BP6は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE2',
                'guideline_id' => 'SWE.2.RL.8',
                'guideline_description' => "ソフトウェアアーキテクチャ設計の作成(BP1)が評定を下げている場合、PA1.1は全ての指標(BP2、BP3、BP4、BP5、BP6、BP7、BP8及びBP9)が影響を受けるので、評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE2',
                'guideline_id' => 'SWE.2.RL.9',
                'guideline_description' => "ソフトウェアアーキテクチャ設計のエレメントに対するソフトウェア要件への割当BP2が評定を下げている場合、指標BP7は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE2',
                'guideline_id' => 'SWE.2.RC.3',
                'guideline_description' => "SWE.1に対するPA 1.1が評定を下げている場合、これは指標BP1の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE2',
                'guideline_id' => 'SWE.2.RC.4',
                'guideline_description' => "SWE.1に対するPA 1.1が評定を下げている場合、これは指標BP7の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE2',
                'guideline_id' => 'SWE.2.RC.5',
                'guideline_description' => "SWE.1に対するPA 1.1が評定を下げている場合、これは指標BP8の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
