<?php

use Illuminate\Database\Seeder;

class SYS3GuidelinesTableSeeder extends Seeder
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
                'process_area_name' => 'SYS3',
                'guideline_id' => 'SYS.3.RL.1',
                'guideline_description' => "システムアーキテクチャが動的観点を反映してない場合、指標BP1は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS3',
                'guideline_id' => 'SYS.3.RL.2',
                'guideline_description' => "システムアーキテクチャが適用可能な判批機能要件を反映してない場合、指標BP1は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS3',
                'guideline_id' => 'SYS.3.RL.3',
                'guideline_description' => "システムアーキテクチャ設計のエレメントに対するシステム要件の割当はクラスターに基づいて行われているが、個別要件に基づいていない場合、指標BP2は評定を下げてはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS3',
                'guideline_id' => 'SYS.3.RL.4',
                'guideline_description' => "システムインタフェースの定義が存在しない又はリンクが全く考慮されてない場合、指標BP3は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS3',
                'guideline_id' => 'SYS.3.RL.5',
                'guideline_description' => "上記テーマに関する動的な振る舞いの記述のエビデンスが不足している場合、指標BP4は評定を下げなければならない。\n<記述例>\n・状態遷移図\n・シーケンス図\n・メッセージシーケンス図\n・ユースケース図\n※どれが必要か又は適切かはアプリケーションに依存する。更には、応答時間が検討されなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS3',
                'guideline_id' => 'SYS.3.RL.6',
                'guideline_description' => "アーキテクチャ開発のための3つの記述されたアプローチが被評価者プロジェクトにおいて何も観察できない場合、PA1.1は評定を下げなければならない。\nアプローチ1)：ソリューションの選択肢の作成(例えば、完全なシステムの開発に対する)\nアプローチ2)：反復アーキテクチャ開発\nアプローチ3)：既存のアーキテクチャの実施及び適用(例えば、プラットフォーム開発に対する)",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS3',
                'guideline_id' => 'SYS.3.RC.1',
                'guideline_description' => "アーキテクチャ選択のために使用される手順が必要な関係者又は能力を含まない場合、指標BP5は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS3',
                'guideline_id' => 'SYS.3.RL.7',
                'guideline_description' => "システムアーキテクチャ設計の作成(BP1)が評定を下げている場合、PA1.1はすべての指標(BP2、BP3、BP4、BP5、BP6、BP7及びBP8)が影響を受けるので、評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS3',
                'guideline_id' => 'SYS.3.RL.8',
                'guideline_description' => "システムアーキテクチャ設計のエレメントに対するシステム要件の割当(BP2)が評定を下げている場合、指標BP6は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS3',
                'guideline_id' => 'SYS.3.RC.2',
                'guideline_description' => "SYS.2に対するPA1.1が評定を下げている場合、これは指標BP1の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS3',
                'guideline_id' => 'SYS.3.RC.3',
                'guideline_description' => "SYS.2に対するPA1.1が評定を下げている場合、これは指標BP6の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS3',
                'guideline_id' => 'SYS.3.RC.4',
                'guideline_description' => "SYS.2に対するPA1.1が評定を下げている場合、これは指標BP7の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
