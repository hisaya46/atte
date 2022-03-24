<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte|打刻</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
  <header class="header">
    <h1 class="logo">Atte</h1>
  </header>
  <main class="register-field">
    @if (session('login_error'))
      {{session('login_error')}}
    @endif
    <div class="register-field-content">
      <h2 class="register-field-ttl">{{optional(Auth::user())->name}}お疲れ様です！</h2>
      <form action="" method="get">
        @csrf
      </form>
    </div>
  </main>
  <footer>
    <p>Atte,inc.</p>
  </footer>
  <script src=""></script>
</body>

</html>