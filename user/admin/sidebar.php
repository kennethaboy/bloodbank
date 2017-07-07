 <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading">Hello <?php echo $user_row['user_last']. " " .$user_row['user_first'];?></h5>
                  
                </div>
                <br />
            </div>
            <ul id="menu" class="collapse">                
                <li class="panel active">
                    <a href="home.php" >
                        <i class="icon-table"></i> Dashboard                       
                    </a>                   
                </li>


                <li><a href="programs.php"><i class="icon-android"></i> Programs</a></li>
                <li><a href="users.php"><i class="icon-android"></i> Users</a></li>
                <li><a href="schedule.php"><i class="icon-calendar"></i> Schedule</a></li>
                <li><a href="inventory.php"><i class="icon-calendar"></i> Inventory</a></li>
            </ul>

        </div>