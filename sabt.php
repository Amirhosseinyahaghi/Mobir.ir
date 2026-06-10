<?php
include "header.php";
include  "config.php";


if (isset($_POST['name']) || isset($_POST['serial']) || isset($_POST['sabt'])){
    $name = $_POST['name'];
    $brandid = $_POST['brand'];
    $serial = $_POST['serial'];
    $gheymat = $_POST['gheymat'];
    $moskhlat = $_POST['moskhlat'];
    $mohtaviat = $_POST['mohtaviat'];
    $tozihat = $_POST['tozihat'];
    $karkard = $_POST['karkard'];
    $date = date("Y-m-d H:i:s");
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

    $sql = "INSERT INTO `mobile_info` (`id`, `name`, `brand_id`, `serial`, `gheymat`, `moskhelat`, `mohtaviat`, `tozihat`, `karkard`,`pic`, `sabt_date`) VALUES (NULL, '$name', '$brandid' , '$serial', '$gheymat', '$moskhlat', '$mohtaviat', '$tozihat', '$karkard', '$imageName', '$date');";
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
?>


    <!-- sabt -->
    <div class="container-floud" style="background:#f1f1f1;margin-top:20px ;margin-left: 40px; margin-right: 40px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3" style="max-width: 100%; box-shadow: 1px 1px 4px;">
                    <div  class="card-header">ثبت کالای شما :</div>
                    <div class="card">
                        <h4 class="text-center" style="margin-top: 30px; margin-bottom: 40px;">ثبت کالای جدید</h4>
                        <div class="row">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <fieldset>
                              <div class="offset-md-1 col-md-11">
                                  <label for="exampleInputEmail1">نوع : </label>
                                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                      <label class="btn btn-secondary active">
                                          <input type="radio" name="karkard" id="option1" value="on" autocomplete="on" checked>گوشی نو
                                      </label>
                                      <label class="btn btn-secondary">
                                          <input type="radio" name="karkard" id="option2" value="off" autocomplete="off"> گوشی کارکرده
                                      </label>
                                  </div>
                              </div>
                             <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">نام :</label>
                                            <input type="text" class="form-control"  placeholder="نام" name="name" required>
                                        </div>
                            </div>
                            <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                        <div class="form-group">
                                            <label>سریال :</label>
                                            <input type="number" class="form-control" placeholder="سریال گوشی" name="serial" required>
                                        </div>
                            </div>

                            <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                <div class="form-group">
                                    <label>برند :</label><br>
                                    <select name="brand" class="custom-select" id="inputGroupSelect01" style="width: 100%">
                                        <option selected>انتخاب کنید ...</option>
                                        <?php
                                            $sql = "SELECT * FROM brands";
                                            $res = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($res)){
                                        ?>
                                        <option value="<?php echo $row['brand_id'];?>"><?php echo $row['b_name'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                             </div>

                            <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                <div class="form-group">
                                    <label>قیمت :</label>
                                    <input type="text" class="form-control" placeholder="قیمت (تومان)" name="gheymat">
                                </div>
                            </div>
                            <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">مشکلات :</label>
                                            <textarea class="form-control" placeholder="مشکلات" name="moskhlat"></textarea>
                                        </div>
                            </div>
                            <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">محتویات :</label>
                                            <textarea class="form-control" placeholder="محتویات" name="mohtaviat"></textarea>
                                        </div>
                            </div>
                            <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">توضیحات :</label>
                                            <textarea class="form-control" placeholder="توضیحات کامل" name="tozihat"></textarea>
                                        </div>
                            </div>
                             <div class="col-xs-12 offset-sm-1 col-sm-8 offset-sm-1 offset-md-1 col-md-4 offset-md-1">
                                   <div class="form-group">
                                       <label for="exampleInputPassword1">تصویر :</label>
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
                                <button type="submit" class="btn btn-primary" name="sabt" style=" width: 150px;margin:40px auto; background-color: #bf336c;">ثبت</button>
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