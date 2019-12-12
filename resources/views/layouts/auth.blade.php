<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.auth.head')
</head>

<body class="page-header-fixed">
    <section id="main-container">
        <div class="container-fluid login-wrapper">
            @yield('content')
        </div>
    </section>
    @include('partials.javascripts')
</body>
</html>