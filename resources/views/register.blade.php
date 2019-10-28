<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Game Portal | Registeration</title>

    <link href="{{asset('Inspinia')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('Inspinia')}}/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('Inspinia')}}/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="{{asset('Inspinia')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('Inspinia')}}/css/style.css" rel="stylesheet">
      <!-- js library hide alert -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <!-- end hide alert -->

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h6 class="logo-name">GP+</h6>
                     @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
                      @if (Session::get('register'))
                            <div class="alert alert-danger">
                                {{Session::get('register')}}
                            </div>
                        @endif
                        <script type="text/javascript">
                                 $('div.alert-success').delay(5000).slideUp(1000);
                                 $('div.alert-danger').delay(5000).slideUp(1000);
                        </script>
            </div>
            <h3>Register to Game Portal+</h3>
            <p></p>
            <form class="m-t" method="post" role="form" action="{{URL::to('signup')}}">
                @csrf
                <div class="form-group">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" >
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" >
                </div>
                <div class="form-group">
                    <input type="email" name="email_address" class="form-control" placeholder="Email Address" >
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" >
                </div>
                
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{URL::to('/')}}">Login</a>
            </form>
            <p class="m-t"> <small> &copy; <?php echo date('Y') ?>, All Rights Reserved</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
