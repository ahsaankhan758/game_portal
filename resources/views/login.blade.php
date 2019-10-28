<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="{{asset('Inspinia')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('Inspinia')}}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="{{asset('Inspinia')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('Inspinia')}}/css/style.css" rel="stylesheet">
 <!-- js library hide alert -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <!-- end hide alert -->
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">GP+</h1>

                  @if (Session::get('register'))
                            <div class="alert alert-success">
                                {{Session::get('register')}}
                            </div>
                        @endif
                         @if (Session::get('blocked_user'))
                            <div class="alert alert-danger">
                                {{Session::get('blocked_user')}}
                            </div>
                        @endif
                        <script type="text/javascript">
                                 $('div.alert-success').delay(5000).slideUp(1000);
                                 $('div.alert-danger').delay(5000).slideUp(1000);
                        </script>
            </div>
            <h3>Welcome to GP+</h3>
            <p>
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. Here</p>
            <form class="m-t" role="form" method="post" action="{{URL::to('signin')}}">
                @csrf
                <div class="form-group">
                    <input type="email" name="email_address" class="form-control" placeholder="Email Address" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small></small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{URL::to('register')}}">Create an account</a>
            </form>
            <p class="m-t"> <small>&copy; <?php echo date('Y') ?>, All Rights Reserved</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
