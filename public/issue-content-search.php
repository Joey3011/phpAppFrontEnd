<?php
require_once __DIR__ . '/../src/bootstrap.php';
?>
<?php view('header', ['title' => 'Car Issue Content Search']) ?>
<span class="main-container"> 
<div class="container">
        <div class="row">
            <div class="cols-xs">
                <div class="result-container">
                    <input class="form-input" type="text" name="searchbar" id="searchbar" placeholder="Search for car issue..." autocomplete="off">  
                </div> 
                <div id="paginated-list" data-current-page="1" aria-live="polite">  
                        <div class="pagination-container">
                            <button class="pagination-button" id="prev-button" aria-label="Previous Page" title="Previous Page"><i class='fa fa-caret-left'></i></button>
                            <div id="pagination-numbers"> </div>
                            <button class="pagination-button" id="next-button" aria-label="Next Page" title="Next Page"><i class='fa fa-caret-right'></i></button>
                        </div>
                        <?php 
$query = "SELECT * FROM merge_table";
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
            } 
            if($row['sub3_ts2'] != ""){
               echo  '<li>'. $row['sub3_ts2'] .'</li>';  
            } 
            if($row['sub3_ts3'] != ""){
               echo  '<li>'. $row['sub3_ts3'] .'</li>'; 
             } 
            if($row['sub3_ts4'] != ""){
               echo  '<li>'. $row['sub3_ts4'] .'</li>';  
            } 
            if($row['sub3_ts5'] != ""){
               echo  '<li>'. $row['sub3_ts5'] .'</li>'; 
            } 
            if($row['sub3_ts6'] != ""){
                echo  '<li>'. $row['sub3_ts6'] .'</li>'; 
            } 
            if($row['sub3_ts7'] != ""){
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
      echo '</div>'; 
                                 
   }  
}  
?>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript">
    const paginationNumbers = document.getElementById("pagination-numbers");
    const paginatedList = document.getElementById("paginated-list");
    const listItems = paginatedList.querySelectorAll('.visible');
    const nextButton = document.getElementById("next-button");
    const prevButton = document.getElementById("prev-button");
    const paginationLimit = 1;
    const pageCount = Math.ceil(listItems.length / paginationLimit);
    let currentPage = 1;
    const disableButton = (button) => {
        button.classList.add("disabled");
        button.setAttribute("disabled", true);
    };
    const enableButton = (button) => {
        button.classList.remove("disabled");
        button.removeAttribute("disabled");
    };
    const handlePageButtonStatus = () => {
        if(currentPage === 1){
            disableButton(prevButton);
        }else{
            enableButton(prevButton);
        }

        if(pageCount === currentPage){
            disableButton(nextButton);
        }else{
            enableButton(nextButton);
        }
    };
    const handleActivePageNumber = () => {
        document.querySelectorAll(".pagination-numbers").forEach((button) => {
            button.classList.remove("active");
            const pageIndex = Number(button.getAttribute("page-index"));

            if(pageIndex == currentPage){
                button.classList.add("active");

            }
        });
    }
    const appendPageNumber = (index) => {
        const pageNumber = document.createElement("button");
        pageNumber.className = "pagination-numbers";
        pageNumber.innerHTML = index;

        pageNumber.setAttribute("page-index", index);
        pageNumber.setAttribute("aria-label", "Page " + index);

        paginationNumbers.appendChild(pageNumber);
    };
    const getPaginationNumbers = () => {
        for(let i = 1; i <= pageCount; i++){
            appendPageNumber(i);
        }
    };
    const setCurrentpage = (pageNum) => {
        currentPage = pageNum;
        handleActivePageNumber();
        handlePageButtonStatus();
        const prevRange = (pageNum - 1) * paginationLimit;
        const currRange = pageNum * paginationLimit;
        listItems.forEach((item, index) => {
            item.classList.add("hidden");
            item.classList.remove("visible");
            if(index >= prevRange && index < currRange){
                item.classList.remove("hidden");
                item.classList.add("visible");
            }     
        });
    };
    window.addEventListener("load", () => {
        getPaginationNumbers();
        setCurrentpage(1);
        prevButton.addEventListener("click", () => {
            setCurrentpage(currentPage - 1);
        });
        nextButton.addEventListener("click", () => {
            setCurrentpage(currentPage + 1);
        });
        document.querySelectorAll(".pagination-numbers").forEach((button) => {
            const pageIndex = Number(button.getAttribute("page-index"));
            if(pageIndex){
                button.addEventListener("click", () => {
                    setCurrentpage(pageIndex);
                });
            }
        });
    });
</script>
</span>
<?php view('footer') ?>




