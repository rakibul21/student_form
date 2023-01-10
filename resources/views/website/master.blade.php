<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-info navbar-light">
    <div class="container">
        <a href="" class="navbar-brand">Laravel App</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('student.add')}}" class="nav-link">Add student</a></li>
            <li><a href="{{route('student.manage')}}" class="nav-link">manage student</a></li>
        </ul>
    </div>
</nav>

@yield('body')

<script src="{{asset('/')}}js/jquery-3.6.3.js"></script>
<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>

<script>
    $('#showPassword').click(function(){
        if($(this).is(":checked"))
        {
            $('#password').attr('type', 'text')
            // alert('check');
        }
        else
        {
            $('#password').attr('type', 'password')
            // alert('not check');
        }
    });
    $('#showConfirmPassword').click(function(){
        if($(this).is(":checked"))
        {
            $('#confirmPassword').attr('type', 'text')
            // alert('check');
        }
        else
        {
            $('#confirmPassword').attr('type', 'password')
            // alert('not check');
        }
    });


    $(document).on('blur','#confirmPassword', function ()
    {
        var password  = $('#password').val();
        var confirmPassword  = $('#confirmPassword').val();
        if(password == confirmPassword)
        {
            $('#confirmPasswordError').text('');
        }
        else
        {
            $('#confirmPasswordError').text('Password and Confirm password are not same');
        }
    });

</script>


</body>
</html>
