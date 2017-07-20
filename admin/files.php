<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 17.07.2017
 * Time: 16:03
 */

require_once('php/functions.php');
require_once('php/Database.php');
$user_id = $_SESSION['user_id'];
$token = $_COOKIE['token'];
$db = new Database();

$data = $db->getFeedbacks($user_id, $token);


include "head.php";

?>
<style>
    tr > td:{
        transition: background-color 0.5s linear;
    }

    .input-field-title{
        margin-top: 37px;
    }

    .submit {
        margin: 20px 0 20px 0;
    }

</style>
<script>
    function toggleHidden(id) {
        $("#" + id).toggleClass('hidden-sec');
      }

    function makeSeen(id) {
        $.ajax({
            type: 'POST',
            url: "http://localhost/china2/admin/php/makeSeen.php",
            data: "id=" + id + "&user_id=<?php echo $_SESSION['user_id']; ?>&token=<?php echo $_COOKIE['token']; ?>",
            success:
                function(data){
                    $("tr#" + id + " > td > button.seen").toggle();
                    $("tr#" + id + " > td > button.unseen").toggle();

                    $("tr#" + id + " > td").css("background-color", "#f5f5f5");
                    $('#req-count').html(parseInt($('#req-count').html(), 10)-1);
                }
        });
    }

    function deleteFeedback(id) {
        $.ajax({
            type: 'POST',
            url: "http://localhost/china2/admin/php/deleteFeedback.php",
            data: "id=" + id + "&user_id=<?php echo $_SESSION['user_id']; ?>&token=<?php echo $_COOKIE['token']; ?>",
            success:
                function(data){
                    $("#" + id).hide();


                }
        });
    }
    //    setTimeout(function () {
    //        $('tr.success').removeClass('success').addClass('active');
    //    }, 1000);
</script>
<body>
<!-- Wrapper Start -->
<div class="wrapper">
    <div class="structure-row">

        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- Right Section Start -->
        <div class="right-sec">

            <!-- Right Section Header -->

            <?php include "header.php"; ?>

            <!-- Content Section Start -->
            <div class="content-section">
                <div class="container-liquid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="sec-box">
                                <a class="closethis">Close</a>
                                <header>
                                    <h2 class="heading" onclick="toggleHidden('add-feedback')">Add Feedback</h2>
                                </header>
                                <div class="contents hidden-sec" id="add-feedback">
                                    <a class="togglethis">Toggle ADD</a>
                                    <div class="table-box">
                                        <form method="post" action="php/addFeedback.php" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col-md-3 col-md-push-1 input-field-title">Name</div>
                                                <div class="col-md-7"><input type="text" name="name" placeholder="Name" class="form-control"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-md-push-1 input-field-title">Photo</div>
                                                <div class="col-md-6"><input type="file" name="photo"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-md-push-1 input-field-title">Feedback</div>
                                                <div class="col-md-6"><textarea name="feedback" rows="3" cols="50" class="form-control"></textarea></div>
                                            </div>

                                                <div class="center submit">
                                                    <input type="submit" class="btn btn-primary style2 center-block" value="Submit">
                                                </div>

                                            <input type="hidden" value="<?=$user_id?>" name="user_id">
                                            <input type="hidden" value="<?=$token?>" name="token">

                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="sec-box">
                                <a class="closethis">Close</a>
                                <header>
                                    <h2 class="heading" onclick="toggleHidden('feedbacks')">Feedbacks</h2>
                                </header>
                                <div class="contents hidden-sec" id="feedbacks">
                                    <a class="togglethis">Toggle</a>
                                    <div id="accordion" class="panel-group boxpadding">
                                        <?php foreach ($data as $datum) {?>

                                        <div class="panel panel-default" id="<?=$datum['id']?>">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#collapse<?=$datum['id']?>" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                                        <?=$datum['name']?>
                                                    </a>
                                                    <button class="btn btn-danger btn-xs" style="float: right;" onclick="deleteFeedback(<?=$datum['id']?>)">X</button>
                                                </h4>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapse<?=$datum['id']?>" style="height: 0px;">
                                                <div class="panel-body">
                                                    <img src="<?= BASE_URL."img/feedback_photo/". $datum['photo']?>" style=" vertical-align: middle; border-radius: 50%; float: left; margin-right: 5px" width="120px" height="120px">
                                                    <?=$datum['feedback']?>
                                                </div>
                                            </div>
                                        </div>

                                        <?php    } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Content Section End -->
        </div>
        <!-- Right Section End -->
    </div>
</div>
<!-- Wrapper End -->


</body>

<!-- Mirrored from www.extracoding.com/demo/html/adminise/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Mar 2017 21:54:37 GMT -->
</html>
