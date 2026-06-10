<?php
include "header.php";
include "config.php";
?>

<!-- Slider -->
<div class="container-floud" style="background:#f1f1f1; margin:0 40px;">
    <div class="row">
        <div class="col-xs-12 col-lg-8">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"">
                <div class="carousel-inner" style="max-height: 400px;">
                    <?php
                    $sql = "SELECT * FROM slider";
                    $res = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($res)){

                    ?>

                    <div class="carousel-item <?php echo $row['active']; ?>">
                        <a href="<?php echo $row['link']; ?>">
                            <img class="d-block w-100" src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" alt="<?php echo $row['name']; ?>">
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-xs-12  col-lg-4 d-none d-sm-block" style="margin-top: 12px;">
            <div class="row justify-content-center" style="justify-content: center;">
                <div class="col-sm-6">
                    <a href="sabt.php">
                        <img class="mx-auto" src="img\sabt.jpg">
                    </a>
                </div>
                <div class="col-sm-6">
                    <img src="img\rahnama.jpg">
                </div>
                <div class="col-sm-6">
                    <img src="img\chanel1.jpg">
                </div>
                <div class="col-sm-6">
                    <img src="img\rahnamaf.jpg">
                </div>
            </div>
        </div>
<!--    در حالت xs فقط نمایش داده میشود  -->
        <div class="col-xs-12  col-lg-4 d-block d-sm-none" style="margin-top: 12px;">
            <div class="row" style="justify-content: space-around;">
                <div class="col-xs-3">
                    <a href="#" class="btn btn-primary">ثبت رایگان</a>
                </div>
                <div class="col-xs-3">
                    <a href="#" class="btn btn-primary">راهنمای خرید</a>
                </div>
                <div class="col-xs-3">
                    <a href="#" class="btn btn-primary">کانال تلگرام</a>
                </div>
                <div class="col-xs-3">
                    <a href="#" class="btn btn-primary">راهنمای فروش</a>
                </div>
            </div>
        </div>
<!--    end -->
    </div>
</div>
<!-- End slider -->

<!-- jadidtarinha -->
<div class="container-floud" style="background:#f1f1f1;margin-top:20px ;margin-left: 40px; margin-right: 40px;">
    <div class="card border-secondary mb-3" style="max-width: 100%; box-shadow: 1px 1px 4px;">
        <div  class="card-header">آگهی های ویژه</div>
            <div class="row" style="margin: 0;">
                <div class="scrolling-wrapper">
                    <?php
                    include "config.php";
                    $sql = "SELECT * FROM mobile_info LIMIT 12";
                    $res = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($res) > 0){
                         while ($row = mysqli_fetch_assoc($res))
                         {
                    ?>
                    <a href="showpro.php?proid=<?php echo $row["id"]; ?>">
                        <div class="cardho card">
                            <h3 class="card-title text-center"><?php echo $row["name"]; ?></h3>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['pic']); ?>" height="170px" width="170px">
                            <hr>
                            <p class="card-text text-center"><?php echo $row["gheymat"]; ?></p>
                            <button data-brackets-id="126" type="button" class="btn btn-outline-success" style="width: 100%;">خرید</button>
                        </div>
                    </a>
                    <?php
                         }
                    }else {
                        ?>
                        <div class="container">
                            <div class="row">
                                <div class="alert red mx-auto">داده ای برای نمایش وجود ندارد <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                            </div>
                        </div>
                        <?php } ?>

                </div>

            </div>
    </div>
</div>

<!-- End Jadid -->

<div class="container-floud" style="background:#f1f1f1;margin-top:20px ;margin-left: 40px; margin-right: 40px;">
    <div class="row" style="margin:0;">
        <div class="col-lg-12" style="padding:0 0;">
            <div class="card border-secondary mb-3" style="max-width: 100%; box-shadow: 1px 1px 4px;">
                <div  class="card-header">همه آگهی ها</div>
                <div class="row">
                    <?php
                    include "config.php";
                    $sql = "SELECT * FROM mobile_info LIMIT 12";
                    $res = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($res) > 0){
                        while ($row = mysqli_fetch_assoc($res))
                        {
                    ?>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="card" style="">
                            <div class="card-body mx-auto">
                                <h4 class="card-title text-center"><?php echo $row["name"]; ?></h4>
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['pic']); ?>" height="170px" width="170px">
                                <hr>
                                <p class="card-text text-center"><?php echo $row["gheymat"]; ?> تومان</p>
                                <button data-brackets-id="126" type="button" class="btn btn-outline-success" style="width: 100%;">خرید</button>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    }else{
                        ?>
                        <div class="container">
                            <div class="row">
                                <div class="alert mx-auto">داده ای برای نمایش وجود ندارد <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                            </div>
                        </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- daste ha -->

<div class="container-floud" style=" margin-top:30px ;margin-left: 40px; margin-right: 40px;">
    <div class="row" style="margin:0; justify-content: space-between;">
        <div class="col-xs-12 col-lg-6">
            <div class="card" style="box-shadow: 1px 1px 4px;">
                <div class="card-body">
                    <h3>دسته بندی</h3>
                    <hr>
                    <div style="float: right;"><img src="img/im2.jpg" > </div>
                    <div style="float: right; margin-top: 30px;">
                        <p class="pcon">مدل گوشی</p>
                        <p class="pcon"> قیمت مشتری : 1,300,000 تومان</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6 visible" style="border-left: solid 2px coral;">
                        <div style="float: right;"><img src="img/im3.jpg" style="height: 140px;"> </div>
                        <div style="float: right; margin-top: 30px;">
                            <p class="psub" style="display: flex">مدل گوشی</p>
                            <p class="psub">قیمت : 1,000,000 تومان</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div style="float: right;"><img src="img/im4.jpg" style="height: 140px;"> </div>
                        <div style="float: right; margin-top: 30px;">
                            <p class="psub">مدل گوشی</p>
                            <p class="psub">قیمت : 1,000,000 تومان</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-xs-12 col-lg-6">
            <div class="card" style="box-shadow: 1px 1px 4px;">
                <div class="card-body">
                    <h3>دسته بندی</h3>
                    <hr>
                    <div style="float: right;"><img src="img/im2.jpg" > </div>
                    <div style="float: right; margin-top: 30px;">
                        <p class="pcon">مدل گوشی</p>
                        <p class="pcon"> قیمت مشتری : 1,300,000 تومان</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6 visible" style="border-left: solid 2px coral;">
                        <div style="float: right;"><img src="img/im3.jpg" style="height: 140px;"> </div>
                        <div style="float: right; margin-top: 30px;">
                            <p class="psub" style="display: flex">مدل گوشی</p>
                            <p class="psub">قیمت : 1,000,000 تومان</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div style="float: right;"><img src="img/im4.jpg" style="height: 140px;"> </div>
                        <div style="float: right; margin-top: 30px;">
                            <p class="psub">مدل گوشی</p>
                            <p class="psub">قیمت : 1,000,000 تومان</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include "foother.php";
?>