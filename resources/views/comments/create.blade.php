<!DOCTYPE html>
<!-- saved from url=(0042)http://localhost/comments/create?book_id=1 -->
<html lang="ja"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="mhHCzSBrO4sEgiYFpeCsm9Ytfk9MGrDmvUuweScH">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="./新規作成画面_files/app.css" rel="stylesheet">
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
                    <a class="nav-link active" href="http://localhost/comments">コメント</a>
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
        <div class="row">
        <div class="col-sm">
            <form action="http://localhost/comments" method="post">
                <input type="hidden" name="_token" value="mhHCzSBrO4sEgiYFpeCsm9Ytfk9MGrDmvUuweScH">
                <input type="hidden" name="_method" value="POST">

                <input type="hidden" name="book_id" value="1">

                <div class="form-group">
                    <label for="user_id">ユーザー</label>
                    <select class="form-control" id="user_id" name="user_id">
                                                    <option value="1">山藤</option>
                                            </select>
                </div>

                <div class="form-group">
                    <label for="message">メッセージ</label>
                    <input type="text" class="form-control " id="message" name="message" value="">
                </div>

                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="http://localhost/" class="btn btn-secondary">キャンセル</a>
                    </li>
                    <li class="list-inline-item">
                        <button type="submit" class="btn btn-primary">投稿</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</main>

    <!-- Scripts -->
    <script src="./新規作成画面_files/app.js"></script>

</body></html>