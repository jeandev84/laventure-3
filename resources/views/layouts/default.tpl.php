<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/dist/css/bootstrap.min.css') }}">
    <title>Default|Layout</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    {% includePath('layouts/partials/navbar.tpl.php') %}
</nav>
<div class="container mt-5">
    {{ content }}
</div>


<script src="{{ asset('/assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>

</body>
</html>