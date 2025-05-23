<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?=base_url(); ?>favicon_tiohu.ico" type="image/gif">
    <title>BUMDes Huyula  | <?= $title ?></title>

    <?php $this->load->view('SuptPage/CssP') ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?= base_url() ?>" class="site_title"><i class="fa fa-paw"></i> <span>BUMDes Huyula </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= isset($this->ses->img)?base_url('media/admin/'.$this->ses->img):base_url('media/admin/unnamed.png') ?>" alt="foto-admin" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= $this->ses->nm ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php $this->load->view('SuptPage/MenuPage') ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php $this->load->view('SuptPage/FooterButton') ?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php $this->load->view('SuptPage/Notifikasi') ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="color: black;">
            <div class="col-md-12">
                <button class="btn btn-md btn-warning" onclick="window.location.href=document.referrer">Batal | Kembali</button>
            </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
            <h1>Tambah penyewaan aset</h1>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <form action="set-tambah-penyewaan" id="set-tambah-penyewaan" method="POST" class="form-horizontal form-label-left" data-cek="cek-jadwal">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3" for="">Aset disewa</label>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <select class="form-control" name="aset" id="aset" required>
                        <option data-hg="" value="">Pilih aset</option>
                    <?php foreach ($v as $key => $s) {
                            echo '<option data-hg="'.$s->hg.'" value="'.$s->id.'">'.$s->nm.'</option>';
                          } ?>
                    </select>
                  </div>
                </div> <br>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3" for="penyewa">Penyewa</label>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <input autocomplete="off" type="text" required class="form-control" name="penyewa" id="penyewa">
                  </div>
                </div> <br>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3" for="kontak">Kontak penyewa</label>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <input type="text" required class="form-control" name="kontak" id="kontak" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                  </div>
                </div> <br>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3" for="tang_mul">Tanggal mulai / jumlah hari</label>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class='input-group date  tanggal_form tanggal_new' id="tanggal_sewa">
                        <input  type='text' class="form-control" readonly="readonly"  name="tanggal" value="<?= date('d-m-Y') ?>" />
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-2">
                    <input autocomplete="off" type="text" required class="form-control" name="jumlah_hari" id="jum_har" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                  </div>
                  <div class="col-md-1 col-sm-1 col-xs-1">
                    <input readonly value="hari" class="form-control">
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3" id="warning" style="display: none;">
                    <small class="label label-danger">Ada tabrakan jadwal sewa</small>
                  </div>
                </div> <br>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3" for="harga">Harga sewa</label>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <input autocomplete="off" class="form-control" required name="harga" id="harga" type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" id="harga">
                    <span><input checked type="checkbox" name="tambah_trans" value="Ya"> <label for="">Catat ke keuangan</label></span>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <input class="form-control" readonly id="nominal" type="text">
                  </div>
                </div><br>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <button type="submit" class="btn btn-md btn-primary">Kirim</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Admin Template by <a href="#">KKN Tematik UNG</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    

    <?php $this->load->view('SuptPage/JsP') ?>
    <script src="<?= base_url('asset/JS/Error_handler.js') ?>"></script>
    <script src="<?= base_url('asset/JS/Fitur.js') ?>"></script>
    <script src="<?= base_url('asset/JS/Dtmpicker.js') ?>"></script>
    <script src="<?= base_url('asset/JS/Form.js') ?>"></script>
  </body>
</html>