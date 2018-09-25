<?php

use Illuminate\Database\Seeder;

class ACQ4BpDescriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('bp_descriptions')->insert([
           [
             'process_area_name' => 'ACQ4',
             'bp_number' => 'BP1',
             'bp_description' => "共同プロセス、連絡窓口、交換すべき情報の合意および維持\n交換すべき情報、共同プロセス及び連絡窓口、責任、共同活動の種類及び頻度、情報伝達、会議、ステータス報告、ならびにレビュー活動について合意を確立し、維持する。[成果1,2,4]\n備考1:共同プロセス及び連絡窓口には、通常、プロジェクト管理、要件管理、変更管理、構成管理、問題解決、品質保証、および発注者の検収を含む。\n備考2:実施すべき共同活動は、発注者及びサプライヤーの両者で合意すべきである。\n備考3:このプロセスで、「発注者」とはアセスメントを受ける組織を意味する。「サプライヤー」とはアセスメントを受ける組織の外注先を意味する。"
            ],
            [
             'process_area_name' => 'ACQ4',
             'bp_number' => 'BP2',
             'bp_description' => "合意したすべての情報の交換\n合意したすべての情報を交換するために、発注者及びサプライヤーとの間で定義した連絡窓口を利用する。[成果1,2,3]\n備考4:合意した情報には、関連するすべての作業成果物を含めるべきである。"
            ],
            [
             'process_area_name' => 'ACQ4',
             'bp_number' => 'BP3',
             'bp_description' => "サプライヤーとの開発活動のレビュー\n合意した定期的な頻度で、サプライヤーと共に開発活動における技術的な側面、問題、およびリスクを含めてレビューし、未解決事項を終結まで追跡する。[成果1,3,4]"
            ],
            [
             'process_area_name' => 'ACQ4',
             'bp_number' => 'BP4',
             'bp_description' => "サプライヤーの進捗のレビュー\n合意した定期的な頻度で、スケジュール、品質、およびコストの観点からサプライヤーの進捗をレビューする。未解決項目を終結まで追跡し、リスク軽減活動を実施する。[成果1,3,4]"
            ],
            [
             'process_area_name' => 'ACQ4',
             'bp_number' => 'BP5',
             'bp_description' => "逸脱の是正\n合意した目標に達成しない場合、合意したプロジェクト計画からの逸脱を是正し、識別した問題の再発を予防するために対策を講じる。目標の変更について交渉し、合意文書に記載する。[成果4]"
            ],
        ]);
    }
}