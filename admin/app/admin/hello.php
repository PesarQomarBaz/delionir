<?php?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style  type="text/css" href="/delionir/dist/mapir/css/mapp.min.css"></style>
    <style  type="text/css" href="/delionir/dist/mapir/css/fa/style.css"></style>
   <style>


       @charset "utf-8";
       html, body {
           width: 100%;
           height: 100%;
           padding: 0;
           margin: 0;
       }
       html {
           font-size: 10px;
       }
       body {
           overflow: hidden;
       }
       #app {
           width: 100%;
           height: 100%;
       }
   </style>

</head>
<body>
<div style="width: 500px; height: 500px;">
    <div id='app'></div>
</div>

</body>
<script type="text/javascript" src="/delionir/dist/mapir/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/delionir/dist/mapir/js/mapp.min.js"></script>
<script type="text/javascript" src="/delionir/dist/mapir/js/mapp.env.js"></script>
<script>
    $(document).ready(function() {
        var app = new Mapp({
            element: '#app',
            presets: {
                latlng: {
                    lat: 32,
                    lng: 52,
                },
                zoom: 6
            },
            apiKey: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjAyN2FmNzdjNzJhNzUyZTZkMzRjZjNiMGQ5MTJiZTc2M2Q1MjI5OGMyNTI0MTRjMDg1MTA3OTE3NzUzZGEyZDYyMzM2NGRiODJlMDRiNzI3In0.eyJhdWQiOiI4NDUzIiwianRpIjoiMDI3YWY3N2M3MmE3NTJlNmQzNGNmM2IwZDkxMmJlNzYzZDUyMjk4YzI1MjQxNGMwODUxMDc5MTc3NTNkYTJkNjIzMzY0ZGI4MmUwNGI3MjciLCJpYXQiOjE1ODUzNjI0MDgsIm5iZiI6MTU4NTM2MjQwOCwiZXhwIjoxNTg3OTU0NDA4LCJzdWIiOiIiLCJzY29wZXMiOlsiYmFzaWMiXX0.RizRoGBd5OIj86MswgkjkF7KYdIbk4yQklsv3AD-nI50XAlVALjN751OGJbELfMcS1hgtiyDgV5CM8qsc6apGxxf1R7mY22Yf8eXAddWmCA2f7Ntrxo-1wetkudz3INcaXGi9LsABpHIEmTUACVCP82fd8jn5UvmdRp7OsGF50tf6L0lxeUENeaWC26niJn9e0Nv-xACzKUHO7cehjrUCDAuKTbEz4KmpPgcZrGK-sT8LQIWA-U7ayPGnYlqC0TUZ-9TOh3jx7M04em67j7kwDa81fdbSIGGGXpflOh6AzJrBQE-ij_ToyyiUE4VH7bd-XteW4FPMXXAqdaa52GXGA'
        });
        app.addLayers();
    });
</script>
</html>
