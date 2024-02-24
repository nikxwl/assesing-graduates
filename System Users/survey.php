<title>AGTGT | Survey questionnaire records</title>
<?php
require_once 'sidebar.php';
?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Survey questionnaire</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Survey questionnaire records</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header p-2">
              <a href="alumni_mgmt.php?page=create" class="btn btn-xs bg-primary ml-2"><i class="fa-sharp fa-solid fa-square-plus"></i> New Survey questionnaire</a>
              <div class="card-tools mr-1 mt-3">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-hover table-sm text-sm">
                <thead>
                  <tr>
                    <th>QUESTIONNAIRE RECORDS</th>
                  </tr>
                </thead>
                <tbody id="users_data">
                  <tr>
                    <td>On going</td>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require_once '../includes/footer.php'; ?>