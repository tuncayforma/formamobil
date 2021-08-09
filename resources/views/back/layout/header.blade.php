<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormaMobil|Admin</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('back/')}}/dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{asset('back/')}}/dist/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{asset('back/')}}/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{asset('back/')}}/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('back/')}}/dist/assets/css/app.css">
    @toastr_css
    @yield('css')
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/')}}/assets/img/logo/favicon.png">
    <style>
        @media (min-width: 700px) {
            #footer_text{padding-left: 200px;}
        }
    </style>


</head>
