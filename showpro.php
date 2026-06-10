<?php
include "header.php";
include "config.php";

if (isset($_GET['proid'])){
    $id = $_GET['proid'];
    $sql = "SELECT * FROM mobile_info WHERE id =".$id;
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
}else{
    header("Location: 404.php");
}

?>
<div class="container">
    <div class="row" style="background: rgba(238,34,44,0.7); height: 50px; padding: 10px;">
        <h4 style="color: #f1f1f1; "><?php echo $row['name']; ?></h4>
    </div>
</div>
<div class="container">
   <div class="row">
       <div class="col-xs-12 col-md-4" style="margin-top: 30px;">
           <h6>تصاویر محصول</h6>
           <div class="card">
               <div class="card-body">
           <img class="img img-sm" src="data:image/jpeg;base64,<?php echo base64_encode($row['pic']); ?>" style="width:300px; height:330px; margin-top: 20px;">

               </div>
           </div>
       </div>

<div class="col-xs-12 col-md-8" style="margin-top: 30px;">
       <h6>مشخصات عمومی</h6>
       <div class="card">
           <div class="card-body">
               <div class="col-xs-6 col-md-6" style="margin-top: 15px;">
                   <h6>نام فروشنده : مجتبی قاسمی</h6><hr>
               </div>
               <div class="col-xs-6 col-md-6" style="margin-top: 15px;">
                   <h6>تاریخ ثبت :<?php echo $row['sabt_date']; ?> </h6><hr>
               </div>
               <div class="col-lg-6" style="margin-top: 15px;">
                   <h6>قیمت فروشنده :<?php echo $row['gheymat']; ?> </h6><hr>
               </div>
               <div class="col-lg-6" style="margin-top: 15px;">
                   <h6>مهلت تست : 2روز</h6><hr>
               </div>
               <div class="col-xs-12 col-md-6">
                   <br><br><br><br><br><br><br>
                   <a href="#" class="btn btn-success float-left">ثبت سفارش خرید</a>
               </div>
           </div>
       </div>
</div>



   </div>
</div>

<!-------------------->
<div class="container">
    <div class="row">
        <div class="col-lg-12" style="margin-top: 30px;">
            <div class="card">
                <div class="card-header">
                    مشخصات کالا
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 text-center" style="padding-left: 0;">
                            <div style="background: #84d697;padding: 10px 0;">
                                گارانتی
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div style="background: rgba(249, 249, 249, 0.7);padding: 10px 20px;">
                                ندارد
                            </div>
                        </div>
                        <div class="col-lg-4 text-center" style="padding-left: 0;">
                            <div style="background: #84d697;padding: 10px 0;">
                                مدت کارکرد
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div style="background: rgba(249, 249, 249, 0.7);padding: 10px 20px;">
                                6ماه
                            </div>
                        </div>
                        <div class="col-lg-4 text-center" style="padding-left: 0;">
                            <div style="background: #84d697;padding: 10px 0;">
                                نو / دست دوم
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div style="background: rgba(249, 249, 249, 0.7);padding: 10px 20px;">
                                <?php echo $row['karkard']; ?>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center" style="padding-left: 0;">
                            <div style="background: #84d697;padding: 10px 0;">
                                مشکلات
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div style="background: rgba(249, 249, 249, 0.7);padding: 10px 20px;">
                                <?php echo $row['moskhelat']; ?>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center" style="padding-left: 0;">
                            <div style="background: #84d697;padding: 10px 0;">
                                محتویات
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div style="background: rgba(249, 249, 249, 0.7);padding: 10px 20px;">
                                <?php echo $row['mohtaviat']; ?>
                            </div>
                        </div><div class="col-lg-4 text-center" style="padding-left: 0;">
                            <div style="background: #84d697;padding: 10px 0;">
                                توضیحات
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div style="background: rgba(249, 249, 249, 0.7);padding: 10px 20px;">
                                <?php echo $row['tozihat']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "foother.php";
?>