<?php
include "header.php";
include  "config.php";


if (isset($_POST['name']) || isset($_POST['serial']) || isset($_POST['sabt'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $telhamrah = $_POST['telhamrah'];
    if((isset($_FILES["image"])) && ($_FILES["image"]["size"] > 0)) {
        $imgSize = $_FILES["image"]["size"];
        $imgType = $_FILES["image"]["type"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $fp = fopen($tmpName, 'r');
        $imageName = fread($fp, filesize($tmpName));

        if (!get_magic_quotes_gpc())
            $imageName = addslashes($imageName);

        fclose($fp);
    }
    $sql = "UPDATE users SET lname='$lname',fname='$fname',email='$email',tel='$tel',telhamrah='$telhamrah',pic='$imageName' WHERE id=".$_GET['usid'];
    $res = mysqli_query($conn,$sql);
    if ($res)
    {
        echo "<script> const toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});

toast({
  type: 'success',
  title: 'با موفقیت ثبت شد'
})</script>";
    }

    else echo "error";
}

//خواندن اطلاعات کاربر که ایدی ان با استفاده از گت فرستاده شده است . برای نمایش در فرم
if (isset($_GET['usid'])){
    $sql2 = "SELECT * FROM users WHERE id=".$_GET['usid'];
    $res = mysqli_query($conn,$sql2);
    $row = mysqli_fetch_assoc($res);
}

?>


    <!-- sabt -->
    <div class="container-floud" style="background:#f1f1f1;margin-top:20px ;margin-left: 40px; margin-right: 40px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3" style="max-width: 100%; box-shadow: 1px 1px 4px;">
                    <div  class="card-header">ویرایش پروفایل :</div>
                    <div class="card">
                        <h4 class="text-center" style="margin-top: 30px; margin-bottom: 40px;"> ویرایش پروفایل</h4>
                        <i class="fa fa-user fa-3x text-center" aria-hidden="true"></i>
                        <div class="row">
                            <form action="" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><i class="fa fa-user-circle" aria-hidden="true"></i> نام :</label>
                                            <input type="text" value="<?php echo $row['fname']; ?>" class="form-control"  placeholder="نام" name="fname" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                        <div class="form-group">
                                            <label> <i class="fa fa-user-circle-o" aria-hidden="true"></i> نام خانوادگی :</label>
                                            <input type="text" value="<?php echo $row['lname']; ?>" class="form-control" placeholder="نام خانوادگی" name="lname" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                        <div class="form-group">
                                            <label> <i class="fa fa-envelope" aria-hidden="true"></i> ایمیل :</label>
                                            <input type="email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Exampel@yahoo.com" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> <i class="fa fa-phone" aria-hidden="true"></i> تلفن :</label>
                                            <input type="number" value="<?php echo $row['tel']; ?>" class="form-control" placeholder="تلفن ثابت" name="tel" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> <i class="fa fa-mobile" aria-hidden="true"></i> تلفن همراه :</label>
                                            <input type="number" value="<?php echo $row['telhamrah']; ?>" class="form-control" placeholder="تلفن همراه" name="telhamrah" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> <i class="fa fa-calendar" aria-hidden="true"></i> تاریخ ثبت نام :</label>
                                            <input type="date" value="<?php echo $row['user_date']; ?>" class="form-control" name="date"></input>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"><i class="fa fa-camera" aria-hidden="true"></i> تصویر پروفایل :</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>


                                    <br>
                                    <?php if(isset($_GET['msg'])){
                                        echo "<div class=\"alert alert-dismissible alert-danger\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                            <strong>";
                                        echo $_GET['msg'];
                                        echo"</strong></div>";
                                    }
                                    ?>
                                    <div class="col-xs-12 offset-sm-4 col-sm-4 offset-sm-4 offset-md-5 col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-primary" name="sabt" style=" width: 150px;margin:40px auto; background-color: #bf336c;">اعمال تغییرات</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- End sabt -->




<?php
include "foother.php";
?>