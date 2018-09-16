<?php

use Illuminate\Database\Seeder;

class SUP9GuidelinesTableSeeder extends Seeder
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
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RL.1',
                'guideline_description' => "戦略が上記すべての側面を含まない場合、指標BP1はFと評定してはならない。\n<側面>\n・　どのような種類の問題を問題として見なさなければならないか、及びどのようなプロジェクトフェーズにおいて問題記録(例えば、外部チケット、不合格となったテスト -原因が仕様書、実装、あるいはテスト環境エラーによるものなのか- 、レビュー所見、不足したリソース)が使用されなければならないかの定義。これは固有のプロジェクトフェーズに対する様々な定義を含むこともある(例えば、プロトタイプ構築中、量産開発中、及び生産開始後)\n・　影響を受ける技術分野(例えば、システム、ソフトウェア、エレクトロニクス)、影響を受けるドメイン(例えば、プラットフォームソフトウェア、COTS-ソフトウェア)、又は影響を受けるサイトのようなすべての組織的及び/又はプロジェクト固有の側面が含まれる\n・　顧客、サプライヤーおよび関連する内部利害関係者(例えば、購買、マーケティング、及びマネジメント)に対するすべての関連するインタフェースの取り扱いが含まれる\n・　技術分野、ドメイン、サイト、利害関係者及び(サブ)プロジェクトを横断した問題報告の管理及び交換が定義される\n・　問題記録のためのステータスモデル及びワークフローを含むライフサイクルが定義される。ライフサイクルは上記側面および制約事項(様々な技術分野、サイト、サブプロジェクト、利害関係者など)をカバーしなければならない\n・　原因及び影響に応じた問題の種別化の定義\n・　適用のための基準及び警告通知のための基準を含む、緊急時の解決戦略の定義\n・　問題が変更依頼、及び問題が解決されるベースラインへのマッピングされることを確保するための方法論",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RL.2',
                'guideline_description' => "複数拠点の組織/プロジェクト、サブプロジェクト、及び/又はグループ間といった、プロジェクトの複雑性に応じたインタフェースについて、戦略が対処してない場合、指標BP1はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RL.3',
                'guideline_description' => "影響分析が関連する利害関係者の不十分な関与によって潜在的側面の影響に十分に対処してない場合、指標BP4はFと評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RL.4',
                'guideline_description' => "影響分析が同一のアプリケーションにおける類似の問題又は他のシステムに対する潜在的影響の考察がないことによって不完全である場合、指標BP4はFと評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RL.5',
                'guideline_description' => "影響を受ける作業成果物が影響分析によって識別されてない場合、、指標BP4はFと評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RL.6',
                'guideline_description' => "クローン、バリアント又は他のシステムにおける潜在的影響の考慮の欠如によって必要な警告の通知に対するエビデンスが何も存在してない場合、指標BP6は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RL.7',
                'guideline_description' => "戦略がステータスモデル、ワークフロー、ステータス変更に対する規準、利害関係者及びそれらの権限を含まない場合、指標BP1は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RL.8',
                'guideline_description' => "ステータスモデル及びワークフローが実際の作業の方法に適応してない、又は相応に適用されていない場合、指標BP3はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RC.1',
                'guideline_description' => "問題の開始者が問題の終結を承認していない場合、指標BP8は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RL.9',
                'guideline_description' => "戦略関連活動が定義された戦略(BP1)に基づき、実施されてない場合、指標BP3、BP5、BP6、BP7及びBP9はそれぞれ評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RC.2',
                'guideline_description' => "問題の識別(BP2)の程度(degreeが評定を下げている場合、指標BP3はそれより高く評定されるべきではない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RC.3',
                'guideline_description' => "問題の記録(BP2)が不十分ない内容によってP又はNと評定される場合、指標BP4は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RL.10',
                'guideline_description' => "問題の原因診断および影響判断(BP4)がP又はNと評定される場合、指標BP5はそれより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RC.4',
                'guideline_description' => "問題の原因診断および影響判断(BP4)がP又はNと評定される場合、指標BP6は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RC.5',
                'guideline_description' => "問題の原因診断および影響判断(BP4)がP又はNと評定される場合、指標BP7は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RL.11',
                'guideline_description' => "問題のステータスの記録(BP3)がP又はNと評定される場合、指標BP8は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RC.6',
                'guideline_description' => "指標BP7の評定が変更依頼の不適切な開始によって評定を下げている場合、これは変更依頼の識別および記録(SUP.10.BP2)の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP9',
                'guideline_id' => 'SUP.9.RC.7',
                'guideline_description' => "指標BP8が評定を下げている場合、これは終結まで変更依頼の追跡(SUP.10.BP7)の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
