<?php
include_once 'common_function.inc.php';
?>

<!doctype html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>帳號申請</title>

    <!-- 設定一次即可，之後不用再變更 -->
    <!-- mix() 會去讀取 mix-manifest.json 中的 hash 值，如有變更過，hash 值不同，瀏覽器就會重新讀取 -->
    <!-- 引用的順序一定要是 manifest.js, vendor.js, app.js -->
    <link rel="stylesheet" href="<?php mix('/css/app.css'); ?>">
    <script src="<?php mix('/js/manifest.js'); ?>"></script>
    <script src="<?php mix('/js/vendor.js'); ?>"></script>
    <script src="<?php mix('/js/app.js'); ?>"></script>

    <!--
    如不用mix() 也可以自行產生 v 的值，讓瀏覽器不讀快取
    <link rel="stylesheet" href="/css/app.css?v=20210609">
    <script src="/js/manifest.js?v=20210609"></script>
    <script src="/js/vendor.js?v=20210609"></script>
    <script src="/js/app.js?v=20210609"></script>
    -->
</head>
<body>
<div class="container p-4 my-4 bg-white rounded-3 shadow" id="app">
    <h2 class="mt-2 mb-4 pb-2 border-bottom">帳號申請 <small>(所有欄位皆為必填)</small></h2>
    <form action="index.php" method="post">
        <div class="row mb-4">
            <div class="form-group">
                <label for="username">帳號</label>
                <input type="text" class="form-control" id="username" autocomplete="off" autofocus required>
                <div class="invalid-feedback">使用英文開頭，至少 5 個字</div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="form-group">
                <label for="name">姓名</label>
                <input type="text" class="form-control" id="name" autocomplete="off" required>
                <div class="invalid-feedback">姓名</div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="form-group">
                <label for="mobile">電話</label>
                <input type="text" class="form-control" id="mobile" autocomplete="off" required>
                <div class="invalid-feedback">電話</div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="form-group">
                <label for="department">部門</label>
                <select name="department" id="department" class="form-control">
                    <option value="1">A 部門</option>
                    <option value="2">B 部門</option>
                    <option value="3">C 部門</option>
                </select>
                <div class="invalid-feedback">請選擇部門</div>
            </div>
        </div>

        <div class="d-grid gap-2">
            <button type="button" class="btn btn-primary">確定</button>
        </div>
    </form>
</div>

<script>
console.log(moment().format('L'));
</script>
</body>
</html>
