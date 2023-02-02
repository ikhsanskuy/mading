<div class="panel panel-default">
<?php $ambil = $conn->query("SELECT * FROM comment"); ?>
		        <?php while ($data = $ambil->fetch_assoc()) { ?>
<div class="panel-heading"> 
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-start align-items-center">
              <!-- <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="60"
                height="60" /> -->
              <div>
                <h1 class="fw-bold text-primary mb-1"><?php echo $data['nama']; ?></h1>
                <h6 class="fw-bold text-primary mb-1"><?php echo $data['buku']; ?></h6>
              </div>
            </div>

            <p class="mt-3 mb-4 pb-2">
            <?php echo $data['comment']; ?> <br>
            
            </p>
            <?php echo $data['date']; ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

  <?php } ?>
</div>



