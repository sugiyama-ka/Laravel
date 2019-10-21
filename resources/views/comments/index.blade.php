<!DOCTYPE html>
<!-- saved from url=(0017)http://localhost/ -->
<html lang="ja"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="mhHCzSBrO4sEgiYFpeCsm9Ytfk9MGrDmvUuweScH">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="./一覧画面_files/app.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="http://localhost/">Laravel</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link " href="http://localhost/comments">コメント</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="http://localhost/books">書籍</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="http://localhost/users">ユーザー</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container py-3">
            <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-0">php</h6>
                            <div class="media text-muted pt-3">
                    <img alt="" class="mr-2 rounded" src="./一覧画面_files/I-310.svg" style="width: 32px; height: 32px;">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">山藤</strong>
                        PHPの研修に最適。
                    </p>
                </div>
                        <small class="d-block text-right mt-3">
                <a href="http://localhost/comments/create?book_id=1" class="btn btn-success">コメント</a>
            </small>
        </div>
            <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-0">laravel</h6>
                        <small class="d-block text-right mt-3">
                <a href="http://localhost/comments/create?book_id=2" class="btn btn-success">コメント</a>
            </small>
        </div>
    </main>

    <!-- Scripts -->
    <script src="./一覧画面_files/app.js"></script>

</body></html>