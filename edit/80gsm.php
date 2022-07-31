<?php
session_start();
require("../conn.php");
if (isset($_POST['update80gsm'])) {
    $qry = "UPDATE `a4_80gsm_db` SET `a480gsm`='" . $_POST["80gsmQuantity"] . "',`a480gsmPrice`='" . $_POST["80gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE a4Id = " .  $_POST['80gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../A4.php#Id80gsm';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}

if (isset($_POST['delete80gsm'])) {

    $sql = "update a4_80gsm_db set a4Deleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where a4Id ='" . $_POST['delete80gsmId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../A4.php#Id80gsm';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['edit80gsm'])) {
    $qry = "UPDATE `a3_80gsm_db` SET `a380gsm`='" . $_POST["80gsmQuantity"] . "',`a380gsmPrice`='" . $_POST["80gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE a3Id = " .  $_POST['80gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../A3.php#Id80gsm';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}

if (isset($_POST['remove80gsm'])) {

    $sql = "update a3_80gsm_db set a3Deleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where a3Id ='" . $_POST['delete80gsmId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../A3.php#Id80gsm';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php

if (isset($_POST['editglossyA3'])) {
    $qry = "UPDATE `glossy_a3_db` SET `glossyA3`='" . $_POST["80gsmQuantity"] . "',`glossyA3Price`='" . $_POST["80gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE A3Id = " .  $_POST['80gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../glossy.php#glossyA3_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php
if (isset($_POST['delete_glossy_A3'])) {

    $sql = "update glossy_a3_db set A3Deleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where A3Id ='" . $_POST['glossyA3Id'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../glossy.php#glossyA3_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['editStampPaper50'])) {
    $qry = "UPDATE `stamp_paper_db` SET `stampPaper50`='" . $_POST["70gsmQuantity"] . "',`stampPaper50Price`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE stampPaperId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../stamp-paper.php';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}

if (isset($_POST['removeStampPaper_50'])) {

    $sql = "update stamp_paper_db set stampDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where stampPaperId ='" . $_POST['stampPaper50Id'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../stamp-paper.php';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php

if (isset($_POST['editStampPaper100'])) {
    $qry = "UPDATE `stamp_paper_db` SET `stampPaper100`='" . $_POST["80gsmQuantity"] . "',`stampPaper100Price`='" . $_POST["80gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE stampPaperId = " .  $_POST['80gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../stamp-paper.php#stampPaper100_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php
if (isset($_POST['removeStampPaper_100'])) {

    $sql = "update stamp_paper_db set stampDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where stampPaperId ='" . $_POST['stampPaper100Id'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../stamp-paper.php#stampPaper100_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['updateEnvelopeA4'])) {
    $qry = "UPDATE `envelope_db` SET `envelopeA4`='" . $_POST["70gsmQuantity"] . "',`envelopeA4Price`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE envelopeId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../Envelope.php';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}

if (isset($_POST['removeA4Envelope'])) {

    $sql = "update envelope_db set envelopeDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where envelopeId ='" . $_POST['A4EnvelopeId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../envelope.php';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['updateEnvelope57'])) {
    $qry = "UPDATE `envelope_db` SET `envelope57`='" . $_POST["80gsmQuantity"] . "',`envelope57Price`='" . $_POST["80gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE envelopeId = " .  $_POST['80gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../envelope.php#envelope57_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}

if (isset($_POST['removeEnvelope57'])) {

    $sql = "update envelope_db set envelopeDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where envelopeId ='" . $_POST['envelope57Id'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../envelope.php#envelope57_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php

if (isset($_POST['updatecvEnvelope'])) {
    $qry = "UPDATE `envelope_db` SET `cvEnvelope`='" . $_POST["80gsmQuantity"] . "',`cvEnvelopePrice`='" . $_POST["80gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE envelopeId = " .  $_POST['80gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../envelope.php#cvEnvelope_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php
if (isset($_POST['removeCvEnvelope'])) {

    $sql = "update envelope_db set envelopeDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where envelopeId ='" . $_POST['cvEnvelopeId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../envelope.php#cvEnvelope_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['updateWhiteMug'])) {
    $qry = "UPDATE `mugs_db` SET `whiteMug`='" . $_POST["70gsmQuantity"] . "',`whiteMugPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE mugsId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../mugs.php';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}

if (isset($_POST['removeWhiteMug'])) {

    $sql = "update mugs_db set mugDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where mugsId ='" . $_POST['whiteMugId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../mugs.php';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php

if (isset($_POST['updateColorMug'])) {
    $qry = "UPDATE `mugs_db` SET `colorMug`='" . $_POST["80gsmQuantity"] . "',`colorMugPrice`='" . $_POST["80gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE mugsId = " .  $_POST['80gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../mugs.php#colorMug_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateMagicMug'])) {
    $qry = "UPDATE `mugs_db` SET `magicMug`='" . $_POST["80gsmQuantity"] . "',`magicMugPrice`='" . $_POST["80gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE mugsId = " .  $_POST['80gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../mugs.php#magicMug_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['editCircularKeyChain'])) {
    $qry = "UPDATE `key_chain_db` SET `circularKeyChain`='" . $_POST["70gsmQuantity"] . "',`circularKeyChainPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE keyChainId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../key-chains.php';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['editCircleKeyChain'])) {
    $qry = "UPDATE `key_chain_db` SET `circleKeyChain`='" . $_POST["80gsmQuantity"] . "',`circleKeyChainPrice`='" . $_POST["80gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE keyChainId = " .  $_POST['80gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../key-chains.php#circleKeyChain_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['editBoxKeyChain'])) {
    $qry = "UPDATE `key_chain_db` SET `boxKeyChain`='" . $_POST["70gsmQuantity"] . "',`boxKeyChainPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE keyChainId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../key-chains.php#boxKeyChain_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['editWoodKeyChain'])) {
    $qry = "UPDATE `key_chain_db` SET `woodKeyChain`='" . $_POST["80gsmQuantity"] . "',`woodKeyChainPrice`='" . $_POST["80gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE keyChainId = " .  $_POST['80gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../key-chains.php#woodKeyChain_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateFileBag'])) {
    $qry = "UPDATE `files_db` SET `fileBag`='" . $_POST["70gsmQuantity"] . "',`fileBagPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE filesId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../files.php';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateOfficeFile'])) {
    $qry = "UPDATE `files_db` SET `officeFile`='" . $_POST["70gsmQuantity"] . "',`officeFilePrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE filesId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../files.php#officeFile_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateColorSheets'])) {
    $qry = "UPDATE `sheets_db` SET `colorSheets`='" . $_POST["70gsmQuantity"] . "',`colorSheetsPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE sheetsId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../sheets.php';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateBindingSheets'])) {
    $qry = "UPDATE `sheets_db` SET `bindingSheets`='" . $_POST["70gsmQuantity"] . "',`bindingSheetsPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE sheetsId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../sheets.php#bindingSheets_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateSimpleCushion'])) {
    $qry = "UPDATE `cushion_db` SET `simpleCushion`='" . $_POST["70gsmQuantity"] . "',`simpleCushionPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE cushionId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../cushions.php';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateMagicCushion'])) {
    $qry = "UPDATE `cushion_db` SET `magicCushion`='" . $_POST["70gsmQuantity"] . "',`magicCushionPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE cushionId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../cushions.php#magicCushion_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateWhiteShirt'])) {
    $qry = "UPDATE `cushion_db` SET `whiteShirt`='" . $_POST["70gsmQuantity"] . "',`whiteShirtPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE cushionId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../cushions.php#whiteShirt_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updatePvc'])) {
    $qry = "UPDATE `pvc_db` SET `pvcQuantity`='" . $_POST["70gsmQuantity"] . "',`pvcPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE pvcId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../pvc.php';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateNicPouch'])) {
    $qry = "UPDATE `others_db` SET `nicPouch`='" . $_POST["70gsmQuantity"] . "',`nicPouchPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE othersId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../others.php';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateA4Sealer'])) {
    $qry = "UPDATE `others_db` SET `A4Sealer`='" . $_POST["70gsmQuantity"] . "',`A4SealerPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE othersId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../others.php#A4Sealer_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateAdmitCard'])) {
    $qry = "UPDATE `others_db` SET `admitCard`='" . $_POST["70gsmQuantity"] . "',`admitCardPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE othersId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../others.php#admitCard_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateA4Hard'])) {
    $qry = "UPDATE `others_db` SET `A4Hard`='" . $_POST["70gsmQuantity"] . "',`A4HardPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE othersId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../others.php#A4Hard_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateBikeBook'])) {
    $qry = "UPDATE `others_db` SET `bikeBook`='" . $_POST["70gsmQuantity"] . "',`bikeBookPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE othersId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../others.php#bikeBook_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateNicNew'])) {
    $qry = "UPDATE `others_db` SET `nicNew`='" . $_POST["70gsmQuantity"] . "',`nicNewPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE othersId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../others.php#nicNew_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php

if (isset($_POST['updateNicOld'])) {
    $qry = "UPDATE `others_db` SET `nicOld`='" . $_POST["70gsmQuantity"] . "',`nicOldPrice`='" . $_POST["70gsmPrice"] . "',`updatedBy`='" . $_SESSION['staffName'] . "' WHERE othersId = " .  $_POST['70gsm_id'] . ";";
    if ($con->query($qry)) {
        $save = "success";
        echo "<script>window.location.href='../others.php#nicOld_Id';</script>";
    } else {
        $save = "warning";
        echo "<script>alert('failed');</script>";
    }
}
?>
<?php
if (isset($_POST['removeColorMug'])) {

    $sql = "update mugs_db set mugDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where mugsId ='" . $_POST['colorMugId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../mugs.php#colorMug_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['removeMagicMug'])) {

    $sql = "update mugs_db set mugDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where mugsId ='" . $_POST['magicMugId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../mugs.php#magicMug_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['deleteCircularKeyChain'])) {

    $sql = "update key_chain_db set keyChainDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where keyChainId ='" . $_POST['circularKeyChainId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../key-chains.php';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['deleteCircleKeyChain'])) {

    $sql = "update key_chain_db set keyChainDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where keyChainId ='" . $_POST['circleKeyChainId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../key-chains.php#circleKeyChain_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['deleteBoxKeyChain'])) {

    $sql = "update key_chain_db set keyChainDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where keyChainId ='" . $_POST['boxKeyChainId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../key-chains.php#boxKeyChain_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['removeWoodKeyChain'])) {

    $sql = "update key_chain_db set keyChainDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where keyChainId ='" . $_POST['woodKeyChainId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../key-chains.php#woodKeyChain_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['deleteFileBag'])) {

    $sql = "update files_db set fileDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where filesId ='" . $_POST['fileBagId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../files.php';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['deleteOfficeFile'])) {

    $sql = "update files_db set fileDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where filesId ='" . $_POST['officeFileId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../files.php#officeFile_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['deleteColorSheets'])) {

    $sql = "update sheets_db set sheetDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where sheetsId ='" . $_POST['colorSheetsId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../sheets.php';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['deleteBindingSheets'])) {

    $sql = "update sheets_db set sheetDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where sheetsId ='" . $_POST['bindingSheetsId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../sheets.php#bindingSheets_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['removeSimpleCushion'])) {

    $sql = "update cushion_db set cushionDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where cushionId ='" . $_POST['simpleCushionId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../cushions.php';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['removeMagicCushion'])) {

    $sql = "update cushion_db set cushionDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where cushionId ='" . $_POST['magicCushionId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../cushions.php#magicCushion_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['removeWhiteShirt'])) {

    $sql = "update cushion_db set cushionDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where cushionId ='" . $_POST['whiteShirtId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../cushions.php#whiteShirt_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['removePvc'])) {

    $sql = "update pvc_db set pvcDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where pvcId ='" . $_POST['pvcId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../pvc.php';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['deleteNicPouch'])) {

    $sql = "update others_db set othersDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where othersId ='" . $_POST['nicPouchId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../others.php';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['deleteA4Sealer'])) {

    $sql = "update others_db set othersDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where othersId ='" . $_POST['A4SealerId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../others.php#A4Sealer_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['deleteAdmitCard'])) {

    $sql = "update others_db set othersDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where othersId ='" . $_POST['admitCardId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../others.php#admitCard_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['removeBikeBook'])) {

    $sql = "update others_db set othersDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where othersId ='" . $_POST['bikeBookId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../others.php#bikeBook_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['deleteA4Hard'])) {

    $sql = "update others_db set othersDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where othersId ='" . $_POST['A4HardId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../others.php#A4Hard_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['deleteNicNew'])) {

    $sql = "update others_db set othersDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where othersId ='" . $_POST['nicNewId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../others.php#nicNew_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
<?php
if (isset($_POST['deleteNicOld'])) {

    $sql = "update others_db set othersDeleted = 1,updatedBy = '" . $_SESSION['staffName'] . "'  where othersId ='" . $_POST['nicOldId'] . "';";

    if ($con->query($sql)) {
        echo "<script>window.location.href='../others.php#nicOld_Id';</script>";
    } else {
        echo "Error Occoured " . $sql . $con->error;
    }
}
?>
