<?php
require_once __DIR__ . '/../src/bootstrap.php';
?>
<?php view('header', ['title' => 'Car Parts Troubleshoot Content']) ?>
<section class="main-container">
    <div class="container">
          <?php      $query = "select * FROM merge_table Where main_issue = '". $_GET['content'] ."'";
                               $result = mysqli_query($connection, $query);
                               if(mysqli_num_rows($result) > 0){
                                   while($row = mysqli_fetch_array($result)){
           echo '<div class="visible">';
           if($row['main_issue'] != ""){ 
            echo '<h3>'. $row['main_issue'] .'</h3><br />'; 

            echo  '<ol type="1">'; 
        if($row['sub_issue1'] != ""){
            echo  '<h4>'. $row['sub_issue1'] .'</h4>';  

            echo  '<ol type="1">';                            
            if($row['sub1_ts1'] != ""){
                echo  '<li>'. $row['sub1_ts1'] .'</li>';  
            } 
            if($row['sub1_ts2'] != ""){
               echo  '<li>'. $row['sub1_ts2'] .'</li>';  
            } 
            if($row['sub1_ts3'] != ""){
               echo  '<li>'. $row['sub1_ts3'] .'</li>';  
            } 
            if($row['sub1_ts4'] != ""){
               echo  '<li>'. $row['sub1_ts4'] .'</li>';  
            } 
            if($row['sub1_ts5'] != ""){
               echo  '<li>'. $row['sub1_ts5'] .'</li>'; 
            } 
            if($row['sub1_ts6'] != ""){
                echo  '<li>'. $row['sub1_ts6'] .'</li>'; 
            } 
            if($row['sub1_ts7'] != ""){
                echo  '<li>'. $row['sub1_ts7'] .'</li>'; 
            }
                echo '</ol>';                                   
        }
        if($row['sub_issue2'] != ""){
               echo  '<h4>'. $row['sub_issue2'] .'</h4>'; 
               echo  '<ol type="1">';

            if($row['sub2_ts1'] != ""){
               echo  ' <li>'. $row['sub2_ts1'] .'</li>';  
            } 
            if($row['sub2_ts2'] != ""){
               echo  '<li>'. $row['sub2_ts2'] .'</li>';  
            } 
            if($row['sub3_ts3'] != ""){
               echo  '<li>'. $row['sub3_ts3'] .'</li>';  
            } 
            if($row['sub3_ts4'] != ""){
               echo  '<li>'. $row['sub3_ts4'] .'</li>';  
            } 
            if($row['sub2_ts5'] != ""){
               echo  '<li>'. $row['sub2_ts5'] .'</li>';  
            } 
            if($row['sub2_ts6'] != ""){
                echo  '<li>'. $row['sub2_ts6'] .'</li>'; 
            } 
            if($row['sub2_ts7'] != ""){
                echo  '<li>'. $row['sub2_ts7'] .'</li>'; 
            }
                echo  '</ol>';   
         } 
         if($row['sub_issue3'] != ""){
               echo  '<h4>'. $row['sub_issue3'] .'</h4>'; 
               echo  '<ol type="1">';
            if($row['sub3_ts1'] != ""){
               echo  ' <li>'. $row['sub3_ts1'] .'</li>';  
            } if($row['sub3_ts2'] != ""){
               echo  '<li>'. $row['sub3_ts2'] .'</li>';  
            } if($row['sub3_ts3'] != ""){
               echo  '<li>'. $row['sub3_ts3'] .'</li>'; 
             } if($row['sub3_ts4'] != ""){
               echo  '<li>'. $row['sub3_ts4'] .'</li>';  
            } if($row['sub3_ts5'] != ""){
               echo  '<li>'. $row['sub3_ts5'] .'</li>'; 
            } if($row['sub3_ts6'] != ""){
                echo  '<li>'. $row['sub3_ts6'] .'</li>'; 
            } if($row['sub3_ts7'] != ""){
                echo  '<li>'. $row['sub3_ts7'] .'</li>'; 
            }
                echo  '</ol>';                       
        } 
        if($row['sub_issue4'] != ""){
               echo  '<h4>'. $row['sub_issue4'] .'</h4>'; 
               echo  '<ol type="1">';
            if($row['sub4_ts1'] != ""){
               echo  ' <li>'. $row['sub4_ts1'] .'</li>';  
            } 
            if($row['sub4_ts2'] != ""){
               echo  '<li>'. $row['sub4_ts2'] .'</li>';  
            } 
            if($row['sub4_ts3'] != ""){
               echo  '<li>'. $row['sub4_ts3'] .'</li>';  
            } 
            if($row['sub4_ts4'] != ""){
               echo  '<li>'. $row['sub4_ts4'] .'</li>';  
            } 
            if($row['sub4_ts5'] != ""){
               echo  '<li>'. $row['sub4_ts5'] .'</li>'; 
            } 
            if($row['sub4_t6'] != ""){
                echo  '<li>'. $row['sub4_t6'] .'</li>'; 
            } 
            if($row['sub4_ts7'] != ""){
                echo  '<li>'. $row['sub4_ts7'] .'</li>'; 
            } 
                echo  '</ol>';  

        } if($row['sub_issue5'] != ""){
               echo  '<h4>'. $row['sub_issue5'] .'</h4>';  
               echo  '<ol type="1">';
           if($row['sub5_ts1'] != ""){
                echo  ' <li>'. $row['sub5_ts1'] .'</li>';  
            } 
            if($row['sub5_ts2'] != ""){
               echo  '<li>'. $row['sub5_ts2'] .'</li>';  
            } 
            if($row['sub5_ts3'] != ""){
               echo  '<li>'. $row['sub5_ts3'] .'</li>';  
            } 
            if($row['sub5_ts4'] != ""){
               echo  '<li>'. $row['sub5_ts4'] .'</li>';  
            } 
            if($row['sub5_ts5'] != ""){
               echo  '<li>'. $row['sub5_ts5'] .'</li>'; 
            }  
            if($row['sub5_ts6'] != ""){
                echo  '<li>'. $row['sub5_ts6'] .'</li>'; 
            } 
            if($row['sub5_ts7'] != ""){
                 echo  '<li>'. $row['sub5_ts7'] .'</li>'; 
                }
                echo  '</ol>';
            }
            echo  '</ol>'; 
         }
                          echo     '</div>'; 
                                 
                             }  
                        }  ?>
          
        </div> 
</section>
<?php view('footer') ?>




