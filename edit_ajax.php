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
 * Show result from ajax_update
 */
include_once 'inc/inc.dbconfig.php';
header("content-type:application/json");

/**
 * Get POST Value from AJAX Post
 */
if (isset($_POST['btn'])) {
    $id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $femail = $_POST['femail'];
    $fphone = $_POST['fphone'];
    $data = $crudajax->ajax_update($id, $fname, $femail, $fphone);
    if ($data) {
        echo json_encode($data);
        exit();
    }
}


