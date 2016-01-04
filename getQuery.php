<?php
$data=array();

   	$con = mysqli_connect("localhost","root","","newmerrill");
    $res = mysqli_query($con,"SELECT * FROM `product` WHERE 1");
    $i=0;
     while($row = mysqli_fetch_assoc($res)){
   		  $data[$i++]= $row;
     }
     echo json_encode($data);

    

