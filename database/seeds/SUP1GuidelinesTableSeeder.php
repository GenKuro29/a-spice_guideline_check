<?php

use Illuminate\Database\Seeder;

class SUP1GuidelinesTableSeeder extends Seeder
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
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RL.1',
                'guideline_description' => "あらかじめ定義された規定が品質戦略において考慮されてない場合、指標BP1はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RL.2',
                'guideline_description' => "品質基準が何も定められてない場合、指標BP1はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
              [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RL.3',
                'guideline_description' => "品質保証戦略がソフトウェアソースコードに対する基準のみを含む場合、指標BP1はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RL.4',
                'guideline_description' => "レビュー方法、レビュー基準、レビュー頻度、レビューカバレッジまたは関係者の関与が品質保証戦略の一部となっていない、又はレビューのエビデンスとして文書化されてない場合、指標BP1は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RL.5',
                'guideline_description' => "品質保証戦略がサプライヤー納入の品質保証をカバーしてない場合、指標BP1はLより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RC.1',
                'guideline_description' => "客観性を保証するためのアプローチが主題の能力と矛盾する場合、指標BP1はPより高く評定されるべきでない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RC.2',
                'guideline_description' => "品質保証が明確な組織部門又は分離独立した要員といった体制になっていなくても、指標BP1評定を下げるべきではない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RL.6',
                'guideline_description' => "プロセスの品質保証がプロセスアセスメントの実施(顧客又は内部のどちらかによる)のみに基づく場合、指標BP3はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RL.7',
                'guideline_description' => "作業成果物の品質保証が純粋に作業成果物の存在をチェックすることのみに基づく場合、指標BP2はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RL.8',
                'guideline_description' => "エスカレーションが是正処置によってフォローアップされてない場合、指標BP6はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RL.9',
                'guideline_description' => "不適合がタイムリーな方法で追跡されてなく、解決されてない、又はエスカレーションされてない場合、指標BP5はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RC.3',
                'guideline_description' => "例え、定義された品質保証技法が適用されたとしても、作業成果物又はプロセスの不適合が識別又は文書化されていない場合、指標BP2又はBP3はそれぞれ評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RC.4',
                'guideline_description' => "作業成果物の品質(BP2)が評定を下げている場合、指標BP4、BP5、及びBP6はそれぞれ評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RL.10',
                'guideline_description' => "作業成果物の品質(BP2)がN又はPと評定される場合、PA1.1はLより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RC.5',
                'guideline_description' => "プロセス活動の品質(BP3)が評定を下げている場合、指標BP4、BP5、及びBP6はそれぞれ評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RL.11',
                'guideline_description' => "作業成果物の品質(BP3)がN又はPと評定される場合、PA1.1はLより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RC.6',
                'guideline_description' => "戦略(BP1)が作業成果物に対する検証アプローチの不足、又は報告方法の不足、又は不適切なエスカレーションンの仕組み又は不適切な客観性及び独立性のアプローチによって評定を下げている場合、指標BP2は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RC.7',
                'guideline_description' => "戦略(BP1)がプロセスに対する検証アプローチの不足、又は報告方法の不足、又は不適切なエスカレーションの仕組み又は不適切な客観性及び独立性のアプローチによって評定を下げている場合、指標BP3は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RC.8',
                'guideline_description' => "品質の不適合が問題解決戦略に基づき、問題として取り扱われる場合、指標BP5及びBP6はそれぞれ、プロセスSUP.9のPA1.1の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP1',
                'guideline_id' => 'SUP.1.RC.9',
                'guideline_description' => "構成品目についての情報を検証する指標(SUP.8.BP.8)がベースライン監査、ベースライン再設定チェック又は構成品目のチェックインコメントなどの不足又は不適切な活動によって評定を下げている場合、これは指標BP2の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
