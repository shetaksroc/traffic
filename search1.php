<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'manju123!';
    $dbName = 'traffic';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT src_dest,id FROM disp_src_dest WHERE src_dest LIKE '%".$searchTerm."%' ORDER BY id ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['src_dest'];	
		$data2[] = $row['id'];	
    }
    
    //return json data
    echo json_encode($data);
	echo json_encode($data2);
?>