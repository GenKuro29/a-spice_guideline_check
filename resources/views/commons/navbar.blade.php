<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">A-SPICE Assessment</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>{!! link_to_route('projects.create', 'プロジェクト登録') !!}</li>
                    <li>{!! link_to_route('projects.index', 'プロジェクト一覧') !!}</li>
                    <li><a href="#">参考：ガイドライン</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>