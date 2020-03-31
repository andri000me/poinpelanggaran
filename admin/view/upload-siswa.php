<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
    <div class="box box-info">
      <div class="box-header with-border">
       <h3 class="box-title">Upload Data Siswa <a href="../file/DataSiswa.xls"><button class="btn btn-success"><i class="glyphicon glyphicon-upload"></i> Download Format</button></a></h3>
        <div class="pull-right box-tools">
          <button class="btn btn-default btn-xs" data-widget="collapse" data-toggle="tooltip" title="Sembunyikan/Tampilkan">
          <i class="glyphicon glyphicon-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
     <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo $basead; ?>a-control/<?php echo md5('uploadsiswa'); ?>/access">
        <div class="col-md-4 col-xs-12">
            <div class="form-group">
              <input type="file" name="datasiswa" class="form-control" required="required">
            </div>
          </div>
          <div class="col-md-4 col-xs-12">
            <div class="form-group">
              <button class="btn btn-success"><i class="glyphicon glyphicon-upload"></i> Import</button>
            </div>
          </div>
        </div>
      </form>
              <div class="box-body"><b>Langkah Import :</b>
<br>1. Buat kelas terlebih dahulu
<br>2. Download Format Excel diatas
<br>3. Copy kode kelas kedalam excel, sesuai dengan file data siswa yang akan di upload/import
<br>4. Selamat mencoba</div>
      
<?php if(isset($_GET['q'])){ 
  $jm=$_GET['q'];
?>
          <div style="display: none;" class="alert alert-success alert-dismissable"><?php echo $jm; ?> Siswa Berhasil di upload <a href="<?php echo $basead; ?>siswa"> lihat Hasil</a>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          </div>


<?php } ?>


          </div>
      </div>
    </div>
  </div>
</div>