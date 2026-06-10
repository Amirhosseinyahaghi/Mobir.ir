<?php
include "header.php";
?>


    <!-- jadidtarinha -->
    <div class="container-floud" style="background:#f1f1f1;margin-top:20px ;margin-left: 40px; margin-right: 40px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3" style="max-width: 100%; box-shadow: 1px 1px 4px;">
                    <div  class="card-header">اطلاعات شخصی :</div>
                    <div class="card">
                        <h4 class="text-center" style="margin-top: 30px;">ثبت حساب کاربری جدید</h4>

                        <div class="row">
                            <div class="col-xs-12 offset-sm-2 col-sm-8 offset-sm-2 offset-md-3 col-md-6 offset-md-3">
                                <form action="chk_rigester.php" method="post">
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">نام :</label>
                                            <input type="text" class="form-control"  placeholder="نام" name="fname" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">نام خانوادگی :</label>
                                            <input type="text" class="form-control" placeholder="نام خانوادگی" name="lname" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ایمیل :</label>
                                            <input type="email" class="form-control" aria-describedby="emailHelp" required placeholder="ایمیل" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">پسورد :</label>
                                            <input type="password" class="form-control" placeholder="پسورد" name="pass1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">تکرار پسورد :</label>
                                            <input type="password" class="form-control" placeholder="تکرار پسورد" name="pass2" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">تلفن ثابت :</label>
                                            <input type="text" class="form-control" placeholder="تلفن ثابت" name="tel">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">تلفن همراه :</label>
                                            <input type="text" class="form-control" placeholder="تلفن همراه" name="telhamrah" required>
                                        </div>
                                        <br>
                                        <h6>اگر شما قبلا ثبت نام کرده ايد ، لطفا وارد شويد <a href="#">صفحه ورود</a></h6>
                                                 <?php if(isset($_GET['msg'])){
                                                     echo "<div class=\"alert alert-dismissible alert-danger\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                            <strong>";
                                                     echo $_GET['msg'];
                                                     echo"</strong></div>";
                                                 }
                                                 ?>

                                        <button type="submit" class="btn btn-primary" name="sabt" style="float: left; width: 150px; margin-bottom: 50px;">ثبت نام</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Jadid -->




<?php
include "foother.php";
?>