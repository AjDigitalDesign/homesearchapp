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
        <h1 class="h3 mb-0 text-gray-800">Dashboard - Create Subject</h1>
        <a href="<?php url_for('/staff/subjects/index.php'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> All Subjects</a>
    </div>


    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12"> 
            <!-- DataTales Example -->
            <div class="card shadow mb-4 m-10px">
                <form action="<?php echo url_for('/staff/subjects/create.php') ?>" method="POST">
                    <div class="form-group">
                        <label for="menu-name">Menu Name</label>
                        <input type="text" class="form-control form-control-sm" name="menu_name" id="menu-name" value="">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <select name="position" id="position">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="visible">Visible</label>
                        <input type="hidden" class="form-control form-control-sm" name="visible" id="visible" value="0">
                        <input type="checkbox" class="form-control form-control-sm" name="visible" id="visible" value="1">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Create Subject">
                    </div>

                </form>
            </div>

        </div>


    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include(SHARED_PATH . '/staff_footer.php');  ?>