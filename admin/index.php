<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: ../login.php?msg=وارد شوید !");
}
include "header.php"; ?>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <a href="products.php">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body text-xs-left">
                                        <h3 class="pink">
                                            <?php
                                            $sql = "SELECT COUNT(id) as cnt FROM mobile_info";
                                            $res = mysqli_query($conn,$sql);
                                            $row = mysqli_fetch_assoc($res);
                                            echo $row['cnt'];
                                            ?>
                                        </h3>
                                        <span>همه ی محصولات</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-bag2 pink font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <a href="users.php">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body text-xs-left">
                                        <h3 class="teal">
                                            <?php
                                            $sql = "SELECT COUNT(id) as cnt FROM users";
                                            $res = mysqli_query($conn,$sql);
                                            $row = mysqli_fetch_assoc($res);
                                            echo $row['cnt'];
                                            ?>
                                        </h3>
                                        <span> همه ی کاربران</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-user1 teal font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body text-xs-left">
                                        <h3 class="deep-orange">89</h3>
                                        <span>نظرات</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-diagram deep-orange font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body text-xs-left">
                                        <h3 class="cyan">423</h3>
                                        <span>پیام های پشتیبانی</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-ios-help-outline cyan font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->
            <!--/ project charts -->
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-inline text-xs-center pt-2 m-0">
                                <li class="mr-1">
                                    <h6><i class="icon-circle warning"></i> <span class="grey darken-1">باقی مانده</span></h6>
                                </li>
                                <li class="mr-1">
                                    <h6><i class="icon-circle success"></i> <span class="grey darken-1">کامل شده</span></h6>
                                </li>
                            </ul>
                            <div class="chartjs height-250">
                                <canvas id="line-stacked-area" height="250"></canvas>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-xs-3 text-xs-center">
                                    <span class="text-muted">کل پروژه ها</span>
                                    <h2 class="block font-weight-normal">18</h2>
                                    <progress class="progress progress-xs mt-2 progress-success" value="70" max="100"></progress>
                                </div>
                                <div class="col-xs-3 text-xs-center">
                                    <span class="text-muted">کل کارها</span>
                                    <h2 class="block font-weight-normal">125</h2>
                                    <progress class="progress progress-xs mt-2 progress-success" value="40" max="100"></progress>
                                </div>
                                <div class="col-xs-3 text-xs-center">
                                    <span class="text-muted">کارهای کامل شده</span>
                                    <h2 class="block font-weight-normal">242</h2>
                                    <progress class="progress progress-xs mt-2 progress-success" value="60" max="100"></progress>
                                </div>
                                <div class="col-xs-3 text-xs-center">
                                    <span class="text-muted">درآمد کل</span>
                                    <h2 class="block font-weight-normal">$11,582</h2>
                                    <progress class="progress progress-xs mt-2 progress-success" value="90" max="100"></progress>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card card-inverse bg-info">
                        <div class="card-body">
                            <div class="position-relative">
                                <div class="chart-title position-absolute mt-2 ml-2 white">
                                    <h1 class="display-4">84%</h1>
                                    <span>رضایت کارمندان</span>
                                </div>
                                <canvas id="emp-satisfaction" class="height-400 block"></canvas>
                                <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">
                                    <a href="#" class="btn bg-info bg-darken-3 mr-1 white">آمار <i class="icon-stats-bars"></i></a> برای سال گذشته.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ project charts -->
            <!-- Recent invoice with Statistics -->
            <div class="row match-height">
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-deep-orange media-left media-middle">
                                    <i class="icon-user1 font-large-2 white"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h5 class="deep-orange">کاربرهای جدید</h5>
                                    <h5 class="text-bold-400">1,22,356</h5>
                                    <progress class="progress progress-sm progress-deep-orange mt-1 mb-0" value="45" max="100"></progress>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-cyan media-left media-middle">
                                    <i class="icon-camera7 font-large-2 white"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h5>محصولات جدید</h5>
                                    <h5 class="text-bold-400">28</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 media-body text-xs-left">
                                    <h5>کاربران جدید</h5>
                                    <h5 class="text-bold-400">1,22,356</h5>
                                </div>
                                <div class="p-2 text-xs-center bg-teal media-right media-middle">
                                    <i class="icon-user1 font-large-2 white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">فاکتوهای اخیر</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <p>مجموع فاکتورهای پرداخت شده 240, unpaid 150. <span class="float-xs-right"><a href="#">Invoice Summary <i class="icon-arrow-right2"></i></a></span></p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>صورت وضعیت#</th>
                                        <th>نام مشتری</th>
                                        <th>وضعیت</th>
                                        <th>ناشی از</th>
                                        <th>مقدار</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-truncate"><a href="#">INV-001001</a></td>
                                        <td class="text-truncate">Elizabeth W.</td>
                                        <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                        <td class="text-truncate">10/05/2016</td>
                                        <td class="text-truncate">$ 1200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><a href="#">INV-001012</a></td>
                                        <td class="text-truncate">Andrew D.</td>
                                        <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                        <td class="text-truncate">20/07/2016</td>
                                        <td class="text-truncate">$ 152.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><a href="#">INV-001401</a></td>
                                        <td class="text-truncate">Megan S.</td>
                                        <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                                        <td class="text-truncate">16/11/2016</td>
                                        <td class="text-truncate">$ 1450.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><a href="#">INV-01112</a></td>
                                        <td class="text-truncate">Doris R.</td>
                                        <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                                        <td class="text-truncate">11/12/2016</td>
                                        <td class="text-truncate">$ 5685.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><a href="#">INV-008101</a></td>
                                        <td class="text-truncate">Walter R.</td>
                                        <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                                        <td class="text-truncate">18/05/2016</td>
                                        <td class="text-truncate">$ 685.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent invoice with Statistics -->
            <div class="row match-height">
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card" style="height: 440px;">
                        <div class="card-body">
                            <img class="card-img-top img-fluid" src="../assets/images/carousel/05.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">اساس</h4>
                                <p class="card-text">بعضی از نمونه های سریع نمونه ای که بر روی عنوان کارت ساخته می شوند و بخش عمده ای از محتوای کارت را تشکیل می دهند</p>
                                <a href="#" class="btn btn-outline-pink">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card" style="height: 440px;">
                        <div class="card-body">
                            <div class="card-block">
                                <h4 class="card-title">لیست گروه ها</h4>
                                <p class="card-text">بعضی از نمونه های سریع نمونه ای که بر روی عنوان کارت ساخته می شوند و بخش عمده ای از محتوای کارت را تشکیل می دهند</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <span class="tag tag-default tag-pill bg-primary float-xs-right">4</span> فردا فقط نفرت
                                </li>
                                <li class="list-group-item">
                                    <span class="tag tag-default tag-pill bg-info float-xs-right">2</span> Dapibus ac facilisis in
                                </li>
                                <li class="list-group-item">
                                    <span class="tag tag-default tag-pill bg-warning float-xs-right">1</span> Morbi leo risus
                                </li>
                                <li class="list-group-item">
                                    <span class="tag tag-default tag-pill bg-success float-xs-right">3</span> Porta ac consectetur ac
                                </li>
                                <li class="list-group-item">
                                    <span class="tag tag-default tag-pill bg-danger float-xs-right">8</span> Vestibulum at eros
                                </li>
                            </ul>
                            <div class="card-block">
                                <a href="#" class="card-link">لینک کارت</a>
                                <a href="#" class="card-link">لینک نویسنده</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-sm-12">
                    <div class="card" style="height: 440px;">
                        <div class="card-body">
                            <div class="card-block">
                                <h4 class="card-title">چرخ فلک</h4>
                                <h6 class="card-subtitle text-muted">زیرنویس کارت پشتیبانی</h6>
                            </div>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item">
                                        <img src="../assets/images/carousel/02.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item active">
                                        <img src="../assets/images/carousel/03.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../assets/images/carousel/01.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="icon-prev" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="icon-next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="card-block">
                                <p class="card-text">بعضی از نمونه های سریع نمونه ای که بر روی عنوان کارت ساخته می شوند و بخش عمده ای از محتوای کارت را تشکیل می دهند</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->


<?php include "foother.php"; ?>
