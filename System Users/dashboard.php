<title>AGTGT | Dashboard</title>
<?php
require_once 'sidebar.php';
?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-6">
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">System Users</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool pt-3" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button> -->
              </div>
            </div>
            <div class="card-body">
              <canvas id="system_users" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="card card-success">
              <div class="card-header">
                  <h3 class="card-title">Alumni Current Jobs</h3>
                  <div class="card-tools">
                      <button type="button" class="btn btn-tool pt-3" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                      </button>
                  </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-6">
                          <canvas id="alumni_jobs" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                      <div class="col-6">
                          <div class="form-group">
                            <label for="jobFilter">Filter by job type</label>
                            <select class="form-control form-control-sm select2" id="jobFilter" onchange="updateTotalAlumni()">
                                <option value="" selected disabled>Select Job</option>
                                <?php
                                  $jobQuery = mysqli_query($conn, "
                                      SELECT current_job, COUNT(user_Id) AS alumni_count
                                      FROM users
                                      WHERE user_type = 4
                                      GROUP BY current_job
                                      ORDER BY alumni_count DESC, current_job
                                  ");
                                  while ($jobRow = mysqli_fetch_assoc($jobQuery)) {
                                      echo "<option value='" . $jobRow['current_job'] . "'>" . $jobRow['current_job'] . "</option>";
                                  }
                                ?>
                            </select>
                            <div class="text-center mt-2">
                                <span id="totalAlumniLabel" style="display: none;">Total Alumni in the selected Job</span>
                                <h1 id="totalAlumni" class="text-dark" style="font-size: 100px; "></h1>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      </div>
    </div>
  </section>
  <?php require_once '../includes/footer.php'; ?>
<script>
    // POPULATION ****************************
    var donutChartCanvas = $('#system_users').get(0).getContext('2d');
    <?php 
        $sql = mysqli_query($conn, "
            SELECT 
                SUM(CASE WHEN user_type = 0 THEN 1 ELSE 0 END) AS Administrator,
                SUM(CASE WHEN user_type = 1 THEN 1 ELSE 0 END) AS Evaluator,
                SUM(CASE WHEN user_type = 2 THEN 1 ELSE 0 END) AS Alumni_Officer,
                SUM(CASE WHEN user_type = 3 THEN 1 ELSE 0 END) AS Department_Secretary,
                SUM(CASE WHEN user_type = 4 THEN 1 ELSE 0 END) AS Alumni
            FROM users
        ");
        $row = mysqli_fetch_assoc($sql);

        echo "var donutData = {
            labels: ['Administrator', 'Evaluator', 'Alumni Officer', 'Department Secretary', 'Alumni'],
            datasets: [{
                data: [".$row['Administrator'].", ".$row['Evaluator'].", ".$row['Alumni_Officer'].", ".$row['Department_Secretary'].", ".$row['Alumni']."],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#3399ff', '#ff66d9'],
            }]
        };";
    ?>

    var donutOptions = {
      maintainAspectRatio: false,
      responsive: true,
    };

    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    });


</script>
<script>
    // ALUMNI JOBS ****************************
    var alumniJobsChartCanvas = $('#alumni_jobs').get(0).getContext('2d');
    <?php 
        $sql = mysqli_query($conn, "
            SELECT COUNT(DISTINCT current_job) AS TotalJobs
            FROM users
            WHERE user_type = 4
        ");
        $row = mysqli_fetch_assoc($sql);

        echo "var alumniJobsData = {
            labels: ['Total Type of Jobs'],
            datasets: [{
                data: [".$row['TotalJobs']."],
                backgroundColor: ['#00a65a'],
            }]
        };";
    ?>

    var alumniJobsOptions = {
      maintainAspectRatio: false,
      responsive: true,
    };

    new Chart(alumniJobsChartCanvas, {
      type: 'doughnut',
      data: alumniJobsData,
      options: alumniJobsOptions
    });
</script>

<script>
    function updateTotalAlumni() {
        var selectedJob = $('#jobFilter').val();

        if (selectedJob) {
            $.ajax({
                type: 'POST',
                url: 'get_total_alumni.php',
                data: { job: selectedJob },
                dataType: 'json',
                success: function(data) {
                    // Update the total alumni count in the HTML
                    $('#totalAlumni').text(data.totalAlumni);
                    // Show the label
                    $('#totalAlumniLabel').show();
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching total alumni:', error);
                }
            });
        } else {
            // Clear the total alumni count and hide the label if no job is selected
            $('#totalAlumni').text('');
            $('#totalAlumniLabel').hide();
        }
    }
</script>


