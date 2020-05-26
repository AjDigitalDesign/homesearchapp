<?php
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
    redirect_to(url_for('/staff/subjects/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {

    // Handle form values sent by new.php

    $subject = [];
    $subject['id'] = $id;
    $subject['menu_name'] = $_POST['menu_name'] ?? '';
    $subject['position'] = $_POST['position'] ?? '';
    $subject['visible'] = $_POST['visible'] ?? '';

    $result = update_subject($subject);
    redirect_to(url_for('/staff/subjects/show.php?id=' . $id));

} else {

    $subject = find_subject_by_id($id);

    $subject_set = find_all_subjects();
    $subject_count = mysqli_num_rows($subject_set);
    mysqli_free_result($subject_set);

}

?>

<?php $page_title = 'Dashboard' ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard - Edit Subject</h1>
        <a href="<?php url_for('/staff/subjects/index.php'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> All Subjects</a>
    </div>


    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4 m-10px">
                <form action="<?php url_for('/staff/subjects/edit.php?id=' . h(u($id))); ?>" method="POST">
                    <div class="form-group">
                        <label for="menu-name">Menu Name</label>
                        <input type="text" class="form-control form-control-sm" id="menu-name" name="menu_name" value="<?php echo h($subject['menu_name']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <select name="position" id="position">
                            <option value="1"<?php if($subject['position'] == "1"){ echo "Selected"; } ?>>1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="visible">Visible</label>
                        <input type="hidden" class="form-control form-control-sm" name="visible" id="visible" value="0">
                        <input type="checkbox" class="form-control form-control-sm" name="visible" id="visible" value="1"<?php if($subject['visible'] == "1"){ echo " Checked";} ?>>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Edit Subject">
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