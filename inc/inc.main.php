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
 * @name Main file
 * Class Name : crud call as $crud
 * Function dataview()
 * @description put initial data from table
 */
?>
<div class="btn-group pull-right" role="group" aria-label="...">
    <a class="btn btn-info" href="add.php">Add Data</a>
    <a class="btn btn-primary add-ajax" href="#">Add Ajax</a>    
</div>
<table id="index_users" class="table table-striped table-bordered table-highlight table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email ID</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        #Query Statement Select All from users
        $query = "SELECT * FROM users";

        $users = $crud->get_all_users($query);
        ?>
        <?php //print_r($results) ?>
        <?php foreach ($users as $user): ?>
            <tr id="user-<?php echo $user['id']; ?>">
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>                
                <td><?php echo $user['phone']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a class="btn btn-info btn-sm" href="edit.php?edit_id=<?php print($user['id']); ?>">Edit Form</a>
                    <a class="btn btn-primary btn-sm" id="edit-<?php print($user['id']); ?>">Edit Ajax</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>