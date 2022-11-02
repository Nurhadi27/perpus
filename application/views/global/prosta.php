<style>
  .kartu {
    max-width: 250px;
    margin: 100px auto 0;
    background-color: #42515a;
    box-shadow: 0 10px 90px #00000024;
    text-align: center;
    font-size: 20px;
    border-radius: 15px;
}

.kartu .kartu-header {
    position: relative;
    height: 48px;
}

.kartu .kartu-header .profile-img {
    width: 130px;
    height: 130px;
    border-radius: 1000px;
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 8px solid #00ab41;
    box-shadow: 0 0 20px #00000033;
}

.kartu .kartu-header .profile-img:hover {
    width: 180px;
    height: 180px;
    border: 8px solid #008631;
}

.kartu .kartu-body {
    padding: 10px 40px;
}

.kartu .kartu-body .name {
    margin-top: 30px;
    font-size: 16px;
    font-weight: bold;
    color: #00ab41;
}

.kartu .kartu-body .name:hover {
    margin-top: 30px;
    font-size: 18px;
    color: #008631;
}

.kartu .kartu-footer {
    background-color: #00ab41;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    padding: 20px 0 20px 0;
}

.kartu .kartu-footer .count {
    font-size: 14px;
}

.kartu .kartu-body .isi {
    margin-top: 10px;
    font-size: 14px;
    color: white;
    text-align: left;
}
</style>

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
        <div class="kartu">
        <div class="kartu-header"> 
            <img src="<?php echo base_url();?>gambar_petugas/<?php echo $op['img'];?>" class="profile-img" alt="foto-profil">
        </div>
        <div class="kartu-body">
              <p class="name"><?php echo $op['nama'];?><br></p>
              <p class="isi">NIP      : <?php echo $op['NIP'];?><br></p>
              <p class="isi">Nomor HP : <?php echo $op['hp'];?><br></p>
              <p class="isi">Jabatan  : <?php if ($op['stts']=='admin') {echo "Admin";}
                else{echo "Petugas";}?><br></p>
        </div>

        <div class="kartu-footer">
            <p class="count">Pascasarjana UIN SGD Bandung</p>
        </div>
  </div>
  </div>
  <?php
  }
  ?>
  </div>