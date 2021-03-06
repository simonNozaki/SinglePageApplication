<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bands Database</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"></script>

    <script>
      window.Laravel = {
        csrfToken: "{{ csrf_token() }}"
      };
      window.Laravel = {};
    </script>
  </head>
  <body style="background-color: #f39c12;">
    <div id = "vueApp" class ="container">
      <navbar></navbar>
      <div>
        <router-view></router-view>
      </div>
    </div>
  </body>
  <script src="{{ mix('js/app.js') }}"></script>
</html>
