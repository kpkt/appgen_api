<?php

/*
 * @tutorial Sesi "Transfer of technology"
 * Penggunaan AppGen - API Manager dan 
 * pembangunan API Service dengan mengggunakan
 * PHP dan MySQL
 * @author 	: Mohamad Zaki Mustafa
 * @contact 	: mzm@kpkt.gov.my
 * @date	: 17hb Februari 2015
 * @location 	: Makmal Komputer, Bahagian Teknologi Maklumat,
 *             	  Kementerian Kesejahteraan Bandar, Perumahan Dan Kerajaan Tempatan	
 */


/*
 * @name Dbconfig file
 * @description Set the credentials for the database and make a new PDO connection 
 *              if the connection fails display the error . Next include the 'class.crud.php' file 
 *              and make an instance of it, pass in the database object to the class 
 *              to make use of the database. so that we won't have to write the same footer codes every-time. 
 */

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "password";
$DB_name = "db_api";


try {
    $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

include_once 'inc.class.crud.php';

$crud = new crud($DB_con);
?>