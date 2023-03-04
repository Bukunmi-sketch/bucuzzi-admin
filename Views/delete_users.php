<?php
session_start();
ob_start();

include '../Includes/inc.php';
include '../Includes/autoload.php';

include './auth/redirect.php';

$sessionid = $_SESSION['id'];
$userInfo = $userInstance->getuserinfo($sessionid);
$email = $userInfo['email'];
$firstname = $userInfo['firstname'];
$lastname = $userInfo['lastname'];
$registered_date = $userInfo['date'];

//$memberInstance = new User\Member($conn);

if (isset($_GET['read']) && ($_GET['read'] == 'true')) {
  $notifyInstance->readNotification();
}


?>

<!doctype html>
<html lang="en">

<head>
  <title>Delete Users</title>
  <?php include '../Includes/metatags.php'; ?>

  <link rel="stylesheet" type="text/css" href="../Resources/css/left.css">
  <link rel="stylesheet" type="text/css" href="../Resources/css/app.css">
  <link rel="stylesheet" type="text/css" href="../Resources/css/dropdown.css">
  <link rel="stylesheet" type="text/css" href="../Resources/css/agent.css">
  <link rel="stylesheet" type="text/css" href="../Resources/css/table.css">
  <link rel="stylesheet" type="text/css" href="../vendors/DataTables/datatables.min.css" />

</head>

<body>
  <?php include './components/header.php'; ?>
  <main>
    <div class="container">
      <?php
      include './components/left.php';

      $statement=$userInstance->getAllUsers();
      $memberData=$statement->fetchAll(PDO::FETCH_ASSOC);


      $g=1;
      ?>
 

      <div class="middle">
        <?php if ($statement->rowCount() > 0) : ?>

          <h5> </h5>
          <form action="orders.php"></form>
       
          <div class="table-container">
            <table id="example">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th> Action </th>
                  <th>Id</th>
                  
                  <th>Last Active Day</th>
                  <th>Last Active Time</th>
                  <th>Registered Date</th>
                  <th>Time registered</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($memberData as $members) : ?>
                  <div>
                    <tr class="trr" id="eachorder<?php echo  "{$members['id']}"; ?>">
                    <td> <?php echo $g++; ?>   </td>
                      <form action="" class="order-modify">
                        <td>
                          <!--<button class="editbtn">Edit</button>--><button data-identity="<?php echo  "{$members['id']}"; ?>" class="deletebtn">Delete</button>
                        </td>
                      </form>                     
                     
                      <td> <?php echo  "{$members['id']}"; ?> </td>
                      <td> <?php echo  "{$members['LastActiveDate']}"; ?> </td>
                      <td> <?php echo  "{$members['LastActiveTime']}"; ?> </td>
                      <td> 
                      <div class="each-user" id="eachagent<?php echo  "{$members['id']}" ; ?>">
                           <img src=" <?php echo $agentsignupdirfile; ?><?php echo $members["profileimage"]; ?>" alt=""  class="image"> 
                         
                           <div class="productname"> <b><?php echo  ucfirst("{$members['firstname']} {$members['lastname']}") ; ?> </b> </div>
                          
                           <div id="followers-count"  > ID: <?php echo  "{$members['id']}" ; ?> </div>                           
                           <div id="followers-count">Email : <?php echo  "{$members['email']}" ; ?> </div>
                           <div id="followers-count"> Mobile : <?php echo  "{$members['Mobile']}" ; ?></div>  
                           <div id="followers-count"> State : <?php echo  "{$members['Country']}" ; ?></div>  
                           <div id="followers-count">Last Seen Date: <?php echo  date("D,F j Y",  strtotime("{$members['LastActiveDate']}")) ; ?></div>  
                           <div id="followers-count">Last Seen Time: <?php echo  "{$members['LastActiveTime']}" ; ?></div>  
                      <div class="follow-unfollow">     
                           <form action="" class="agent-modify">

                              <button data-agentidentity="<?php echo  "{$members['id']}" ; ?>" id="eachapprove<?php echo  "{$members['id']}" ; ?>" class="approvebtn" >    Approve </button>            
                              <button data-id="<?php echo  "{$members['id']}" ; ?>" data-email="<?php echo  "{$members['email']}" ; ?>" data-mobile="<?php echo  "{$members['Mobile']}" ; ?>" data-state="<?php echo  "{$members['Country']}" ; ?>" data-directory="<?php echo $agentsignupdirfile; ?>" data-agentname="<?php echo  "{$members['firstname']} {$members['lastname']}" ; ?>" data-description="<?php echo  "{$members['Bio']}" ; ?>" data-picture="<?php echo  "{$members['profileimage']}" ; ?>"  data-available="<?php echo  "{$members['LastActiveDate']}" ; ?>"  data-date="<?php echo  date("D,F j Y",  strtotime("{$members['reg_date']}")) ; ?>" data-identity-directory="<?php echo  $agentidentitydirfile; ?>" class="justbtn" > view details </button>  
                             
                            </form>   
                        </div>
                 </div>    
                    
                    
                      </td>
                      <td> <?php echo date("H:i a",  strtotime($members['reg_date'])); ?> </td>
                    </tr>
                  </div>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        

        <?php else : ?>
          <h4>No members have been registereed</h4>
        <?php endif ?>
      </div>






    </div>

  </main>

  <script src="../vendors/DataTables/datatables.min.js"></script>
  <script src="../vendors/pace/pace.min.js"></script>
  <script src="../vendors/lobipanel/lobipanel.min.js"></script>
  <script src="../vendors/iscroll/iscroll.js"></script>
  <script src="../vendors/prism/prism.js"></script>
  <script src="../Resources/js/sidebar.js"></script>
  <script src="../Resources/js/del-order.js"></script>

  <script>
    $(function($) {
      $('#example').DataTable();

      $('#example').DataTable({
     //   "scrollY": "300px",
      //  "scrollCollapse": true,
        "paging": true
      });

      $('#example3').DataTable();
    });

    function go2Page() {
      var page = document.getElementById("page").value;
      page = ((page > <?php echo $totalPages; ?>) ? <?php echo $totalPages; ?> : ((page < 1) ? 1 : page));
      window.location.href = 'orders.php?page=' + page;
    }
  </script>

</body>

</html>