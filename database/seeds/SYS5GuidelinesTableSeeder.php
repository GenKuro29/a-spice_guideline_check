<?php

use Illuminate\Database\Seeder;

class SYS5GuidelinesTableSeeder extends Seeder
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
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RL.1',
                'guideline_description' => "テスト戦略が下記の全ての側面をカバーしてない場合、指標BP1はFと評定してはならない。\na)テスト範囲の定義\nb)テストに関する固有の要件(例えば、テスト固有の利害関係者要件、ISO26262)がどのようにカバーされるかの定義\nc)テストケース及びテストデータ作成方法(例えば、ポジティブ/ネガティブテスト、等価パーティショニングの開発)の定義\nd)次を含むテストケースを選択するための基準の定義\n　　- 新規又は変更依頼のカバレッジ\n　　- 変更依頼のカバレッジ\n　　- アイテム変更のカバレッジ\n　　- 変更の分析(例えば、原因チェーン分析)に基づく依存性の考慮、及び\n　　- 実施されるべき基本の一式として選択された一連のテストケースを含む回帰テストのための適切なテストケースの選択\ne)各テスト方法に関するテスト環境の定義\nf)プロジェクトフェーズに対するテスト方法の割当(例えば、ストレステスト、スモークテスト及び不具合注入テスト)\ng)プロジェクト計画書及びリリース計画書に関連したテストカバレッジの定義\nh)テストのための入力および出力基準の定義\ni)テストレベル(例えば、ソフトウェア適格性確認テスト、ソフトウェア統合テスト及びユニットテスト)が結合される場合、各テストレベルの十分なテストカバレッジの文書化\nj)不具合となったテストの取り扱いのためのアプローチ",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RL.2',
                'guideline_description' => "テスト戦略が側面 b)、c) 又は d)をカバーしてない場合、指標BP1はPよりたかっく評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RL.3',
                'guideline_description' => "テスト仕様書が要件仕様及び検証基準に基づいてない場合、指標BP2はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RL.4',
                'guideline_description' => "テストケースの選択が側面a)及びb)をカバーしてない場合、指標BP3はFと評定してはならない。\n a)テストケースの選択は定義された戦略に基づき、実施されなければならない\n b)テストケースの選択は納入可能なアイテムの意図された用途(テストベンチ、テストトラック、公共道路での使用など)が考慮されなければならない。\n c)使用された選択基準(戦略に定義された)は文書化されなければならない。\n d)テストケースの選択は文書化されなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RC.1',
                'guideline_description' => "テストケースの選択が側面c)及びd)をカバーしてない場合、指標BP3はFと評定すべきでない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RL.5',
                'guideline_description' => "テストの実施が上記の全ての側面において、完了してない場合、指標BP4はFと評定してはならない。\n　・テスト仕様書において自動化されたテストに割り当てられたテストケースに関するテストスクリプト及びプログラムの完全性\n　・各テストケースに関するテストスクリプト及びプログラムの一貫性",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RL.6',
                'guideline_description' => "テストログが上記側面をカバーしてない場合、指標BP4はFと評定してはならない。\n　・それぞれのテスト結果に対する適切なエビデンスとしてログ化されたデータの意味のある要約を共有するテストログ",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RL.7',
                'guideline_description' => "テスト結果がテストログのサポートなしで、純粋に合格/不具合の情報のみを含む場合、指標BP4はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RL.8',
                'guideline_description' => "戦略関連活動が定義された戦略(BP1)に基づき、実施されてない場合、指標BP2及びBP3はそれぞれ評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RL.9',
                'guideline_description' => "テスト戦略策定の指標(BP1)がテストケース及びテストデータ作成の方法の不足又は不適切な定義によって評定を下げている場合、指標BP2は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RL.10',
                'guideline_description' => "テスト仕様の作成の指標(BP2)が評定を下げている場合、指標BP3はそれより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RL.11',
                'guideline_description' => "テスト戦略の策定の指標(BP1)がテストケースの選択の基準の不足又は不適切な定義によって評定を下げている場合、指標BP3は評定を下げなければならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RL.12',
                'guideline_description' => "テストケース選択の指標(BP3)がP又はNと評定される場合、指標BP4は評定を下げなければならない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RC.2',
                'guideline_description' => "プロジェクト計画又はリリース計画書が適切でない場合、これは指標BP1の評定を下げるために使用されるべきではない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RC.3',
                'guideline_description' => "SYS.2に対するPA1.1が評定を下げている場合、これは指標BP2の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RC.4',
                'guideline_description' => "リリース計画書が適切でないだけで、テストケースは戦略に基づき、選択されている場合、これは指標BP3の評定を下げるために使用されるべきではない",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RC.5',
                'guideline_description' => "SYS.2に対するPA1.1が評定を下げている場合、これは指標BP5の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SYS5',
                'guideline_id' => 'SYS.5.RC.6',
                'guideline_description' => "SYS.2に対するPA1.1が評定を下げている場合、これは指標BP6の評定と整合させるべきである",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
