<?php

use Illuminate\Database\Seeder;

class Man3GuidelinesTableSeeder extends Seeder
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
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.1',
                'guideline_description' => "作業範囲(BP1)が製品の記述のみの場合、指標BP1はLより高く評定してはならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.1',
                'guideline_description' => "作業範囲(BP1)がプロジェクト及び製品に関して、全ての影響を受ける関係者に対処してない場合、指標BP1はLより高く評定されるべきではない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.2',
                'guideline_description' => "作業範囲(BP1)がプロジェクト開始時点で適切に文書化されてない場合、指標BP1はLより高く評定してはならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.2',
                'guideline_description' => "コミットメントがプロジェクトのタイムラインの遅れ又は機能のキャンセルなどによって満たされてない場合、指標BP1及びBP3はLより高く評定されるべきではない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.3',
                'guideline_description' => "コミットメントがプロジェクトのタイムラインの遅れ又は機能のキャンセルなどによって満たされてない場合、指標BP5及びBP8はLより高く評定してはならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.3',
                'guideline_description' => "活動が生成物のインプット及びアウトプットとともに記述されてない場合、指標BP4はPより高く評定されるべきではない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.4',
                'guideline_description' => "活動間の依存性が識別されてない場合、指標BP4はLより高く評定されるべきではない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.5',
                'guideline_description' => "作業パッケージが大きすぎる(例えば、スケジュールの更新周期より長い)場合、指標BP8は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.6',
                'guideline_description' => "使用される見積もり方法が分かりやすくない場合、指標BP5はPより高く評定されるべきではない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.7',
                'guideline_description' => "実際の活動より、おおまかな作業パッケージに基づいてるなど、見積もりが大まかすぎる場合、指標BP5はPより高く評定されるべきではない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.8',
                'guideline_description' => "評価された工数をカバーするための十分なリソースが存在しない場合、指標BP5はPより高く評定されるべきではない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.9',
                'guideline_description' => "リソースは見積をカバーするためには十分ではあるが、工数の予実に対する監視が欠如している場合、指標BP5はLより高く評定されるべきではない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.10',
                'guideline_description' => "見積に対する根拠が欠如している場合、指標BP5はLより高く評定されるべきではない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.11',
                'guideline_description' => "活動の定義、工数及びリソースの見積もり、スケジュールの準備が予期しうる変更依頼及び問題解決を十分に反映してない場合、指標BP4,BP5及びBP8は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.12',
                'guideline_description' => "プロジェクトのライフサイクルが変更依頼及び問題解決に対処することを許可するフェーズを含んでない場合、指標BP2は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.13',
                'guideline_description' => "対策項目または是正処置が終結までに適切に追跡されてない場合、対応する指標BP4,BP5,BP7,BP8及び/又はBP10は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.4',
                'guideline_description' => "スケジュールが定義された活動(BP4)及びB見積もり(BP5)に基づいてない場合、指標BP8及びBP9はPより高く評定してはならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.5',
                'guideline_description' => "スケジュールのが次の全てを含まない場合、指標BP8はLより高く評定してはならない\n・開始及び終了日付\n・期間\n・達成度(監視目的の)\n・リソース\n・依存性",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.6',
                'guideline_description' => "次のいずれかが不足している場合、指標BP8はPより高く評定してはならない\n・開始及び終了日付\n・工数\n・達成度",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.7',
                'guideline_description' => "理由が文書化されず、スケジュールが変更される、又は変更が文書化されたない場合、指標BP8は評定を下げなければならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.8',
                'guideline_description' => "スケジュール上で追跡される活動の達成度が更新されていない(プロジェクトの範囲及びリリース計画に応じて隔週以上)場合、指標BP8は評定を下げなければならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.9',
                'guideline_description' => "スケジュールにおいてクリティカルパうが決定されTない場合、指標BP8は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.10',
                'guideline_description' => "監視において、リソースの投下量、期限順守の可否、活動の達成度(すなわち、実際の進捗度)の相関関係が評価されてない場合、指標BP10はPより高く評定してはならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.11',
                'guideline_description' => "製品リリースの受領者が利害関係者として考慮されてない場合、指標BP7はPより高く評定してはならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.12',
                'guideline_description' => "製品リリースの期限又はマイルストーンがスケジュールに反映されてない場合(様々なスケジュール間の一貫性も考慮)、指標BP8はPより高く評定してはならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.13',
                'guideline_description' => "現在及び次のリリースの範囲が詳細に識別されてない場合(リリースごとのフィーチャー及び/又は機能)、指標BP7及びBP8はPより高く評定してはならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.14',
                'guideline_description' => "リリースの中長期計画がフィーチャー及び/又は機能に対して少なくとも最新のリリース/マイルストーンをカバーしてない場合、指標BP7及びBP8はLより高く評定してはならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.15',
                'guideline_description' => "現在及び次のリリースに対して、期待されるすべての活動が(正当な理由もなく)計画も追跡もされてない場合、指標BP4、BP7及びBP8はLより高く評定してはならない。期待される活動の50%いかが計画されている場合、BP4,BP7,BP8はPより高く評定してはならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.14',
                'guideline_description' => "様々な計画情報の種類間でのリンクがツールによって支援されてない場合、これは指標BP9の評定を下げるために使用されるべきではない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.16(原本:MAN.3.RL.15)',
                'guideline_description' => "様々な計画書間の相関や、見積もりと計画書との間の相関が大まかすぎたり、弱すぎる場合、指標BP9は評定を下げなければならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.15',
                'guideline_description' => "実現可能性に対するリスクが考慮されてない場合、指標BP3は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.16',
                'guideline_description' => "見積又はリソースに関するリスクが考慮されてない場合、指標BP5は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.17',
                'guideline_description' => "スキル又は知識に関するリスクが考慮されてない場合、指標BP6は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.18',
                'guideline_description' => "作業範囲の定義(BP1)が評定をさげている場合、指標BP2は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.19',
                'guideline_description' => "作業範囲の定義(BP1)が評定をさげている場合、指標BP3は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.20',
                'guideline_description' => "プロジェクトのライフサイクル(BP2)が評定を下げている場合、指標BP4は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.21',
                'guideline_description' => "作業範囲の定義(BP1)が評定をさげている場合、指標BP5は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.22',
                'guideline_description' => "プロジェクトの実現可能性(BP3)が評価されてない場合、指標BP5は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.23',
                'guideline_description' => "BP4の結果として定義された活動が見積もりに含まれてない場合、指標BP5は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.24',
                'guideline_description' => "見積がプロジェクトの利用可能なスキル(BP6)と相関してない場合、指標BP5は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RL.17',
                'guideline_description' => "見積が系統的(systematically)に作成されてない場合(BP5)、指標BP8は評定を下げなければならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.25',
                'guideline_description' => "作業パッケージの定義が脆弱で、作業パッケージ間の依存性が把握されてない、又はプロジェクトの活動が適切に細分化及び文書化されてない場合(BP4)、指標BP8は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.26',
                'guideline_description' => "プロジェクトの活動が適切に細分化及び文書化されてない場合(BP4)、指標BP10は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.27',
                'guideline_description' => "見積が適切に文書化されてない場合(BP5)、指標BP10は評定を下げるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.28',
                'guideline_description' => "リスク管理(MAN.5 PA1.1)が評定を下げている場合、指標BP5(見積もり及びリソースの管理)はLより高く評定されるべきではない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.29',
                'guideline_description' => "伝達に関するエンジニアリングプロセスの関連BP(全ての会陰ジニアリングプロセスの最後のBP)が評定を下げている場合、これは指標BP7の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.30',
                'guideline_description' => "システムレベル(SYS.2.BP3)又はソフトウェアレベル(SWE.1.BP3)といった要件プロセスの関連BPが技術的実現可能性に関する分析の欠如又は弱みによって評定を下げている場合、これは指標BP3の評定と整合性させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'MAN3',
                'guideline_id' => 'MAN.3.RC.31',
                'guideline_description' => "品質保証のステータス(SUP.1.BP4)、構成品目ステータス(SUP8.BP7)、問題のステータス(SUP.9.BP8)及び変更依頼のステータス(SUP.10.BP7)に関する関連BPが報告書の不足又は弱みによって評定を下げている場合、これは指標BP10の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
