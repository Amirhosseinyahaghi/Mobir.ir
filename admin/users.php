<?php include "header.php"; ?>

<!--  ثبت کالای جدید -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">کاربر جدید</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <button class="btn btn btn-success">ثبت جدید</button>
            </div>
        </div>
    </div>
</div>
<!-- پایان ثبت کالای جدید -->

<!-- Table head options start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">کاربران</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th>شماره</th>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>ایمیل</th>
                            <th>تلفن همراه</th>
                            <th>نوع کاربر</th>
                            <th>تاریخ ثبت نام</th>
                            <th>...</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM users";
                        $res = mysqli_query($conn,$sql);
                        while ($row = mysqli_fetch_assoc($res))
                        {
                        ?>
                            <tr>
                                <td class="nr"><?php echo $row['id']; ?></td>
                                <td><?php echo $row['fname']; ?></td>
                                <td><?php echo $row['lname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['telhamrah']; ?></td>
                                <td>
                                    <?php
                                    $us_type = $row['usertype'];
                                    if($us_type == 1){
                                        echo "مدیر";
                                    }
                                    else if($us_type == 2){
                                        echo "نویسنده";
                                    }
                                    else if($us_type == 3){
                                        echo "همکار";
                                    }
                                    else if($us_type == 4){
                                        echo "عضو";
                                    }
                                    ?>
                                 </td>
                                <td><?php echo $row['user_date']; ?></td>
                                <td>
<!--                                    <input type="button" name="OK" class="get-value btn btn-success" value="OK"/>-->
                                    <button class="get-value btn btn-success" data-toggle="modal" data-target="#myModal" contenteditable="false">ویرایش</button>

                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table head options end -->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"></div>
    </div>
    <div class="modal-dialog">
        <div class="modal-content"></div>
    </div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×</span><span class="sr-only">بستن</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">ویرایش محصول</h4>
                
            </div>

            <div class="modal-body">
                <?php
                
                    
               
                $sql = "SELECT * FROM users WHERE id=2";
                $res = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($res))
                {
                    
                ?>
                
                <input type="text" value="<?php echo $row['fname']; ?>">
                <?php } ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                <button type="button" class="btn btn-primary">ذخیره تغییرات</button>
            </div>
        </div>
    </div>
</div>

<p id="info"></p>

</div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->


<script>

    $(".get-value").click(function() {
    var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".nr").text(); // Find the text
    var x = $text;
 
        
    $.ajax({
        type: 'GET',
        url: 'users.php',
        data: {album: this.title},
        success: function(response){
            content.html(response);
        }
    });    
        
        
//        document.location="users.php?id=" + $text;
});
</script>

<?php include "foother.php"; ?>
