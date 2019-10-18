<!DOCTYPE html>
<!-- saved from url=(0024)http://localhost/users/1 -->
<html lang="ja"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="mhHCzSBrO4sEgiYFpeCsm9Ytfk9MGrDmvUuweScH">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="./詳細画面_files/app.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="http://localhost/users/1#">Laravel</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link " href="http://localhost/books">書籍</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="http://localhost/users">ユーザー</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container py-3">
    <div class="row">
        <div class="col-sm">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="http://localhost/users" class="btn btn-light">戻る</a>
                </li>
                <li class="list-inline-item">
                    <a href="http://localhost/users/1/edit" class="btn btn-success">編集</a>
                </li>
                <li class="list-inline-item">
                    <form action="http://localhost/users/1" method="post">
                        <input type="hidden" name="_token" value="mhHCzSBrO4sEgiYFpeCsm9Ytfk9MGrDmvUuweScH">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">削除</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>氏名</th>
                        <td>山藤</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

    <!-- Scripts -->
    <script src="./詳細画面_files/app.js"></script>

</body></html>