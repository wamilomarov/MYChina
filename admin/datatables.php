<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 17.07.2017
 * Time: 02:48
 */

require_once('php/functions.php');
require_once('php/Database.php');
$user_id = $_SESSION['user_id'];
$token = $_COOKIE['token'];
$db = new Database();

$data = $db->getRequests($user_id, $token);


include "head.php";

?>
<style>
    tr > td:{
        transition: background-color 0.5s linear;
    }
</style>
<script>

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

    function makeNotSeen(id) {
        $.ajax({
            type: 'POST',
            url: "http://localhost/china2/admin/php/makeNotSeen.php",
            data: "id=" + id + "&user_id=<?php echo $_SESSION['user_id']; ?>&token=<?php echo $_COOKIE['token']; ?>",
            success:
                function(data){
                    $("tr#" + id + " > td > button.seen").toggle();
                    $("tr#" + id + " > td > button.unseen").toggle();

                    $("tr#" + id + " > td").css("background-color", "#dff0d8");
                    $('#req-count').html(parseInt($('#req-count').html(), 10)+1);

                }
        });
    }

    function loadMore(n) {
        $("#more-button").hide();
        $("#bottom").html("<img src='../img/ajax-loader.gif' id = 'loading'>");
        $.ajax({
            type: 'POST',
            url: "http://localhost/china2/admin/php/loadMore.php",
            data: "offset=" + n + "&user_id=<?php echo $_SESSION['user_id']; ?>&token=<?php echo $_COOKIE['token']; ?>",
            success:
                function(data){
                    $("#bottom").empty();
                    $("#more-button").show();
                    $("#req-table").append(data);
                    n++;
                    $("#loading").hide();
                    $("#bottom").html("<button class='btn btn-lg' onclick='loadMore(" + n + ")' id = 'more-button'>More...</button>");
                }
        });
    }
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
                                    <h2 class="heading">Requests</h2>
                                </header>
                                <div class="contents">
                                    <a class="togglethis">Toggle</a>
                                    <section>
                                        <table class="table table-bordered" id="req-table">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th class="center">Time</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($data as $datum) { ?>

                                                <tr class="<?php echo $datum['seen'] == 1 ? "active" : "success"; ?>" id="<?=$datum['id']?>" style="transition:background-color 0.5s ease">
                                                    <td><?= $datum['name'] ?></td>
                                                    <td><?= $datum['phone'] ?></td>
                                                    <td><?= $datum['email'] ?></td>
                                                    <td class="center"><?= date("j M Y H:i:s", strtotime($datum['created_at'])) ?></td>
                                                    <td >
                                                        <button class="btn seen" <?php echo $datum['seen'] == 1 ? 'style = "display: none"' : ''; ?> onclick="makeSeen(<?=$datum['id']?>)">Seen</button>
                                                        <button class="btn unseen" <?php echo $datum['seen'] == 0 ? 'style = "display: none"' : ''; ?> onclick="makeNotSeen(<?=$datum['id']?>)">Not Seen</button>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                            </tbody>
                                        </table>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div align="center" style="margin-top: 10px" id="bottom">
                        <button class="btn btn-lg" id="more-button" onclick="loadMore(2)">More...</button>

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
