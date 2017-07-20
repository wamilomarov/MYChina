<?php
/**
 * Created by PhpStorm.
 * User: Shamil
 * Date: 17.07.2017
 * Time: 14:45
 */


?>

<!-- Right Section Header Start -->
<header>
    <!-- User Section Start -->
    <div class="user">
        <figure>
            <a href="#"><img src="<?=BASE_URL."img/user_profile/".$_SESSION['photo']?>" alt="Adminise" /></a>
        </figure>
        <div class="welcome">
            <p>Welcome</p>
            <h5><a href="#"><?=$_SESSION['username']?></a></h5>
        </div>
    </div>
    <!-- User Section End -->

    <!-- Header Top Navigation Start -->
    <nav class="topnav">
        <ul id="nav1">
            <li class="settings">
                <a href="#"><i class="glyphicon glyphicon-user"></i>User</a>
                <div class="popdown popdown-right settings">
                    <nav>
                        <a href="php/logout.php"><i class="glyphicon glyphicon-log-out"></i>Log out</a>
                    </nav>
                </div>
            </li>
        </ul>
    </nav>
    <!-- Header Top Navigation End -->
    <div class="clearfix"></div>
</header>
<!-- Right Section Header End -->
