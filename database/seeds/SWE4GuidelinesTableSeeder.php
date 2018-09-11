<?php

use Illuminate\Database\Seeder;

class SWE4GuidelinesTableSeeder extends Seeder
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
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RL.1',
                'guideline_description' => "ソフトウェアユニット検証戦略が上記のすべての側面をカバーしてない場合、指標BP1はFと評定してはならない\n a)検証対象の定義\n b)検証及びテストに関する固有の要件(例えば、テスト固有の利害関係者要件、ISO26262、尺度、MISRA）がどのようにカバーされているかの定義\n c)詳細設計及び非機能要件から派生したテストケース及びテストデータ開発のための方法の定義(例えば、ポジティブ/ネガティブテストの開発、等価クラス分析)\n d)静的検証及びレビューのための方法及びツールの定義\n e)各テスト方法に関するテスト環境の定義\n f)プロジェクト及びリリース計画書に関連したテストカバレッジの定義\n g)ソフトウェアユニット検証に対する入力及び出力基準の定義\n h)テストレベル(例えば、ソフトウェア適格性確認テスト、ソフトウェア統合テスト及びユニットテスト)が組み合わされる場合、各テストレベルの十分なテストカバレッジの文書化\n i)不合格となったテスト、不合格となった静的検証(例えば、不合格となったMISRAチェック又はコンパイラ警告に対する正当化)及びレビュー所見の取り扱いに対するアプローチ",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RL.2',
                'guideline_description' => "ソフトウェアユニット検証戦略が側面 b)、c)又はd)をカバーしてない場合、指標BP1はPより高くしてはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RL.3',
                'guideline_description' => "静的検証の検証ログが上記側面をカバーしてない場合、指標BP3はFと評定してはならない。\n <期待される側面>\n - それぞれの検証結果に対するエビデンスとしてログかされたデータの意味のある要約を提供する検証ログ",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RL.4',
                'guideline_description' => "ユニットテストの検証ログが上記側面をカバーしてない場合、指標BP4はFと評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RL.5',
                'guideline_description' => "静的検証の検証結果が検証ログのサポートなしで純粋に合格/不合格の情報のみ含む場合、指標BP3はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RL.6',
                'guideline_description' => "ユニットテストの検証結果が、検証ログのサポートなしで、純粋に合格/不合格の情報のみ含む場合、指標BP4はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RL.7',
                'guideline_description' => "戦略関連活動が定義された戦略(BP1)に基づき、実施されない場合、指標BP2及びBP4はそれぞれ評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RL.8',
                'guideline_description' => "ユニット検証のための基準の作成の指標(BP2)がソフトウェアユニットの静的検証のための基準の不足又は不十分な定義によって評定を下げている場合、指標BP3は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RL.9',
                'guideline_description' => "ユニット検証のための基準の作成の指標(BP2)がユニットテスト仕様に対する基準の不足又は不十分な定義によって評定を下げている場合、指標BP4は評定を下げなければならな",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RL.10',
                'guideline_description' => "ソフトウェアユニットの静的検証の実施の指標(BP3)がP又はNと評定される場合、結果の要約及び伝達の指標BP7は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RL.11',
                'guideline_description' => "ソフトウェアユニットのテストの指標(BP4)がP又はNと評定される場合、結果の要約及び伝達の指標BP7は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RC.1',
                'guideline_description' => "SWE.1に対するPA1.1が不足又は不十分な非機能要件によって評定を下げている場合、これは指標BP2の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RC.2',
                'guideline_description' => "SWE.3に対するPA1.1が不足又は不十分な詳細設計によって評定を下げている場合、これは指標BP2の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RC.3',
                'guideline_description' => "SWE.3に対するPA1.1が評定を下げている場合、これは指標BP5の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SWE4',
                'guideline_id' => 'SWE.4.RC.4',
                'guideline_description' => "SWE.3に対するPA1.1が評定を下げている場合、これは指標BP6の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
