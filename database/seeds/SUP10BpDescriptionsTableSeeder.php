<?php

use Illuminate\Database\Seeder;

class SUP10BpDescriptionsTableSeeder extends Seeder
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
                'process_area_name' => 'SUP10',
                'bp_number' => 'BP1',
                'bp_description' => "変更依頼管理戦略の策定\n変更依頼活動、変更依頼のステータスモデル、分析基準、およびこれらの活動を実施するための責任を含む変更依頼管理戦略を策定する。影響を受ける関係者との窓口を定義し、維持する。[成果1]\n備考1:変更依頼のステータスモデルには、オープン、調査中、実装承認済、割当済、実装済、是正済、クローズ等がある。\n備考2:一般的な分析基準には、リソース要件、スケジュール観点、リスク、利点等がある。\n備考3:変更依頼活動は、変更依頼が系統的に識別、記述、記録、分析、実装、および管理されることを確実にする。\n備考4:変更依頼管理戦略は、製品ライフサイクルの中で異なる手続きを適用する場合がある(例：プロトタイプ構築、量産開発)",
            ],
            [
                'process_area_name' => 'SUP10',
                'bp_number' => 'BP2',
                'bp_description' => "変更依頼の識別および記録\n戦略に従って各変更依頼を一意に識別し、変更依頼者および理由を含めて記述し、記録する。[成果2,3]",
            ],
            [
                'process_area_name' => 'SUP10',
                'bp_number' => 'BP3',
                'bp_description' => "変更依頼のステータスの記録\nステータスモデルに従って、各変更依頼の追跡が容易となるようにステータスを割り当てる。[成果8]",
            ],
            [
                'process_area_name' => 'SUP10',
                'bp_number' => 'BP4',
                'bp_description' => "変更依頼の分析および評価\n戦略に従って、変更依頼を、影響を受ける作業成果物および他の変更依頼との依存性を含めて分析する。変更依頼の影響を評価し、実装内容を確認するための基準を確立する。[成果3,4,5,9]",
            ],
            [
                'process_area_name' => 'SUP10',
                'bp_number' => 'BP5',
                'bp_description' => "実装前に変更依頼の承認\n戦略に従って変更依頼の実装前に、分析結果およびリソースの利用可能性に基づいて優先順位を付け、承認する。[成果6]\n備考5:変更制御委員会(CCB)は、変更依頼を承認するために使用される共通の仕組みである。\n備考6:変更依頼の優先順位付けは、リリースへ割り当てることによって実施してもよい。",
            ],
            [
                'process_area_name' => 'SUP10',
                'bp_number' => 'BP6',
                'bp_description' => "変更依頼の実装内容のレビュー\n変更依頼の実装内容に対して終結前にレビューし、実装確認基準を満足し、全管連プロセスが適用されていることを確実にする。[成果7,8]",
            ],
            [
                'process_area_name' => 'SUP10',
                'bp_number' => 'BP7',
                'bp_description' => "終結までの変更依頼の追跡\n変更依頼を終結まで追跡する。フィードバックを変更依頼者へ提供する。[成果7,8]",
            ],
            [
                'process_area_name' => 'SUP10',
                'bp_number' => 'BP8',
                'bp_description' => "双方向トレーサビリティの確立\n変更依頼と、変更依頼によって影響を受ける作業成果物との間の双方向トレーサビリティを確立する。変更依頼が問題を原因として開始される場合、変更依頼と該当する問題報告書との間の双方向トレーサビリティを確立する。[成果9]\n備考7:双方向トレーサビリティは、一貫性、完全性、及び影響分析を支援する。",
            ],
        ]);
    }
}