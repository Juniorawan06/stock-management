<?php
session_start();
// print_r($_POST);
require('conn.php'); 

//loop for all rows ! category is mandatory !
// key is index number, $v is the value

foreach($_POST['sCategory'] as $key => $v){ 

    if ($_POST['sCategory'][$key] == "a4" && $_POST['sItem'][$key] == "A4_70gsm") {
        $qry = "insert into a4_70gsm_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "', CURRENT_TIMESTAMP, '" . $_SESSION['staffName'] . "','', '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }


    elseif ($_POST['sCategory'][$key] == "a4" && $_POST['sItem'][$key] == "A4_80gsm") {
        $qry = "insert into a4_80gsm_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "', CURRENT_TIMESTAMP, '" . $_SESSION['staffName'] . "','', '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "a3" && $_POST['sItem'][$key] == "A3_70gsm") {
        $qry = "insert into a3_70gsm_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "', CURRENT_TIMESTAMP, '" . $_SESSION['staffName'] . "','', '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }
    
    elseif ($_POST['sCategory'][$key] == "a3" && $_POST['sItem'][$key] == "A3_80gsm") {
        $qry = "insert into a3_80gsm_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "', CURRENT_TIMESTAMP, '" . $_SESSION['staffName'] . "','', '0');";
        
        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }
    
    elseif ($_POST['sCategory'][$key] == "pvc" && $_POST['sItem'][$key] == "PVC") {

        $qry = "insert into pvc_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }
    
    elseif ($_POST['sCategory'][$key] == "cushions" && $_POST['sItem'][$key] == "Simple_Cushion") {

        $qry = "insert into cushion_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "','','','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "cushions" && $_POST['sItem'][$key] == "Magic_Cushion") {

        $qry = "insert into cushion_db values (null, '', '','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "cushions" && $_POST['sItem'][$key] == "White_Shirt") {

        $qry = "insert into cushion_db values (null, '', '','','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }
    
    elseif ($_POST['sCategory'][$key] == "envelope" && $_POST['sItem'][$key] == "Envelope_A4") {

        $qry = "insert into envelope_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "','','','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "envelope" && $_POST['sItem'][$key] == "Envelope_57") {

        $qry = "insert into envelope_db values (null, '', '','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "envelope" && $_POST['sItem'][$key] == "CV_Envelope") {

        $qry = "insert into envelope_db values (null, '', '','','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }
    
    elseif ($_POST['sCategory'][$key] == "files" && $_POST['sItem'][$key] == "File_Bag") {

        $qry = "insert into files_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "','','','" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "files" && $_POST['sItem'][$key] == "Office_File") {

        $qry = "insert into files_db values (null, '','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "glossy_a4" && $_POST['sItem'][$key] == "glossy_115") {

        $qry = "insert into glossy_a4_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "','','','','','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }
    
    elseif ($_POST['sCategory'][$key] == "glossy_a4" && $_POST['sItem'][$key] == "glossy_360") {

        $qry = "insert into glossy_a4_db values (null, '', '','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','','','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "glossy_a4" && $_POST['sItem'][$key] == "glossy_140") {

        $qry = "insert into glossy_a4_db values (null, '', '','','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "glossy_a4" && $_POST['sItem'][$key] == "texture_260") {

        $qry = "insert into glossy_a4_db values (null, '', '','','','','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }
    
    elseif ($_POST['sCategory'][$key] == "glossy_a3" && $_POST['sItem'][$key] == "glossy_A3") {

        $qry = "insert into glossy_a3_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "','" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }
    
    
    elseif ($_POST['sCategory'][$key] == "key_chain" && $_POST['sItem'][$key] == "Circular_Key_Chain") {

        $qry = "insert into key_chain_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "','','','','','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }
    
    elseif ($_POST['sCategory'][$key] == "key_chain" && $_POST['sItem'][$key] == "Circle_Key_Chain") {

        $qry = "insert into key_chain_db values (null, '', '','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','','','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";
  
        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "key_chain" && $_POST['sItem'][$key] == "Box_Key_Chain") {

        $qry = "insert into key_chain_db values (null, '', '','','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "key_chain" && $_POST['sItem'][$key] == "Wood_Key_Chain") {

        $qry = "insert into key_chain_db values (null, '', '','','','','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "mugs" && $_POST['sItem'][$key] == "White_Mug") {

        $qry = "insert into mugs_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "','','','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "mugs" && $_POST['sItem'][$key] == "Color_Mug") {

        $qry = "insert into mugs_db values (null, '', '','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "mugs" && $_POST['sItem'][$key] == "Magic_Mug") {

        $qry = "insert into mugs_db values (null, '', '','','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "sheets" && $_POST['sItem'][$key] == "Color_Sheets") {

        $qry = "insert into sheets_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "','','','" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $save = "Success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "sheets" && $_POST['sItem'][$key] == "Binding_Sheets") {

        $qry = "insert into sheets_db values (null, '','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $save="success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "stamp_paper" && $_POST['sItem'][$key] == "Stamp_Paper_50") {

        $qry = "insert into stamp_paper_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "','','','" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "stamp_paper" && $_POST['sItem'][$key] == "Stamp_Paper_100") {

        $qry = "insert into stamp_paper_db values (null, '','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "others" && $_POST['sItem'][$key] == "NIC_Pouch") {

        $qry = "insert into others_db values (null, '" . $_POST['sQuantity'][$key] . "', '" . $_POST['sPrice'][$key] . "','','','','','','','','','','','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }
    
    elseif ($_POST['sCategory'][$key] == "others" && $_POST['sItem'][$key] == "A4_Sealer") {

        $qry = "insert into others_db values (null, '', '','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','','','','','','','','','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";
  
        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "others" && $_POST['sItem'][$key] == "Admit_Card") {

        $qry = "insert into others_db values (null, '', '','','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','','','','','','','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "others" && $_POST['sItem'][$key] == "Bike_Book") {

        $qry = "insert into others_db values (null, '', '','','','','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','','','','','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }
    

    elseif ($_POST['sCategory'][$key] == "others" && $_POST['sItem'][$key] == "A4_Hard") {

        $qry = "insert into others_db values (null, '', '','','','','','','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','','','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "others" && $_POST['sItem'][$key] == "NIC_New") {

        $qry = "insert into others_db values (null, '', '','','','','','','','','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "','','', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    elseif ($_POST['sCategory'][$key] == "others" && $_POST['sItem'][$key] == "NIC_Old") {

        $qry = "insert into others_db values (null, '', '','','','','','','','','','','','" . $_POST['sQuantity'][$key] . "','" . $_POST['sPrice'][$key] . "', '" . $_SESSION['staffName'] . "','', CURRENT_TIMESTAMP, '0');";

        if ($con->query($qry)) {
            $_SESSION['save'] = "success";
        } else {
            $save = "warning";
            echo "<script>alert('Failed');</script>";
            exit();
        }
    }

    else{
    //    echo "<script>alert('Failed');</script>";
}
}
if ($_POST['sCategory'][$key]!="" && $_POST['sItem'][$key]!="" && $_POST['sCategory'][$key]!="" && $_POST['sPrice'][$key]!="") {
    
    echo'<div class="alert alert-info alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> Stock Inserted Successfully
    </div>';
    
}
else{
    echo'<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Warning!</strong> Please fill all input feilds.
    </div>';

    echo '<script>
    
        </script>';

}
