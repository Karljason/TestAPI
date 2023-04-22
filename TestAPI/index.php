<?php 

$txtRtnCall = "Main.html.php";
// try {
//     $url = $_GET["spnURL"];
//     $txtResponse = "";
//     $txtResponse = file_get_contents($url);

//     if ($txtResponse !== false) {
//         echo $txtResponse;
//     }
// } catch(Exception $e) {
//     echo "error";
// }



if (isset($_POST["txtAction"])) {
    $txtAction = $_POST["txtAction"];
} else {
    $txtAction = "Main";
}

switch($txtAction) {
    case "Generate" :
        // echo "test";exit;
        $txtURL = $_POST["txtURL"];
        // $context = stream_context_create($options);
        $myResponse = file_get_contents($txtURL);
        // print_r($myResponse);exit;
        if ($myResponse === false) {
            echo "Failed to retrieve content";exit;
        } else {
            //get the response and reverse it using array_reverse
            $arrResponse = json_decode($myResponse,true);
            $arrReverse = array_reverse($arrResponse);
            //convert $arrReverse to text
            $myResponseRev = json_encode($arrReverse);

            $Responsedata = json_decode($myResponseRev, true);
            // echo "<pre>";
            // print_r($Responsedata);exit;
            foreach ($Responsedata as $ResIndex => $ResElement) {
            
                if (is_string($ResIndex)) {

                    $RevResIndex = strrev($ResIndex);
                    $myResponseRev = str_replace($ResIndex, $RevResIndex, $myResponseRev);
                }
                if (is_array($ResElement)) {
                    foreach($ResElement as $SubIndex => $SubElement) {

                        if (is_array($SubElement)) {
                            foreach($SubElement as $SubIndex2 => $SubElement2) {

                                $RevResIndex = strrev($SubIndex2);
                                $RevResElement = strrev($SubElement2);

                                $myResponseRev = str_replace($SubIndex2, $RevResIndex, $myResponseRev);
                                $myResponseRev = str_replace($SubElement2, $RevResElement, $myResponseRev);
                            }
                        }
                    }
                }
            }
        }
        //get the reversed value 
        
        break;
    case "Main":
        DEFAULT:
        $txtURL = "";
        $myResponse = "";
        $myResponseRev = "";

}
include($txtRtnCall);
?>