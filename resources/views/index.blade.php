<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte|打刻</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
  <header class="header">
    <h1 class="logo">Atte</h1>
    <nav class="nav">
      <ul class="nav-wrap">
        <li class="nav-item"><a href="/" class="nav-item-link-style">ホーム</a></li>
        <li class="nav-item"><a href="/attendance" class="nav-item-link-style">日付一覧</a></li>
        <li class="nav-item"><a href="/login" class="nav-item-link-style">ログアウト</a></li>
      </ul>
    </nav>
  </header>
  <main class="register-field">
    @if (session('login_success'))
    <p>{{session('login_success')}}</p>
    @endif
    <div class="attendance">
      <h2 class="register-field-ttl">{{optional(Auth::user())->name}}さんお疲れ様です！</h2>
      <div class="attendance-field">
        <form class="attendance-form" action="">
          <div class="attendance-form-items">
            <input class="attendance-items-btn" type="submit" value="勤務開始">
          </div>
        </form>
        <form class="attendance-form" action="">
          <div class="attendance-form-items">
            <input class="attendance-items-btn" type="submit" value="勤務終了">
          </div>
        </form>
        <form class="attendance-form" action="">
          <div class="attendance-form-items">
            <input class="attendance-items-btn" type="submit" value="休憩開始">
          </div>
        </form>
        <form class="attendance-form" action="">
          <div class="attendance-form-items">
            <input class="attendance-items-btn" type="submit" value="休憩終了">
          </div>
        </form>
      </div>
    </div>
  </main>
  <footer class="footer">
    <p>Atte,inc.</p>
  </footer>
  <script src=""></script>
</body>

</html>