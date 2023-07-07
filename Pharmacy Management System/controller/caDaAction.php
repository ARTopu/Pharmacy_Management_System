<?php
   

    if(isset($_POST['invoice'])){
        header('Location: ../view/invoice.html');
        
    }
    elseif(isset($_POST['prescription'])){
        header('Location: ../view/prescription.html');
        
    }
    elseif(isset($_POST['inventory'])){
        header('Location: ../view/inventory.html');
        
    }
    elseif(isset($_POST['sales'])){
        header('Location: ../controller/manageInAction.php');
        
    }
    elseif(isset($_POST['statistics'])){
        header('Location: ../view/statistics.html');
        
    }
    elseif(isset($_POST['payment'])){
        header('Location: ../view/payment.html');
        
    }
    
?>