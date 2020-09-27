<?php
    $conn = new mysqli("localhost","root","","texnologies_diadiktiou");
    if(isset($_POST['Next'] || $_POST['Submit'])){

        $exam_type=$_POST['exam_type'];
        $dd=$_POST['dd'];
        $nn=$_POST['nn'];
        $yyyy=$_POST['yyyy'];  
        $tab_payment=$_POST['tab_payment'];
        
        $query = "INSERT INTO sinolo (id, exam_type, dd, nn, yyyy, tab_payment) 
  			  VALUES('1', '$exam_type', '$dd', '$nn', '$yyyy','$tab_payment' )";
  	    mysqli_query($db, $query);
        
      
    }