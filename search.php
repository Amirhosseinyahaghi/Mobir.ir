<?php
include "header.php";
include "config.php";
?>

    <div class="container-floud" style="background:#f1f1f1;margin-top:20px ;margin-left: 40px; margin-right: 40px;">
        <div class="row" style="margin:0;">
            <div class="col-lg-12" style="padding:0 0;">
                <div class="card border-secondary mb-3" style="max-width: 100%; box-shadow: 1px 1px 4px;">
                    <div  class="card-header">همه آگهی ها</div>
                    <div class="row">
                        <?php
                            if (isset($_POST['btnsearch'])){
                                $search = $_POST['search'];
                                $sql = "SELECT * FROM mobile_info WHERE `name` LIKE '%" .$search ."%'";
                                $res = mysqli_query($conn,$sql);
                                if (!mysqli_num_rows($res) == 0){
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
                                    <div class="alert mx-auto">نتیجه ای برای جست و جوی شما وجود ندارد<i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        <?php }} ?>
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