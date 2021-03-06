<?php

use Illuminate\Database\Seeder;

class SWE6BpDescriptionsTableSeeder extends Seeder
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
             'process_area_name' => 'SWE6',
             'bp_number' => 'BP1',
             'bp_description' => "回帰テスト戦略を含むソフトウェア適格性確認テスト戦略の策定\nプロジェクト計画およびリリース計画と整合性のあるソフトウェア適格性確認テスト戦略を策定する。本戦略には、ソフトウェアアイテム変更時に、統合ソフトウェアに対する再テストを実施するための回帰テスト戦略を含む。[成果1]"
            ],
            [
             'process_area_name' => 'SWE6',
             'bp_number' => 'BP2',
             'bp_description' => "ソフトウェア適格性確認テスト仕様の作成\nソフトウェアテスト戦略に従って、検証基準に基づき、テストケースを含むソフトウェア適格性確認テスト仕様を作成する。テスト仕様は、統合ソフトウェアがソフトウェア要件に遵守している証拠を提供することに適していなければならない。[成果2]"
            ],
            [
             'process_area_name' => 'SWE6',
             'bp_number' => 'BP3',
             'bp_description' => "テストケースの選択\nソフトウェアテスト仕様からテストケースを選択する。テストケースは、ソフトウェアテスト戦略およびリリース計画に従って、十分な網羅性を持つように選択しなければならない。[成果3]"
            ],
            [
             'process_area_name' => 'SWE6',
             'bp_number' => 'BP4',
             'bp_description' => "統合ソフトウェアのテスト\n選択したテストケースを使用して統合ソフトウェアに対するテストを実施する。ソフトウェアテスト結果およびテストログを記録する。[成果4]\n備考1:不適合事項の取り扱いについては、SUP.9を参照のこと。"
            ],
            [
             'process_area_name' => 'SWE6',
             'bp_number' => 'BP5',
             'bp_description' => "双方向トレーサビリティの確立\nソフトウェア要件と、ソフトウェア適格性確認テスト仕様に含まれるテストケースとの間の双方向トレーサビリティを確立する。ソフトウェア適格性確認テスト仕様に含まれるテストケースと、ソフトウェア適格性確認テスト結果との間の双方向トレーサビリティを確立する。[成果5]\n備考2:双方向トレーサビリティは、網羅性、一貫性、および影響分析に役立つ。"
            ],
            [
             'process_area_name' => 'SWE6',
             'bp_number' => 'BP6',
             'bp_description' => "一貫性の確保\nソフトウェア要件と、ソフトウェア適格性確認テスト仕様に含まれるテストケースとの間の一貫性を確保する。[成果5]\n備考3:一貫性は、双方向トレーサビリティによって裏付けられ、レビュー記録によって実証できる。"
            ],
            [
             'process_area_name' => 'SWE6',
             'bp_number' => 'BP7',
             'bp_description' => "結果の要約及び伝達\nソフトウェア適格性確認テスト結果を要約し、影響を受けるすべての関係者に伝達する。[成果6]\n備考4:テストケース実行に必要な情報すべてを要約の中に記述することで、他の関係者は結果の判定が可能となる。"
            ],
            
        ]);
    }
}
