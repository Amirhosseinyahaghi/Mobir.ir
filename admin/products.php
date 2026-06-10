<?php include "header.php"; ?>

<!--  ثبت کالای جدید -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">محصول جدید</h4>
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
                <h4 class="card-title">محصولات</h4>
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

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="text-align:center;" class="">id</th>
                            <th style="text-align:center;" class="">نام</th>
                            <th style="text-align:center;" class="">سریال</th>
                            <th style="text-align:center;" class="">قیمت</th>
                            <th style="text-align:center;" class="">برند</th>
                            <th style="text-align:center;" class="">تاریخ ثبت</th>
                            <th style="text-align:center;" class="">...</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "select * from mobile_info";
                        $result = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td style="text-align:center;" class=""><?php echo $row['id']; ?></td>
                            <td class=""><?php echo $row['name']; ?></td>
                            <td style="text-align:center;" class=""><?php echo $row['serial']; ?></td>
                            <td style="text-align:center;" class=""><?php echo $row['gheymat']; ?></td>
                            <td style="text-align:center;" class=""></td>
                            <td style="text-align:center;" class=""><?php echo $row['sabt_date']; ?></td>
                            <td style="text-align:center;">
                                <button class="btn btn-success" data-toggle="modal" data-target="#myModal" contenteditable="false">ویرایش</button>
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
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                <button type="button" class="btn btn-primary">ذخیره تغییرات</button>
            </div>
        </div>
    </div>
</div>
<!------------>

</div>
</div>
</div>

<script>
    $(".btn[data-target='#myModal']").click(function() {
        var columnHeadings = $("thead th").map(function() {
            return $(this).text();
        }).get();
        columnHeadings.pop();
        var columnValues = $(this).parent().siblings().map(function() {
            return $(this).text();
        }).get();
        var modalBody = $('<div id="modalContent"></div>');
        var modalForm = $('<form role="form" name="modalForm" action="products.php" method="post"></form>');
        $.each(columnHeadings, function(i, columnHeader) {
            var formGroup = $('<div class="form-group"></div>');
            formGroup.append('<label for="'+columnHeader+'">'+columnHeader+'</label>');
            formGroup.append('<input class="form-control" name="'+columnHeader+i+'" id="'+columnHeader+i+'" value="'+columnValues[i]+'" />');
            modalForm.append(formGroup);
        });
        modalBody.append(modalForm);
        $('.modal-body').html(modalBody);
    });
    $('.modal-footer .btn-primary').click(function() {
        $('form[name="modalForm"]').submit();
    });
</script>


<?php include "foother.php"; ?>
