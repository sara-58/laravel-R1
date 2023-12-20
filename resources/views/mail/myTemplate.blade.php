<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Email Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="{{asset('assets2/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset('assets2/css/style.css')}}">
</head>

<body>

    <div class="wrapper">
        <div class="inner">
            <form action="sendTemp" method="post">
                @csrf
                <h3>Contact Us</h3>
                <p> Welcome &#128512 , How can we help you ?</p>
                <label class="form-group">
                    <input type="text" class="form-control" required name="userName">
                    <span>Your Name</span>
                    <span class="border"></span>
                </label>
                <label class="form-group">
                    <input type="text" class="form-control" required name="userEmail">
                    <span for="">Your Mail</span>
                    <span class="border"></span>
                </label>
                <label class="form-group">
                    <textarea name="" id="" class="form-control" required name="message"></textarea>
                    <span for="">Your Message</span>
                    <span class="border"></span>
                </label>
                <button>Submit
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>