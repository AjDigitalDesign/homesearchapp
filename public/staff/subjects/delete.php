<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
    redirect_to(url_for('/staff/subjects/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {

    $result = delete_subject($id);
    redirect_to(url_for('/staff/subjects/index.php'));

} else {
    $subject = find_subject_by_id($id);
}

?>

<?php $page_title = 'Dashboard' ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">Dashboard - Delete Subject</h1>
        <a href="<?php url_for('/staff/subjects/index.php'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> All Subjects</a>
    </div>


    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">

            <!-- DataTales Example -->
            <div class="card shadow mb-4 m-10px">
                <form action="<?php url_for('/staff/subjects/delete.php?id=' . h(u($id))); ?>" method="POST">
                    <div class="alert alert-danger" role="alert">
                        <p>Are you sure you want to delete this subject </p>
                        <p><?php echo h($subject['menu_name']); ?></p>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Delete Subject">
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