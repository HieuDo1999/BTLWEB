    
<a href="http://localhost/WEB/?c=AccountController&m=homeClient" > Trang chủ</a>
<h2>Login</h2>
    <form action="?c=AccountController&m=checkLogin" method="POST">
    <div class="form-group">
    <input type="text" name="username" class="form-control"  value="">
    <div class="error">
       
    </div>
    </div>
    <!-- Close form-group -->
    <div class="form-group">
    <input type="text" name="password" class="form-control"  value="">
    <div class="error">
      
    </div>
    </div>
    <!-- Close form-group -->
    <div class="form-group">
    <input type="submit" name="lginBtn" class="btn btn-primary" value="Login">
    <a  href="http://localhost/WEB/?c=AccountController&m=viewSignUpForm" >Sign up</a>
    </div>
    <!-- Close form-group -->

    </form>