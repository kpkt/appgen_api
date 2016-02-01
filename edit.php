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
 * @name Edit page
 * @description this file will show form for update data
 */
?>
<?php
/*
 * the database connection
 */
include_once 'inc/inc.dbconfig.php';


/*
 * included at the beginning of all files
 */
include_once 'inc/inc.header.php';
?>

<div class="row appgen">
    <?php
    /*
     * replace include_once with other file
     */
    include_once 'inc/inc.data.edit.php';
    ?>

</div>

<?php
/*
 * included at the end of all files 
 */
include_once 'inc/inc.footer.php';
