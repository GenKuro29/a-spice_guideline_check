<?php

use Illuminate\Database\Seeder;

class ACQ4GuidelinesTableSeeder extends Seeder
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
                'process_area_name' => 'ACQ4',
                'guideline_id' => 'ACQ.4.RL.1',
                'guideline_description' => "サポートなしのサプライヤーを除き、プロジェクトに関わるすべてのサプライヤーがACQ.4に基づき、監視されてない場合、PA1.1はFと評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'ACQ4',
                'guideline_id' => 'ACQ.4.RL.2',
                'guideline_description' => "サプライヤー及び顧客間の合意書が上記すべてに関して不完全である場合、指標BP1は評定を下げなければならない。\n・サプライヤーのプロジェクトの内容及び適用範囲\n・顧客及びサプライヤー間で交換した情報\n・共同活動\n・共同プロセス及び連絡窓口\n・責任者及び利害関係者\n・共同プロジェクト管理\n・テスト仕様書及びテスト活動\n・共同の問題及び変更管理\n・共同の報告及びレビュー\n・エスカレーションの仕組み\n",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'ACQ4',
                'guideline_id' => 'ACQ.4.RC.1',
                'guideline_description' => "顧客の顧客(例えば、OEM)の関連した合意要件がサプライヤー及び顧客間の合意書の一部となっていない場合、指標BP1は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'ACQ4',
                'guideline_id' => 'ACQ.4.RL.3',
                'guideline_description' => "指標BP1がサプライヤー及び顧客との間の不完全な合意によって評定を下げている場合(ACQ.4.RL.2を参照)、対応する指標（BP2、BP3、BP4)は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'ACQ4',
                'guideline_id' => 'ACQ.4.RL.4',
                'guideline_description' => "指標BP2が技術的開発をレビューするために必要な合意されたすべての情報の不完全な交換によって評定を下げている場合、指標BP3は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'ACQ4',
                'guideline_id' => 'ACQ.4.RL.5',
                'guideline_description' => "指標BP2がサプライヤーの進捗をレビューするために必要な合意されたすべての情報の不完全な交換によって評定を下げている場合、指標BP4は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'ACQ4',
                'guideline_id' => 'ACQ.4.RC.2',
                'guideline_description' => "指標BP2、BP3又はBP4が識別された不適合が是正処置として管理されてないことによって評定を下げている場合、指標BP5は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'ACQ4',
                'guideline_id' => 'ACQ.4.RC.3',
                'guideline_description' => "指標BP1がサプライヤー及び顧客との不完全な合意によって評定を下げている場合(ACQ.4.RL.2を参照)、これはプロジェクト範囲の関連プロセスに関連する指標BPの評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'ACQ4',
                'guideline_id' => 'ACQ.4.RC.4',
                'guideline_description' => "BP5が合意したプロジェクト計画書からの逸脱の分析、追跡及び管理におけるギャップによって評定を下げている場合、これはSUP.9のPA1.1問題解決管理の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
