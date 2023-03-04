  <!------------------------LEFT ----------------- ---------------->
  <div class="left">
    <!------------------------for keeping profile and remove button for sidenav----------------- ---------------->
    <div class="image-removebox">

      <a href="mypage.php" class="profile">
        <div class="profile-photo">
          <img src="" alt="" class="profile-photo">
        </div>
        <div class="handle">
          <h4><?php echo "{$firstname} {$lastname}"; ?> </h4>
          <h6> <?php echo "{$email}"; ?> </h6>
        </div>
      </a>

      <a href="Javascript:void(0)" onclick="closenv()" class="remove-bar"> <i class="fa fa-remove remove"></i> </a>
    </div>

    <!---------------------end for keeping profile and remove button for sidenav----------------- ---------------->


    <!------------------------SIDEBAR-------------------active--------------->
    <div class="sidebar">


      <a href="dashboard.php" class="menu-item">
      <span> <i class="fa fa-home" aria-hidden="true"></i> </span>
        <h3>Dashboard</h3>
      </a>

      <a href="Javascript:void(0)" class="menu-item active" onclick="myFunction()">
         <span> <i class="fa fa-product-hunt" aria-hidden="true"></i> </span>
        <h3>Manage Users </h3>
        <span> <i class="fa fa-caret-down" aria-hidden="true"></i> </span>
      </a>

      <div id="myDropdown" class="dropdown-exams" >
        <a href="all_users.php" class="menu-item">
           <span> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
          <h3>All Users</h3>
        </a>
        <a href="restrict_users.php" class="menu-item">
          <span> <i class="fa fa-phone" aria-hidden="true"></i> </span>
          <h3>Restrict Users</h3>
        </a>
        <a href="delete_users.php" class="menu-item">
          <span> <i class="fa fa-comment" aria-hidden="true"></i> </span>
          <h3> Delete Users </h3>
        </a>
      </div>

      <a href="new_users.php" class="menu-item">
        <span> <i class="fa fa-plus" aria-hidden="true"></i> </span>
        <h3>New Users</h3>
      </a>


  <!---------------------------------------------------------- VERIFICATION SECTION ------------------------------------------------------->
  <?php
      $countPendingVerification = $notifyInstance->countPendingVerifications();
      ?>

      <?php if ($countPendingVerification == 0) :  ?>
        <a href="javascript:void(0)" onclick="agents()" class="menu-item">
          <span> <i class="fa fa-users" aria-hidden="true"></i> </span>
          <h3>Verification</h3>
          <span> <i class="fa fa-caret-down" aria-hidden="true"></i> </span>
        </a>
      <?php else : ?>

        <a href="javascript:void(0)" onclick="agents()" class="menu-item">
        <span> <i class="fa fa-users" aria-hidden="true"></i> </span>
          <h3>Verification </h3>
          <span><small class="notification-count"><?php echo $countPendingVerification; ?></small></span>
          <span> <i class="fa fa-caret-down" aria-hidden="true"></i> </span>
        </a>
      <?php endif ?>

      <div id="agents" class="dropdown-exams">
        
        <?php if ($countPendingVerification == 0) :  ?>
          <a href="agents_request.php" class="menu-item">
            <h3>Verification Request</h3>
          </a>
        <?php else : ?>
          <a href="pending_request.php" class="menu-item">
            <h3>Pending Request</h3>
            <span><small class="notification-count"><?php echo $countPendingVerification; ?></small></span>
          </a>
        <?php endif ?>
        <a href="declined_agent.php" class="menu-item">
          <h3>Declined Request</h3>
        </a>
      </div>


      <!----------------------------------------------------------END OF VERIFICATION PROCESS ------------------------------------------------------->
      <a href="javascript:void(0)" class="menu-item" onclick="attend()">
        <span> <i class="fa fa-shopping-bag" aria-hidden="true"></i> </span>
        <h3>Manage Users Post</h3>
        <span> <i class="fa fa-caret-down" aria-hidden="true"></i> </span>
      </a>


      <div id="attendance" class="dropdown-attendance">
        <a href="delete_post.php" class="menu-item">
          <span> <i class="fa fa-check" aria-hidden="true"></i> </span>
          <h3>Delete Post</h3>
        </a>
        <a href="hide_post.php" class="menu-item">
          <i class="fa fa-chain-broken" aria-hidden="true"></i>
          <h3>Hide Post</h3>
        </a>
    
      </div>


        <a href="liked_post.php" onclick="members()" class="menu-item">
        <span> <i class="fa fa-shopping-bag" aria-hidden="true"></i> </span>
          <h3>Users Liked Post</h3>
        </a>
     
    
      <a href="saved_post.php" class="menu-item">
        <i class="fa fa-motorcycle" aria-hidden="true"></i>
        <h3>Users Saved Post</h3>
      </a>
      <!------------------------------end of payment on delivery------------------------------------->

      <!----------------------------------------------------------PAYMENT  ------------------------------------------------------->
   



      <!---------------------------------------------------------- CONTACT CUSTOMERS ------------------------------------------------------->
      <a href="javascript:void(0)" onclick="exams()" class="menu-item">
         <span> <i class="fa fa-mobile" aria-hidden="true"></i> </span>
        <h3>Users Feedbacks</h3>
        <span> <i class="fa fa-caret-down" aria-hidden="true"></i> </span>
      </a>

      <div id="exams" class="dropdown-exams">
        <a href="send-email.php" class="menu-item">
           <span> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
          <h3>Send E-mail</h3>
        </a>
        <a href="send-textmsg.php" class="menu-item">
          <span> <i class="fa fa-phone" aria-hidden="true"></i> </span>
          <h3>Call Customers</h3>
        </a>
        <a href="send-textmsg.php" class="menu-item">
          <span> <i class="fa fa-comment" aria-hidden="true"></i> </span>
          <h3>Send Text-Message</h3>
        </a>
      </div>

      <!--
         <?php
          $countnotify = $notifyInstance->unreadNotifyFeedbacks();
          if ($countnotify == 0) :
          ?>
        <a href="reports.php" class="menu-item" id="message-notifications">
            <h3>Reports & Compliants</h3>
        </a>
        <?php else : ?>
     
         <a href="reports.php" class="menu-item" id="message-notifications">
             <h3>Reports & Compliants</h3>
             <span><small class="notification-count"><?php echo $countnotify ?></small></span>
         </a>                        
        <?php endif ?>                      
          -->


      <!---------------------------------------------------------- EDIT ADMIN ACCOUNT ------------------------------------------------------->
      <a href="adminedit.php" class="menu-item">
        <!--    <span><i class="material-icons">settings</i></span> -->
        <span> <i class="fa fa-pencil" aria-hidden="true"></i> </span>
        <h3>Edit Admin Account</h3>
      </a>

      <a href="dashboard.php?logout=true" class="menu-item">
      <span> <i class="fa fa-power-off" aria-hidden="true"></i> </span>
        <h3>Log out</h3>
      </a>


    </div>
  </div>

  <script>




  </script>