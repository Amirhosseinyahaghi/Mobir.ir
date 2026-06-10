<?php
include "header.php";
?>
<style>
    .wrapper {
        margin-top: 80px;
        margin-bottom: 80px;
    }

    .form-signin {
        max-width: 380px;
        padding: 15px 35px 45px;
        margin: 0 auto;
        background-color: #fff;
        border: 1px solid rgba(0,0,0,0.1);

    .form-signin-heading,
    .checkbox {
        margin-bottom: 30px;
    }

    .checkbox {
        font-weight: normal;
    }

    .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
    @include box-sizing(border-box);

    &:focus {
         z-index: 2;
     }
    }

    input[type="text"] {
        margin-bottom: -1px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    input[type="password"] {
        margin-bottom: 20px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    }

</style>

    <div class="wrapper">
        <form class="form-signin" method="post" action="">
            <div class="alert-warning mx-auto" style="margin-bottom: 10px; text-align: center">
                <?php
                if(isset($_GET['msg'])){
                    echo 'نام کاربری و یا رمز عبور شما اشتباه است !!!';
                }
                ?>
            </div>
            <h2 class="form-signin-heading mx-auto">فرم ورود</h2>
            <i class="fa fa-user" style="margin-top: 20px;"></i>   نام کاربری
            <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" style="height: 45px;" />
            <i class="fa fa-user" style="margin-top: 20px;"></i>   رمز عبور
            <input type="password" class="form-control" name="password" placeholder="Password" required="" style="height: 45px;"/>
            <label class="checkbox" style="margin: 10px 20px 10px 0;">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> مرا بخاطر بسپار
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">ورود</button>
        </form>
    </div>
<?php
include "foother.php";
?>