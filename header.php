<?php
session_start();
//if(!isset($_SESSION['username'])){
//    header("location: login.php?msg=وارد شوید !");
//}

include "config.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT id,fname,password,usertype FROM users WHERE fname='$user' AND password='$pass'";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    if (mysqli_num_rows($res) == 1){
        $_SESSION['username'] = $user;
        $_SESSION['usid'] = $row['id'];

// چک کردن نوع کاربر
        // 1=modir - 2=nevisande - 3=hamkar - 4=ozv
        if ($row['usertype'] == 1){
            $_SESSION['usertype'] = $row['usertype'];
        }elseif ($row['usertype'] == 2){
            $_SESSION['usertype'] = $row['usertype'];
        }elseif ($row['usertype'] == 3){
            $_SESSION['usertype'] = $row['usertype'];
        }elseif ($row['usertype'] == 4){
            $_SESSION['usertype'] = $row['usertype'];
        }

        header("location: index.php");
        //-----------------------
    }else{
        header("location: login.php?msg=0");
    }
}

//--------------------------
if(isset($_GET['admin'])){
    if ($_SESSION['usertype'] == 1){
        header("location: admin\index.php");
    }elseif ($_SESSION['usertype'] == 2){
        header("location: nevisande\index.php");
    }elseif ($_SESSION['usertype'] == 3){

    }elseif ($_SESSION['usertype'] == 4){

    }
}
//--------------------------
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>mobir.ir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css" media="screen">
    <link rel="stylesheet" href="css/custom.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" sizes="32x32" href="favicon.ico">

    <script src="https://unpkg.com/sweetalert2@7.20.7/dist/sweetalert2.all.js"></script>


<!--    background anim-->
    <link rel="stylesheet" type="text/css" href="bg/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="bg/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="bg/css/component.css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800|Clicker+Script' rel='stylesheet' type='text/css'>
<!--    End background anim-->

</head>
<body class="rtl">
<!-- Header -->
<!-- start navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="padding: 0;">
    <a class="navbar-brand" href="#">MoBir</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> صفحه اصلی<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php"><i class="fa fa-id-card-o" aria-hidden="true"></i> درباره ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> تماس با ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-tags" aria-hidden="true"></i> قوانین</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <?php
            if(isset($_SESSION['username'])) { ?>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 40px; border-radius: 0;">
                        <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i><i>   </i></span><span class="user-name"><?php echo $_SESSION['username']; ?></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="editprof.php?usid=<?php echo $_SESSION['usid']; ?>"><i class="fa fa-user" aria-hidden="true"></i> ویرایش پروفایل</a>
                        <a class="dropdown-item" href="index.php?admin=admin"><i class="fa fa-user" aria-hidden="true"></i> مدیریت</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-ticket" aria-hidden="true"></i> ارسال تیکت</a>
                        <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> خروج</a>
                    </div>
                </div>
            <?php
            }else{
            ?>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="height: 40px; border-radius: 0;">ورود</button>
            <a href="rigster.php" class="btn btn-secondary" style="height: 40px; border-radius: 0;"> ثبت نام </a>
            <?php } ?>
        </form>
    </div>
</nav>
<!-- vorod dialog -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ورود</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">نام کاربری :</label>
                        <input type="text" class="form-control" id="user" name="username">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">پسورد :</label>
                        <input type="password" class="form-control" id="pass" name="password">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">انصراف</button>
                        <button type="submit" class="btn btn-primary" name="vorod">ورود</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- End vorod dialog -->

<!-- End navbar -->

<div class="container-fluid demo-2" style="padding: 0;">
    <div class="content">
        <div id="large-header" class="large-header" style="height: 279px;">

            <div class="row" style="justify-content:space-around;">
                <div class="col-xs-6 col-sm-6 mx-auto" style="margin-top:40px;">
                    <form action="search.php" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" required placeholder="جست و جوی ..." style="background: #f9f1e99c; border-radius: 0 .25rem .25rem 0;">
                            <span class="input-group-btn">
                             <button class="btn btn-default" type="submit" name="btnsearch" style="border-radius: .25rem 0 0 .25rem;">برو !</button>
                        </span>
                        </div>
                    </form>
                </div>
            </div>
            <canvas id="demo-canvas"></canvas>
            <h1 class="main-title">Mobir</h1>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark" style="margin-bottom: 10px; background: #292b7af0;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">صفحه اصلی<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">فروشگاه ها</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!--<div class="jumbotron">-->
<!--    <div class="container">-->
<!--        <div class="row" style="justify-content:space-around;">-->
<!--            <div class="col-lg-6 mx-auto" style="margin-top:40px;">-->
<!--                <form>-->
<!--                    <div class="input-group">-->
<!--                        <input type="text" class="form-control" placeholder="جست و جوی ...">-->
<!--                        <span class="input-group-btn">-->
<!--                             <button class="btn btn-default" type="button">برو !</button>-->
<!--                        </span>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


<!-- End Header -->

<!--    <nav class="navbar navbar-expand-lg navbar-dark" style=" background: #45454575;;">-->
<!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!---->
<!--        <div class="collapse navbar-collapse" id="navbarColor02">-->
<!--            <ul class="navbar-nav ml-auto">-->
<!--                <li class="nav-item active">-->
<!--                    <a class="nav-link" href="index.php">صفحه اصلی<span class="sr-only">(current)</span></a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">فروشگاه ها</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </nav>-->
<!--</div>-->

