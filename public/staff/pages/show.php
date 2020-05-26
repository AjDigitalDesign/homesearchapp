<?php require_once('../../../private/initialize.php'); ?>

<?php
$id = isset($_GET['id']) ?? '1';


?>

<?php $page_title = 'Dashboard' ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard - Subjects</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> New Subject</a>
    </div>


    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <?php echo h($id); ?>

            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include(SHARED_PATH . '/staff_footer.php');  ?>