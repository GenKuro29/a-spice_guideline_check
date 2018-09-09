<?php

use Illuminate\Database\Seeder;

class Sup8GuidelinesTableSeeder extends Seeder
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
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.1',
                'guideline_description' => "戦略が上記の全ての側面を含まない場合、指標BP1はFとしてはならない。\na)　技術分野(例えば、システム、ソフトウェア、エレクトロニクス)、サイトおよびプロセス(エンジニアリングプロセス、マネジメントプロセス及び支援プロセス)のような全ての組織的及び/又はプロジェクト固有の側面が含まれる。\nb)　全体戦略は特に、様々なソリューションが様々な技術分野、サイト又はプロセスに対して定義されている場合、策定される。\nc)　アクセス権の定義\nd)　開発される成果物の複雑性に基づき、必要な活動及びツールの定義(例えば、インフラ、ファイルシェア、リポジトリのようなリソース又は専用の構成管理システム)\ne)　命名規則を含む構成品目の識別のための基準(例えば、アイテム、フォルダー構造)。基準に対する例は文書、要件、ソースコード、開発ツール、第三者ソフトウェアのようなカテゴリである。\nf)　構成品目の修正バージョンを作成するための条件\ng)　ベースラインを作成する事象(必須又は任意)、ベースラインを確立するために使用される手順、それらの命名規則及びアイテムの改定に対するそれらの関連性を含む、ベースラインの作成のためのアプローチの定義\nh)　アイテム及び一連のアイテムに対するブランチのバリアント及び作成並びにマージの取り扱いのための定義(例えば、バリアントに対する要件)。これはどのケースでブランチが許容可能か、権限が必要かどうか、及びブランチがどのようにマージされるかを含む。\ni)　構成品目に対する改訂履歴のアプローチ",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.2',
                'guideline_description' => "戦略において専用の構成管理システムは何も定義されていないが、手順が開発される製品の複雑性に対して適切である場合、これは指標BP1の評定を下げるために使用してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.3',
                'guideline_description' => "戦略において、主要な構成管理の側面( d) 又は e)に基づく)の内容が不足している場合、指標BP1はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.4',
                'guideline_description' => "戦略において、主要なベースラインの側面( g)に基づく)の内容が不足している場合、指標BP1はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.5',
                'guideline_description' => "戦略において、主要なブランチ及びマージの側面( h)に基づく)の内容が不足している場合、指標BP1はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RC.1',
                'guideline_description' => "適切な一般的な戦略は存在するが、プロジェクト固有の実施が何もされてない場合、指標BP1は評定を下げるべきではない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.6_1',
                'guideline_description' => "管理されるべき構成品目がそれぞれのベースラインの種類(*各種ベースライン)に対して定義されてない場合、指標BP6はPより高く評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.6_2',
                'guideline_description' => "要求されるベースラインが定義された事象(*戦略で定義されたイベント)に対してない場合、指標BP6は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.7',
                'guideline_description' => "さまざまな技術分野、サイト、プロセスなど(c)に基づく)に対して確立されたベースラインが一貫していない、又は全体のベースラインが存在してない場合、指標BP6は評定を下げなければならない。\nc)　全体のベースラインは様々な技術分野、サイト、プロセスなどを超えて作成され、一貫していなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.8',
                'guideline_description' => "ベースラインの内容が検証されてない場合(例えば、ベースライン又は構成管理の監査によって)、指標BP8は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RC.2',
                'guideline_description' => "ベースラインに対して定義された命名規則が使用されてない場合、指標BP6は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.9',
                'guideline_description' => "ブランチが戦略に基づき、作成されてない場合、指標BP4は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.10',
                'guideline_description' => "マージされたアイテム又は一連のアイテムの一貫性及び完全性が確保されてない場合、指標BP8はFと評定してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.11',
                'guideline_description' => "確立されたインフラが手順(a)に基づく)又は複雑性(bに基づく)を支援できない場合、指標BP3は評定を下げなければならない。\na)　確立されたインフラはアクセス権を含む、戦略で定義された手順を支援することを可能にする\nb)　確立されたインフラはマルチサイトの運用、プロジェクトの規模、マルチプロジェクト又はマルチバリアントのアプリケーションのような側面を含む、定義された複雑性を支援するためのに必要なリソースを提供する。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.12',
                'guideline_description' => "専用の構成管理システムが設定されていなくとも、確立された手順が開発される製品の複雑性に対して適切である場合、これは指標BP3の評定を下げるために使用してはならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.13',
                'guideline_description' => "使用されるITサービスの特性が認識されてない場合、あるいは認識されているものの、プロジェクト要件からの逸脱にも是正処置が確立されてない場合、指標BP9は評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RL.14',
                'guideline_description' => "戦略関連活動が定義された戦略(BP1)に基づき、実施されてない場合、指標BP2、BP3、BP4、BP5及びBP6はそれぞれの評定を下げなければならない。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RC.3',
                'guideline_description' => "構成品目の識別(BP2)が適切に行われてない場合、指標BP5、BP7、BP8及びBP9はそれぞれ評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RC.4',
                'guideline_description' => "確立されたベースライン(BP6)が評定を下げている場合、指標BP8は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RC.5',
                'guideline_description' => "構成管理システムの確立(BP3)が評定を下げている場合、指標BP9は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RC.6',
                'guideline_description' => "ベースラインの確立(BP6)が評定を下げている場合、指標BP9は評定を下げるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RC.7',
                'guideline_description' => "指標BP1がベースラインに対する不適切な命名規則によって評定を下げている場合、これは製品のリリースの分類及び番号体系の確立(SPL.2.BP3)の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RC.8',
                'guideline_description' => "指標BP6が評定を下げている場合、これは対象顧客へのリリース製品の納入(SPL.2.BP13)の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'process_area_name' => 'SUP8',
                'guideline_id' => 'SUP.8.RC.9',
                'guideline_description' => "指標BP7が評定を下げている場合、これはプロジェクト進捗のレビュー及び報告(MAN.3.BP10)の評定と整合させるべきである。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}



