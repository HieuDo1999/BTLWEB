<!-- <h1>sign up</h1>
<form action="?c=AccountController&m=signUp" method="POST">
    <div><input name="username" type="text" placeholder="username"  /></div>
    <div>  <input name="password" type="text" placeholder="password"/></div>
    <div> <input name="repassword" type="text" placeholder="repassword"/></div>
    <div><input name="name" type="text" placeholder="name"/></div>
    <div><input name="phone" type="text" placeholder="phone"/></div>
    <div><input name="address" type="text" placeholder="address"/></div>

    <button type="submit" >signup</button>
</form> -->

///////////////////////////////////////////

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
                	<script>
        function validateSign_up(){
    if(document.Signup.username.value == ""){
        alert("Bạn cần nhập tên đăng nhập");
        document.Signup.username.focus();
        return false;
    }
    if(document.Signup.password.value == ""){
        alert("Bạn cần nhập mật khẩu");
        document.Signup.password.focus();
        return false;
    }
    if(document.Signup.repassword.value == ""){
        alert("Bạn cần nhập lại mật khẩu");
        document.Signup.repassword.focus();
        return false;
    }
    if(document.Signup.name.value == ""){
        alert("Bạn cần nhập tên");
        document.Signup.name.focus();
        return false;
    }
    if(document.Signup.phone.value == ""){
        alert("Bạn cần nhập số điện thoại");
        document.Signup.phone.focus();
        return false;
    }
    if(document.Signup.address.value == ""){
        alert("Bạn cần nhập địa chỉ");
        document.Signup.address.focus();
        return false;
    }
    if(document.Signup.password.value != document.Signup.repassword.value){
        alert("Mật khẩu bạn vừa nhập không giống nhau.");
        document.Signup.password.focus();
        return false;
    }

    alert("bạn đã đăng ký thành công")
    return(true);
}
</script>

<form name = "Signup" action="?c=AccountController&m=signUp" method="POST" onsubmit = "return validateSign_up()">                        <h1>
                            Đăng ký tài khoản mới
                        </h1>

    					<div class="form-group">
    						<input name="username" type="text" placeholder="username"  />
    					</div>
    					<div class="form-group">
    						<input name="password" type="password" placeholder="password"/>
    					</div>
                        <div class="form-group">
                        	<input name="repassword" type="password" placeholder="repassword"/>
                        </div>
    					<div class="form-group">
    						<input name="name" type="text" placeholder="name"/>
    					</div>
    					<div class="form-group">
    						<input name="phone" type="text" placeholder="phone"/>
    					</div>
    					<div class="form-group">
    						<input name="address" type="text" placeholder="address"/>
    					</div>





                        <div class="form-group">
                            <a href="http://localhost/WEB/?c=AccountController&amp;m=login">
                                <span>
                                    Đã có tài khoản? Đăng nhập ngay!
                                </span>
                            </a>
                            <input type="submit" name="lginBtn" class="btn btn-primary" value="Đăng ký">
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>  