<!-- CREATE NEW -->
<div class="modal fade" id="add_activity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-bell"></i> Create Announcement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_save.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <span class="text-dark"><b>Announcement title</b></span>
            <textarea name="activity" class="form-control" id="" cols="30" rows="5" placeholder="Enter announcement here..." required></textarea>
          </div>
          <div class="form-group">
            <span class="text-dark"><b>Announcement date</b></span>
            <input type="date" class="form-control" name="actDate" required>
          </div>
        </div>
        <div class="modal-footer alert-light">
          <button type="button" class="btn bg-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
          <button type="submit" class="btn bg-primary" name="create_activity"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- SERVES AS REMINDER: DISPLAY ACTIVITY WHEN ACTIVITY DATE IS TODAY -->
<div class="modal fade" id="reminder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title"><i class="fa-solid fa-bell"></i> Announcements</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $i = 1;
                $getAct = mysqli_query($conn, "SELECT * FROM announcement WHERE actDate='$date_today'");
                if(mysqli_num_rows($getAct) > 0) {
                    while ($aa = mysqli_fetch_array($getAct)) {
                ?>
                        <div class="announcement-item">
                            <span class="text-dark"><b>Announcement #<?php echo $i++; ?></b></span>
                            <p><?php echo ucwords($aa['actName']); ?></p>
                            <!-- <p class="text-sm text-right"><?php// echo date("F d, Y", strtotime($aa['actDate'])); ?></p> -->
                            <hr class="my-2">
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="modal-footer alert-light">
                <button type="button" class="btn bg-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Close</button>
            </div>
        </div>
    </div>
</div>
