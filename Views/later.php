<?php 
                $countProduct=$dashboardInstance->countProducts();
            ?>
               <div class="box">
                 <div class="boxa" style="background-color: <?php echo "{$arr[$key]}" ; ?>;"></div>
                   <div class="boxb">
                       <h4>AVAILABLE PRODUCTS</h4>
                       <p><?php echo $countProduct ?></p>
                   </div>
               </div>

            <?php 
                $countOrder=$dashboardInstance->countOrders();
            ?>
               <div class="box">
                 <div class="boxa" style="background-color: <?php echo "{$arr[$key]}" ; ?>;"></div>
                   <div class="boxb">
                   <h4>TOTAL ORDERS</h4>
                       <p><?php echo $countOrder ?></p>
                   </div>
               </div>

            <?php 
                $countUnpaidOrder=$dashboardInstance->countUnpaidOrders();
              ?>
               <div class="box">
                 <div class="boxa" style="background-color: <?php echo "{$arr[$key]}" ; ?>;"></div>
                   <div class="boxb">
                   <h4>UNPAID ORDERS</h4>
                       <p><?php echo  $countUnpaidOrder ?></p>
                   </div>
               </div>

               <?php 
                $countpaidOrder=$dashboardInstance->countpaidOrders();
              ?>
               <div class="box">
                 <div class="boxa" style="background-color: <?php echo "{$arr[$key]}" ; ?>;"></div>
                   <div class="boxb">
                   <h4>PAID ORDERS</h4>
                       <p><?php echo  $countpaidOrder ?></p>
                   </div>
               </div>

               <?php 
                $countKlumpPay=$dashboardInstance->countKlumpPayment();
              ?>
               <div class="box">
                 <div class="boxa" style="background-color: <?php echo "{$arr[$key]}" ; ?>;"></div>
                   <div class="boxb">
                   <h4>KLUMP PAYMENT</h4>
                       <p><?php echo  $countKlumpPay ?></p>
                   </div>
               </div>

               <?php 
                $countflutterwavePay=$dashboardInstance->countFlutterwavePayment();
              ?>
               <div class="box">
                 <div class="boxa" style="background-color: <?php echo "{$arr[$key]}" ; ?>;"></div>
                   <div class="boxb">
                   <h4>FLUTTERWAVE PAYMENT</h4>
                       <p><?php echo  $countflutterwavePay ?></p>
                   </div>
               </div>

               <?php 
                $stmt=$dashboardInstance->totalIncome();
                $totalincome=$stmt->fetch(PDO::FETCH_ASSOC);
              ?>
               <div class="box">
                 <div class="boxa" style="background-color: <?php echo "{$arr[$key]}" ; ?>;"></div>
                   <div class="boxb">
                   <h4>TOTAL INCOME</h4>
                       <p><?php echo $totalincome['amount']; ?></p>
                   </div>
               </div>

               <?php 
                $countdelivered=$dashboardInstance->countdeliveredOrders();
              ?>
               <div class="box">
                 <div class="boxa" style="background-color: <?php echo "{$arr[$key]}" ; ?>;"></div>
                   <div class="boxb">
                   <h4>DELIVERED ORDERS</h4>
                       <p><?php echo  $countdelivered ?></p>
                   </div>
               </div>

               <?php 
                $countundelivered=$dashboardInstance->countUndeliveredOrders();
              ?>
               <div class="box">
                 <div class="boxa" style="background-color: <?php echo "{$arr[$key]}" ; ?>;"></div>
                   <div class="boxb">
                   <h4>UNDELIVERED ORDERS</h4>
                       <p><?php echo  $countundelivered ?></p>
                   </div>
               </div>

               <?php 
                $countcategory=$dashboardInstance->countCategories();
              ?>
               <div class="box">
                 <div class="boxa" style="background-color: <?php echo "{$arr[$key]}" ; ?>;"></div>
                   <div class="boxb">
                   <h4>AVAILABLE CATEGORIES</h4>
                       <p><?php echo  $countcategory ?></p>
                   </div>
               </div>



               <div class="stats">
               <p>DATE OF LAST ORDER:
               <?php 
                $stmt=$dashboardInstance->lastOrder();
                $lastdata=$stmt->fetch(PDO::FETCH_ASSOC);
                $date= date('D,F j Y',  strtotime($lastdata['created_at']));
               echo "{$date} ordered by {$lastdata['customers_name']}";
             
              // // }
              ?>     
            </p>
               <p>HIGHEST PAYMENT MADE: 
               <?php 
                $stmt=$dashboardInstance->highestPayment();
                $highestpay=$stmt->fetch(PDO::FETCH_ASSOC);
                echo "{$highestpay['amount']} paid by {$highestpay['customers_name']}" 
              ?> 
               </p>
               <p>LOWEST PAYMENT MADE:
               <?php 
                $stmt=$dashboardInstance->lowestPayment();
                $lowestpay=$stmt->fetch(PDO::FETCH_ASSOC);
                echo "{$lowestpay['amount']} paid by {$lowestpay['customers_name']}" 

              ?> 
               </p>
               <p></p>
           </div>
