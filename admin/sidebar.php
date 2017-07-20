<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 17.07.2017
 * Time: 15:18
 */

$num = $db->getReqCount($user_id, $token);
?>

<!-- Sidebar Start -->
<aside class="sidebar">
    <div class="sidebar-in">
        <!-- Sidebar Header Start -->
        <header>
            <!-- Logo Start -->
            <div class="logo">
                <a href="datatables.php"><img src="../img/logo.png" alt="Admin" width="180" height="52" /></a>
            </div>
            <!-- Logo End -->
            <!-- Toggle Button Start -->
            <a href="#" class="togglemenu" style="margin: 12px 0 0 0;">&nbsp;</a>
            <!-- Toggle Button End -->
            <div class="clearfix"></div>
        </header>
        <!-- Sidebar Header End -->
        <!-- Sidebar Navigation Start -->
        <nav class="navigation">
            <ul class="navi-acc" id="nav2">

                <li>
                    <a href="datatables.php" class="mailbox">Requests<span id="req-count" class="label label-custom1"><?=$num?></span></a>
                </li>

                <li>
                    <a href="files.php" class="pages">Files</a>
                </li>
<!--                <li>-->
<!--                    <a href="#extras" class="extras">Misc</a>-->
<!--                    <ul>-->
<!--                        <li><a href="icons.html">Icons</a></li>-->
<!--                        <li><a href="calendar.html">Calendar</a></li>-->
<!--                        <li><a href="gallery.html">Gallery</a></li>-->
<!--                        <li><a href="invoice.html">Invoice</a></li>-->
<!--                        <li><a href="404.html">404 Page</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="charts.html" class="charts">Charts</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#loginoptions" class="loginoptions">Login Options</a>-->
<!--                    <ul>-->
<!--                        <li><a href="login1.html">Login 1</a></li>-->
<!--                        <li><a href="login2.html">Login 2</a></li>-->
<!--                        <li><a href="lockscreen1.html">Lock Screen 1</a></li>-->
<!--                        <li><a href="lockscreen2.html">Lock Screen 2</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="maps.html" class="maps">Maps</a>-->
<!--                </li>-->
<!--            </ul>-->
            <div class="clearfix"></div>
        </nav>
        <!-- Sidebar Navigation End -->
        <!-- Shadow Start -->
        <span class="shadows"></span>
        <!-- Shadow End -->
    </div>
</aside>
<!-- Sidebar End -->
