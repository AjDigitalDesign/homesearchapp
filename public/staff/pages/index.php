<?php require_once('../../../private/initialize.php');

$page_set = find_all_pages();
?>

<?php $page_title = 'Dashboard' ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard - Pages</h1>
    <a href="<?php echo url_for('/staff/pages/new.php'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> New Subject</a>
  </div>


  <!-- Content Row -->

  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                    <th>Subject ID</th>
                  <th>Position</th>
                  <th>Visible</th>
                  <th>Name</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Position</th>
                  <th>Visible</th>
                  <th>Name</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
              </tfoot>
              <tbody>
                <?php while($page = mysqli_fetch_assoc($page_set)): ?>
                  <tr>
                    <td><?php echo $page['id']; ?></td>
                    <td><?php echo $page['subject_id']; ?></td>
                    <td><?php echo $page['position']; ?></td>
                    <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
                    <td><?php echo $page['menu_name']; ?></td>
                    <td><a href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($page['id']))); ?>">View</a></td>
                    <td><a href="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($page['id']))); ?>">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
              <?php mysqli_free_result($page_set); ?>
          </div>
        </div>
      </div>

    </div>


  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include(SHARED_PATH . '/staff_footer.php');  ?>