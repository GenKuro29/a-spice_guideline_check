<?php

use Illuminate\Database\Seeder;

class SUP10GuidelinesTableSeeder extends Seeder
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
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RL.1',
                'guideline_description' => "戦略が上記すべての側面を含まない場合、指標BP1はFと評定してはならない。\n<側面>\na) 影響を受ける技術分野(例えば、システム、ソフトウェア、エレクトロニクス)、影響を受けるドメイン(例えば、プラットフォームソフトウェア、COTS-ソフトウェア)、又は影響を受けるサイトのような全ての組織及び/又はプロジェクト固有の側面が含まれる\nb) 顧客、サプライヤー及び関連する内部利害関係者(例えば、購買、マーケティング、及びマネジメント)に対するすべての関連するインタフェースの取り扱いが含まれる\nc) 技術分野、ドメイン、サイト、利害関係者及び(サブ)プロジェクトを横断した変更依頼の管理及び交換が定義される\nd) 変更依頼に対するライフサイクルのステータスが定義される。ライフサイクルは上記の側面及び制約事項(様々な技術分野、サイト、サブプロジェクト、利害関係者など)をカバーしなければならない\ne) 戦略は特定された活動に対するゴールを含む(例えば、応答時間、リードタイム)\nf) 戦略は変更依頼の承認のための階層的なアプローチにおけるガイダンスを含まなければならない(例えば、あるコスト/工数の上限まではプロジェクト管理者が承認するが、超えた場合はライン管理者が承認する)\ng) 変更依頼が使用されなければならないプロジェクトフェーズの定義、及び各プロジェクトフェーズ固有の潜在的な違いについての定義が含められなければならない(例えば、プロトタイプ構築中、量産開発中、及び生産開始後)\nh) 変更依頼、問題、影響を受ける作業成果物及び対応するベースライン間でのトレーサビリティを確保するための方法論",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RL.2',
                'guideline_description' => "複数拠点の組織/プロジェクト、サブプロジェクト、及び/又はグループ間といった、プロジェクトの複雑性に応じたインタフェースについて、戦略が対処してない場合、指標BP1はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.1',
                'guideline_description' => "戦略が上記 e) に基づくゴールを含まない場合、指標BP1は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.2',
                'guideline_description' => "プロジェクトのライフサイクルフェーズによって実際に異なる変更依頼の取り扱いが、定義された戦略と整合してない場合、指標BP1は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.3',
                'guideline_description' => "戦略の運用はツールによる実装の中に見出せるが、明確に文書化されてない場合、これは指標BP1をN又はPに評定を下げるために使用されるべきではない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RL.3',
                'guideline_description' => "関係のある分野及び利害関係者が実際のCCBに全く関与していない場合、指標BP5は評定を下げるべきある。\n<CCBの定義及び運用のため期待される側面>\n・　すべての影響を受ける分野が適切に示されている\n・　すべての必要な利害関係者が参加する\n・　CCBは変更管理プロセスを推進する(例えば、意思決定への注力、適時に意思決定を行う、必要に応じて技術的問題の再委任)\n・　組織/プロジェクトの構造、及び/又は組織的な制約事項(例えば、責任、予算、工数)によっては、様々な階層や編成のCCBがあり、それぞれの責任に関して記述されなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.4',
                'guideline_description' => "理由なくCCBによる意思決定が行われていない、又は適時に行われてないことが明らかな場合、指標BP5は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RL.4',
                'guideline_description' => "潜在的変更に対する分析において、その変更に固有のリスク及び複雑性がどのような潜在的副作用を起こすかについて適切に取り扱っていない場合、指標BP4はFと評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.5',
                'guideline_description' => "変更依頼の技術的内容や、複数の代替案から採択した意思決定が文書化されてない場合、指標BP4は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RL.5',
                'guideline_description' => "実装された変更のレビューにおいて、関与すべきプロセスが適用されてないことを見つけ出せない場合、指標BP6は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.6',
                'guideline_description' => "変更依頼の適切な実装の確認が文書化した基準に基づてない場合、指標BP6は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RL.6',
                'guideline_description' => "戦略がステータスモデル、ワークフロー、ステータス変更に対する基準、利害関係者及びそれらの権限の定義を含んでいない場合、指標BP1は評定を下げなければならない。\n<期待される側面>\n・　ステータスモデル及びワークフローはステータス変更に対する基準、及びそれらの責任及び権限などと共に関連する利害関係者を含んで戦略の一部として定義される\n・　定義は実際の業務の方法と整合される(例えば、過去のステータスへの後戻りの可能性、相互作用の利用など)\n・　ステータスモデル及びワークフローは定義通りに適用される。変更依頼は常に実際のステータスを示す(例えば、変更依頼に基づく修正されたソフトウェアが既にリリースされている場合、ステータスは依然として「実装中」又は「レビュー中」にされるべきではない。\n・　変更依頼は最終ステータスまでワークフローに従い、それに応じて追跡される。複数の最終ステータス(例えば、終結、却下、キャンセルなど)ととなる可能性があるが、そのうちの1つは到達することが確保されなければならない(例えば、ステータス「解決済み」は存在するが、ステータスモデルは常には淘汰すされない追加のステップ「終結」を定義する)",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RL.7',
                'guideline_description' => "ステータスモデル及びワークフローが実際の作業の方法に適正てない、又は相応に適用されてない場合、指標BP3はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.7',
                'guideline_description' => "終結された変更依頼が上記d)に基づく最終ステータスを反映してない場合、指標BP7は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RL.8',
                'guideline_description' => "戦略活動関連が定義された戦略(BP1)に基づき、実施されてない場合、指標BP2、BP3、BP4及びBP5はそれぞれ評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.8',
                'guideline_description' => "戦略関連活動が定義された戦略(BP1)がステータスフローにおいて組織又はプロジェクトの複雑性を反映してないことによって評定を下げている場合、BP3は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.9',
                'guideline_description' => "変更依頼の識別及び記録(BP2)の程度が評定を下げている場合、指標BP3「変更依頼のステータスの記録」はそれより高く評定されるべきではない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.10',
                'guideline_description' => "変更依頼の実装内容のレビュー(BP6)が評定を下げている場合、それはBP3の評定に何も影響を及ぼすべきではない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.11',
                'guideline_description' => "変更依頼の記録(BP3)が不十分な内容によってP又はNと評定される場合、指標BP4は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.12',
                'guideline_description' => "双方向トレーサビリティの確立(BP8)の評定が変更依頼と影響を受ける作業成果物との間の依存性の欠如によって評定を下げている場合、指標BP4は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RL.9',
                'guideline_description' => "変更依頼の分析(BP4)がP又はNと評定される場合、指標BP5はそれより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.13',
                'guideline_description' => "変更依頼の分析が(BP4)が確認基準の欠如によってP又はNと評定される場合、指標BP6は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RL.10',
                'guideline_description' => "変更依頼のステータスの記録(BP3)がP又はNと評定される場合、指標BP7は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RL.11',
                'guideline_description' => "変更依頼の初期の記録(BP2)が出所及び/又は理由についての情報不足によってP又はNと評定される場合、指標BP8は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.14',
                'guideline_description' => "指標BP4が影響を受ける作業成果物に対する依存性分析の欠如によって評定を下げている場合、これは変更依頼によって影響を受ける作業成果物の維持に関連するプロセスのPA1.1の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.15',
                'guideline_description' => "指標BP6が変更依頼の実装中に関連するプロセスの不適切な適用によって評定を下げている場合、これは変更依頼によって影響を受ける作業成果物の維持に関連するプロセスのPA1.1の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.16',
                'guideline_description' => "指標BP8が変更依頼と対応する問題報告との間の依存性の欠如によって評定を下げている場合、これは問題解決活動の開始(SUP.9.BP7)の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.17',
                'guideline_description' => "指標BP8が変更依頼と影響を受ける作業成果物との間のトレーサビリティの欠如によって評定を下げている場合、これは変更依頼によって影響を受ける作業成果物の維持に関連するプロセスのPA1.1の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP10',
                'guideline_id' => 'SUP.10.RC.18',
                'guideline_description' => "指標BP5が評定を下げている場合、これはリリースの内容の定義(SPL.2.BP1)の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
