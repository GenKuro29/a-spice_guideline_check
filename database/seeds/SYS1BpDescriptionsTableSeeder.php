<?php

use Illuminate\Database\Seeder;

class SYS1BpDescriptionsTableSeeder extends Seeder
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
             'process_area_name' => 'SYS1',
             'bp_number' => 'BP1',
             'bp_description' => "利害関係者の要件および要求の入手\n利害関係者の要件および要求を、顧客からのインプットによる直接の要請、ならびに顧客のビジネス提案(該当する場合)、ターゲットとなる運用環境・ハードウェア環境、および顧客の要件に関する他の文書のレビューを通じて入手し、定義する。[成果1,4]\n備考1:要件抽出には、顧客およびサプライヤーが関与する。\n備考2:合意した利害関係者要件、および変更に対する評価は、収集し、文書化しなければならない。\n備考3:各顧客要件のトレーサビリティを維持するために必要となる情報は、収集し、文書化しなければならない。"
            ],
            [
             'process_area_name' => 'SYS1',
             'bp_number' => 'BP2',
             'bp_description' => "利害関係者の期待事項の理解\nサプライヤーおよび顧客の両者が、各要件について等しく理解していることを確実にする。[成果2]\n備考4:顧客と共に実施する要件および要求のレビュー活動は、顧客のニーズおよび期待事項に対する理解を深めるために役立つ。SUP.4共同レビュープロセスを参照のこと。"
            ],
            [
             'process_area_name' => 'SYS1',
             'bp_number' => 'BP3',
             'bp_description' => "要件に関する合意\n要件に取り組むために、すべての関係者から明確な合意を入手する。[成果2]"
            ],
            [
             'process_area_name' => 'SYS1',
             'bp_number' => 'BP4',
             'bp_description' => "利害関係者要件ベースラインの確立\n利害関係者要件を正式なものにし、プロジェクトにおける使用、および利害関係者のニーズに基づいて監視を行うために、ベースラインを確立する。サプライヤーは、利害関係者から明記されていないが、指定された使用および意図された使用に対して必要となる要件を決定し、ベースラインに含めるべきである。[成果2,3]"
            ],
            [
             'process_area_name' => 'SYS1',
             'bp_number' => 'BP5',
             'bp_description' => "利害関係者要件変更の管理\n利害関係者要件ベースラインが確立されている利害関係者要件への変更を管理し、技術および利害関係者のニーズの変化に基づく機能追加点が識別されることを確実にする。また、これらの変更によって影響を受けるものが影響およびリスクを評価し、適切な変更制御および軽減策の開始が可能であることを確実にする。[成果3,6]\n備考5:要件変更は、様々な原因から生じる(例：技術および利害関係者のニーズの変化、法的制約)。\n備考6:合意した利害関係者要件を定義する際に取得した情報、および必要な情報を、管理、保管、および参照するために、情報管理体系が必要である。"
            ],
            [
             'process_area_name' => 'SYS1',
             'bp_number' => 'BP6',
             'bp_description' => "顧客とサプライヤー間の照会情報伝達の仕組みの確立\n顧客が自ら出した要件変更のステータスおよび対応について把握でき、サプライヤーが顧客指定の言語およびフォーマットでデータを含む必要な情報を伝達できる手段を提供する。[成果5]\n備考7:時間、コスト、および機能性の観点から影響を評価できるように、いかなる変更も実装前に顧客へ伝達すべきである。\n備考8:顧客の要件および要求に対するステータスをレビューするための顧客との共同会議、または正式な情報伝達を含む。SUP.4共同レビュープロセスを参照のこと。\n備考9:サプライヤーが伝達する情報のフォーマットには、CADデータおよび電子データを含む。"
            ],
        ]);
    }
}
