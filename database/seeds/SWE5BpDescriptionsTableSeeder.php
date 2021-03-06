<?php

use Illuminate\Database\Seeder;

class SWE5BpDescriptionsTableSeeder extends Seeder
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
             'process_area_name' => 'SWE5',
             'bp_number' => 'BP1',
             'bp_description' => "ソフトウェア統合戦略の策定\nプロジェクト計画およびリリース計画と整合性のあるソフトウェアアイテム統合戦略を策定する。ソフトウェアアーキテクチャ設計に基づきソフトウェアアイテムを識別し、それらを統合するためのシーケンスを定義する。[成果1]"
            ],
            [
             'process_area_name' => 'SWE5',
             'bp_number' => 'BP2',
             'bp_description' => "回帰テスト戦略を含むソフトエア統合テスト戦略の策定\n統合戦略に従って統合したソフトウェアアイテムに対するテスト戦略を策定する。本戦略には、ソフトウェアアイテム変更時に、統合ソフトウェアアイテムに対する再テストを実施するための回帰テスト戦略を含む。[成果2]"
            ],
            [
             'process_area_name' => 'SWE5',
             'bp_number' => 'BP3',
             'bp_description' => "ソフトウェア統合テスト仕様の作成\n各統合ソフトウェアアイテムに対するソフトウェア統合テスト戦略に従って、テストケースを含むソフトウェア統合テスト仕様を作成する。テスト仕様は、統合ソフトウェアアイテムがソフトウェアアーキテクチャ設計に遵守している証拠を提供することに適していなければならない。[成果3]\n備考1:アーキテクチャ設計への遵守とは、ソフトウェアユニット間およびソフトウェアアイテム間のインタフェースが、ソフトウェアアーキテクチャ設計によって与えられた仕様を満たしていることを証明するために、明記した統合テストが適したものであることを意味する。\n備考2:ソフトウェア統合テストケースは、以下に重点を置く。\n・ソフトエアアイテム間のデータフローの正しさ\n・ソフトウェアアイテム間のデータフローにおける適時性および時間依存性\n・すべてのソフトウェアアイテムにおけるインタフェース上のデータの一致制\n・ソフトウェアアイテム間の動的な相互作用\n・インタフェースのリソース消費目標への遵守"
            ],
            [
             'process_area_name' => 'SWE5',
             'bp_number' => 'BP4',
             'bp_description' => "ソフトウェアユニットおよびソフトウェアアイテムの統合\nソフトウェア統合戦略に従って、ソフトウェアユニットをソフトウェアアイテムに統合し、さらにソフトウェアアイテムを統合ソフトウェアに統合する。[成果4]"
            ],
            [
             'process_area_name' => 'SWE5',
             'bp_number' => 'BP5',
             'bp_description' => "テストケースの選択\nソフトウェア統合テスト仕様からテストケースを選択する。テストケースは、ソフトウェア統合テスト戦略およびリリース計画に従って、十分な網羅性を持つように選択しなければならない。[成果5]"
            ],
            [
             'process_area_name' => 'SWE5',
             'bp_number' => 'BP6',
             'bp_description' => "ソフトウェア統合テストの実施\n選択したテストケースを使用してソフトウェア統合テストを実施する。統合テスト結果およびテストログを記録する。[成果6]\n備考4:不適合事項の取り扱いについては、SUP.9を参照のこと。\n備考5:ハードウェアデバッグインタフェースまたはシミュレーション環境(例：ソフトウェア・イン・ザ・ループシミュレーション(SILS))の使用は、ソフトウェア統合テストに役立つ。"
            ],
            [
             'process_area_name' => 'SWE5',
             'bp_number' => 'BP7',
             'bp_description' => "双方向トレーサビリティの確立\nソフトウェアアーキテクチャ設計のエレメントと、ソフトウェア統合テスト仕様に含まれるテストケースとの間の双方向トレーサビリティを確立する。ソフトウェア統合テスト仕様に含まれるテストケースと、ソフトウェア統合テスト結果との間の双方向トレーサビリティを確立する。[成果7]\n備考6:双方向トレーサビリティは、網羅性、一貫性、および影響分析に役立つ。"
            ],
            [
             'process_area_name' => 'SWE5',
             'bp_number' => 'BP8',
             'bp_description' => "一貫性の確保\nソフトウェアアーキテクチャ設計のエレメントと、ソフトウェア統合テスト仕様に含まれるテストケースとの間の一貫性を確保する。[成果7]\n備考7:一貫性は、双方向トレーサビリティによって裏付けられ、レビュー記録によって実証できる。"
            ],
            [
             'process_area_name' => 'SWE5',
             'bp_number' => 'BP9',
             'bp_description' => "結果の要約および伝達\nソフトウェア統合テスト結果を要約し、影響を受けるすべての関係者へ伝達する。[成果8]\n備考8:テストケース実行に必要な情報すべてを要約の中に記述することで、他の関係者は結果の判定が可能となる。"
            ],
        ]);
    }
}
