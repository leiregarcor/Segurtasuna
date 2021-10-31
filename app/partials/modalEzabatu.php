<?php
    session_start();
    $IdEzabatu=$_GET['IdEzabatu'];
?>

<!-- Modal -->
<div class="modal fade" id="modalEzabatu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Benetan ezabatu nahi duzu?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <input type="text" id="id">
        <?php
            echo"<p> ezabatu nahi den apunteraen id: {$IdEzabatu} </p>";
        ?>

        <!-- <input type="hidden" id="id"> -->
        
        <div class="form-row">
          <div class="form-group col-md-6">
              <button type="button" class="btn btn-success form-control" data-dismiss="modal">Ez</button>
          </div>
          <div class="form-group col-md-6">
              <a type="button" class="btn btn-danger form-control" href='apunteaEzabatu.php'>Bai</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>