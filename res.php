<?php 
$data = $_GET['dataValue'];

$A4 = array('A4_70gsm','A4_80gsm');
$A3 = array('A3_70gsm','A3_80gsm');
$cushion = array('Simple_Cushion','Magic_Cushion','White_Shirt');
$envelope = array('Envelope_A4','Envelope_57','CV_Envelope');
$files = array('File_Bag','Office_File');
$glossy_A4 = array('glossy_115','glossy_360','glossy_140','texture_260');
$glossy_A3 = array('glossy_A3');
$key_chain = array('Circular_Key_Chain','Circle_Key_Chain','Box_Key_Chain','Wood_Key_Chain');
$mugs = array('White_Mug','Color_Mug','Magic_Mug');
$pvc = array('PVC');
$sheets = array('Color_Sheets','Binding_Sheets');
$stamp_paper = array('Stamp_Paper_50','Stamp_Paper_100');
$others = array('NIC_Pouch','A4_Sealer','Admit_Card','Bike_Book','A4_Hard','NIC_New','NIC_Old');


if ($data == "a4") {
    foreach($A4 as $a4){
        echo "<option value='".$a4."'>$a4</option>";
    }
}

if ($data == "a3") {
    foreach($A3 as $a3){
        echo "<option value='".$a3."'>$a3</option>";
    }
}

if ($data == "cushions") {
    foreach($cushion as $cushions){
        echo "<option value='".$cushions."'>$cushions</option>";
    }
}

if ($data == "envelope") {
    foreach($envelope as $envelopes){
        echo "<option value='".$envelopes."'>$envelopes</option>";
    }
}

if ($data == "files") {
    foreach($files as $file){
        echo "<option value='".$file."'>$file</option>";
    }
}

if ($data == "glossy_a4") {
    foreach($glossy_A4 as $glossy_a4){
        echo "<option value='".$glossy_a4."'>$glossy_a4</option>";
    }
}

if ($data == "glossy_a3") {
    foreach($glossy_A3 as $glossy_a3){
        echo "<option value='".$glossy_a3."'>$glossy_a3</option>";
    }
}

if ($data == "key_chain") {
    foreach($key_chain as $key_chains){
        echo "<option value='".$key_chains."'>$key_chains</option>";
    }
}

if ($data == "mugs") {
    foreach($mugs as $mug){
        echo "<option value='".$mug."'>$mug</option>";
    }
}

if ($data == "pvc") {
    foreach($pvc as $PVC){
        echo "<option value='".$PVC."'>$PVC</option>";
    }
}

if ($data == "sheets") {
    foreach($sheets as $sheet){
        echo "<option value='".$sheet."'>$sheet</option>";
    }
}

if ($data == "stamp_paper") {
    foreach($stamp_paper as $stamp_papers){
        echo "<option value='".$stamp_papers."'>$stamp_papers</option>";
    }
}

if ($data == "others") {
    foreach($others as $other){
        echo "<option value='".$other."'>$other</option>";
    }
}
?>