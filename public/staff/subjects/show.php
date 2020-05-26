<?php require_once('../../../private/initialize.php'); ?>

<?php
$id = $_GET['id'] ?? '1';



$subject = find_subject_by_id($id);



?>

<?php $page_title = 'Dashboard' ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard - Subjects</h1>
    </div>


    <!-- Content Row -->

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4 m-10px p-4">
                <h4>Subject: <?php echo h($subject['menu_name']); ?></h4>
                <p><span><strong>Position:</strong> </span> <?php echo h($subject['position']); ?></p>
                <p><span><strong>Visible:</strong> </span> <?php echo $subject['visible'] == '1' ? 'true' : 'false'; ?></p>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include(SHARED_PATH . '/staff_footer.php');  ?>