<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MusicDatabase</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <script>
      window.Laravel = {
        csrfToken: "{{ csrf_token() }}"
      };
      window.Laravel = {};
    </script>
  </head>
  <body>
    <div id = "vueApp" class ="top">
      <navbar></navbar>
      <div class = "container">
        <router-view></router-view>
      </div>
    </div>
  </body>
  <script src="{{ mix('js/app.js') }}"></script>
</html>
