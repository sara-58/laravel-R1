<!DOCTYPE html>
<html lang="en">

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
            <div>
                <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
                <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">Arabic</a>
            </div>
            <h2 class="text-center">{{ __('messages.contactForm') }}</h2>
            <form name="contacts" id="contacts" method="post" action="{{ route('receiveContact') }}">
                @csrf
                <h3>Contact Us</h3>
                <p> Welcome &#128512 , How can we help you ?</p>
                <label class="form-group">

                    <input type="text" class="form-control" id="name" name="userName" required>

                    <span>Your Name</span>
                    <span class="border"></span>
                </label>
                <label class="form-group">
                    <input type="email" class="form-control" id="email" name="userEmail"  required>
                    <span for="">Your Mail</span>
                    <span class="border"></span>
                </label>
                <label class="form-group">
                    <textarea id="" class="form-control" required name="message"></textarea>
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