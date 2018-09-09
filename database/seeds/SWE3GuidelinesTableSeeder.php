<?php

use Illuminate\Database\Seeder;

class SWE3GuidelinesTableSeeder extends Seeder
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
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RL.1',
                'guideline_description' => "ソフトウェア詳細設計が動的観点を反映してない場合、指標BP1は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RL.2',
                'guideline_description' => "ソフトウェア詳細設計が適用可能な非機能要件を反映してない場合、指標BP1は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RL.3',
                'guideline_description' => "ソフトウェアのインタフェースの定義が上記定義に関して欠落又は不完全である場合、指標BP2は評定を下げなければならない。\n - ソフトウェアのインタフェースはソフトウェアユニットのインプット及びアウトプットを表す。ソフトウェアのインタフェースは転送(transfer)されるデータの送信者、受信者、フォーマット、サイズ、分解能(resolution)、品質情報、頻度などによって定められる。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RL.4',
                'guideline_description' => "上記テーマに関する動的な振る舞いの記述のエビデンスが不足している場合、指標BP3は評定を下げなければならない。\n - 実行時のソフトウェアコンポーネントの動的な振る舞いのk術のために、振る舞いの記述は例えば、次のようなものが要求される。\n　・状態遷移図\n　・シーケンス図\n　・メッセージシーケンス図\n　・ユースケース図\n - 応答時間は例えば、次の定義に関して検討されなけrばならない\n　・実行タスク\n　・スレッドコンセプト\n　・タイムスライス\n　・割り込み\n　・インタフェース ",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RL.5',
                'guideline_description' => "詳細設計開発のための3つの記述されたアプローチが被評価プロジェクトにおいて何も観察できない場合、PA1.1は評定を下げなければならない。\n - ソリューションの選択肢の作成(例えば、完全な新コンポーネントの開発に対する)\n - 反復詳細設計開発\n - 既存の詳細設計の実施及び適用(例えば、プラットフォーム開発に対する)",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RC.1',
                'guideline_description' => "詳細設計選択のために使用される手順が必要な関係者(requiered parties)又は能力を含んでいない場合、指標BP4は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RL.6',
                'guideline_description' => "ソフトウェアユニットが詳細設計に区術されてない内容を含んでいる場合、指標BP8は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RL.7',
                'guideline_description' => "ソフトウェア詳細設計の作成(BP1)が評定を下げている場合、PA1.1は全ての指標(BP2、BP3、BP4、BP5、BP6、BP7及びBP8)が影響を受けるので、評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RC.2',
                'guideline_description' => "SWE.1に対するPA 1.1が評定を下げている場合、これは指標BP1の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RC.3',
                'guideline_description' => "SWE.2に対するPA 1.1が評定を下げている場合、これは指標BP1の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RC.4',
                'guideline_description' => "SWE.1に対するPA 1.1が評定を下げている場合、これは指標BP5の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RC.5',
                'guideline_description' => "SWE.2に対するPA 1.1が評定を下げている場合、これは指標BP5の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RC.6',
                'guideline_description' => "SWE.1に対するPA 1.1が評定を下げている場合、これは指標BP6の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE3',
                'guideline_id' => 'SWE.3.RC.7',
                'guideline_description' => "SWE.2に対するPA 1.1が評定を下げている場合、これは指標BP6の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],

        ]);
    }
}
