<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Excellenza - Consultoria Empresarial</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="LawFirm One Page HTML Template">
<meta name="keywords" content="one page, html, template, responsive, business">
<meta name="author" content="sharjeel anjum">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@include('layout.includes.css')
</head>
<body class="subpage" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <div class="preloader">
      <div class="cssload-dots">
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
      </div>
    </div>

    @yield('content')

    @include('layout.includes.footer')

    @include('layout.includes.js')

    @yield('js')
</body>
</html>
