    <!--
<a href="http://localhost/WEB/?c=AccountController&m=home" > Trang chủ</a>
<h2>Login</h2>

    <div>
        <form action="?c=AccountController&m=checkLogin" method="POST">
    <div class="form-group">
    <input type="text" name="username" class="form-control"  value="">
    <div class="error">
   
    </div>
    </div>

    <div class="form-group">
    <input type="text" name="password" class="form-control"  value="">
    <div class="error">
      
    </div>
    </div>

    <div class="form-group">
    <input type="submit" name="lginBtn" class="btn btn-primary" value="Login">
    <a  href="http://localhost/WEB/?c=AccountController&m=viewSignUpForm" >Sign up</a>
    </div>


    </form>
    </div>
    -->
///////////////////////////////////////////////////////////////////////////
  <html>
    <head>
        <a href="http://localhost/WEB/?c=AccountController&m=home" > Trang chủ</a>
        <title>
            Đăng nhập vào website
        </title>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <link href="css/fontawesome-free-5.10.2-web/css/all.css" rel="stylesheet" type="text/css"/>
                <link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/css/style.css">
            </meta>
        </meta>
        <style>
            body {
                background-image: url("http://localhost/WEB/MVC/public/image/wp3980262.jpg");
            }
        </style>
    </head>
    <body>

        <main id="login-main">
            <div id="login-container">
                <div class="login-form" style="margin-top: 150px;">
                    <script language="javascript">
                        function validateLogin(){
                            if( document.Login.username.value == "" ) {
                                alert( "Bạn cần nhập tên đăng nhập" );
                                document.Login.username.focus() ;
                                return false;
                            }
                            if( document.Login.password.value == "" ) {
                                alert( "Bạn cần nhập mật khẩu" );
                                document.Login.password.focus() ;
                                return false;
                            }
                            return( true );

                        }
                    </script>
                    <form name = "Login" action="?c=AccountController&m=checkLogin" method="POST" onsubmit = "return validateLogin();" >
                        <h1>
                            Đăng nhập vào website
                        </h1>
                        <div class="form-group">
                            <input name="username" type="text" placeholder="username"  />
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" placeholder="password"/>
                        </div>

                        <div class="form-group">
                            <a href="http://localhost/WEB/?c=AccountController&m=viewSignUpForm">
                                <span>
                                    Chưa có tài khoản? Đăng ký ngay!
                                </span>
                            </a>
                            <input type="submit" name="lginBtn" class="btn btn-primary" value="Đăng nhập">
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>  