<div class="row">
	<div class="col m12">
		<h5>Daftar Profil Staff</h5>
		<hr>
	</div>
</div>


	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">

	<div class="row">
	
  <?php
  foreach($data_petugas->result_array() as $op)
  {
      ?>
      <div class="col m6">
      <div class="card" style="width: 18rem;">
      <img style="width:18rem;height:18rem" src="<?php echo base_url();?>gambar_petugas/<?php echo $op['img'];?>" class="card-img-top" alt="foto-profil">
            <div class="card-body">
              <p class="fw-semibold">Nama     : <?php echo $op['nama'];?><br></p>
              <p class="fw-semibold">NIP      : <?php echo $op['NIP'];?><br></p>
              <p class="fw-semibold">Nomor HP : <?php echo $op['hp'];?><br></p>
              <p class="fw-semibold">Jabatan  : <?php if ($op['stts']=='admin') {echo "Admin";}
                else{echo "Petugas";}?><br></p>
            </div>
  </div>
  </div>
  <?php
  }
  ?>
  </div>