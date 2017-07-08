 <div id="left" >
            <div class="media user-media well-small" style="text-align: center">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="../assets/img/user.gif" />
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
                <li><a href="donors_list.php"><i class="icon-calendar"></i> Donors List </a></li>
                <li><a href="programs.php"><i class="icon-calendar"></i> Programs </a></li>
                <li><a href="agency.php"><i class="icon-calendar"></i> Agency </a></li>
                

            </ul>

        </div>