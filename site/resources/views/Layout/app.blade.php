<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Courses - Learn Anything, On Your Schedule | LMS</title>
    <meta name="google-site-verification" content="J2K-awrLm--LtTSkUGmFsRpFFTU0W1V5PqZTQp0b6pg" />
    <meta name="description" content="LMS is an online learning and teaching platform with over 15 courses and thousand students. Learn programming, marketing, data science and more.">
    <meta name="keywords" content="Learn Web Development, Learn Programming, Learn Digital Marketing, Learn Android App Development">
    <meta name="author" content="Rabbi Husen Roki">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
</head>
<body>
    

@include('Layout.menu')

@yield('content')



    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/axios.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script> 
</body>
</html>