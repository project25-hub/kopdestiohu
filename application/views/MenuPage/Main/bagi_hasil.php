<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?=base_url(); ?>favicon_tiohu.ico" type="image/gif">
    <title>Bumdes Huyula   | <?= $title ?></title>

    <?php $this->load->view('SuptPage/CssP') ?>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('asset/') ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?= base_url('asset/') ?>/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?= site_url('home') ?>" class="site_title"><i class="fa fa-paw"></i> <span>Bumdes Huyula  </span></a>
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
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
            <h1>Bagi hasil aset BUMDes</h1>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <a href="unduh-daftar-bagi-hasil?tahun=<?=$tahun?>&bulan=<?=$m?>"class="btn btn-md btn-warning" target="_blank">Unduh daftar kerja sama</a>
                  <a href="tambah-bagi-hasil" class="btn btn-md btn-info">Tambah aset bagi hasil</a>
                  <a href="tambah-pemasukan-bgh" class="btn btn-md btn-primary">Tambah pembayaran bagi hasil</a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="row">
                        <form id="bagi-has" action="bagi-hasil" method="GET" class="form-filter">
                            <div class="col-md-4 col-sm-4 col-xs-4">  
                                <div class="form-group">
                                    <label for="">Tahun</label>
                                    <select name="tahun" class="form-control" onchange="$('#bagi-has').submit()">
                                      <option value="All">Semua</option>
                                      <?php 
                                        foreach ($thn as $key => $val) {
                                          $val->thn==$tahun?$sel='selected':$sel=null;
                                          echo '<option '.$sel.' value="'.$val->thn.'">'.$val->thn.'</option>';
                                        }
                                      ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-5">
                              <div class="form-group">
                                  <label for="">Bulan</label>
                                <select name="bulan" class="form-control" onchange="$('#bagi-has').submit()">
                                    <?php 
                                    foreach ($bln as $key => $val) {
                                      $key==$m?$sel='selected':$sel=null;
                                      echo '<option '.$sel.' value="'.$key.'">'.$val.'</option>';
                                    }
                                    ?>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                  <label for="">Tampilkan</label>
                                  <select name="limit" class="form-control" onchange="$('#bagi-has').submit()" id="limit">
                                    <?php 
                                    foreach ($form_lim as $key => $val) {
                                      $val==$lim?$sel='selected':$sel=null;
                                      echo '<option '.$sel.' value="'.$val.'">'.$val.'</option>';
                                    }
                                    ?>
                                  </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
          <div class="row tile_count">
            <div class="col-md-6 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> <span id="k-pbgh-m">Penerimaan BUMDes bagi hasil <?= $nb ?> <?= $y ?></span></span>
              <div class="count text-center" id="pbgh-m">Rp. <?= isset($pbm->pnb)?''.$pbm->pnb:'0' ?></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> <span id="k-pbgh-y">Penerimaan BUMDes bagi hasil tahun <?= $y ?></span></span>
              <div class="count text-center" id="pbgh-y">Rp. <?= isset($pby->pnb)?''.$pby->pnb:'0' ?></div>
            </div>
          </div>
          <div class="row tile_count">
            <div class="col-md-6 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> <span id="k-nbgh-m">Nilai bagi hasil <?= $nb ?> <?= $y ?></span></span>
              <div class="count text-center" id="nbgh-m">Rp. <?= isset($pbm->hg)?''.$pbm->hg:'0' ?></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> <span id="k-nbgh-y">Nilai bagi hasil tahun <?= $y ?></span></span>
              <div class="count text-center" id="nbgh-y">Rp. <?= isset($pby->hg)?''.$pby->hg:'0' ?></div>
            </div>
          </div>
          <div class="row tile_count">
            <div class="col-md-3 col-sm-3 col-xs-3 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Aset internal <?= $nb ?> <?= $y ?></span>
              <div class="count" id="int-m"><?= $vt?''.$vt->jints:'0' ?></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Aset eksternal <?= $nb ?> <?= $y ?></span>
              <div class="count" id="ext-m"><?= $vt?''.$vt->exts:'0' ?></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Aset internal tahun <?= $y ?></span>
              <div class="count" id="int-y"><?= $va?''.$va->jints:'0' ?></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Aset eksternal tahun <?= $y ?></span>
              <div class="count" id="ext-y"><?= $va?''.$va->exts:'0' ?></div>
            </div>
          </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h3>Aset bagi hasil</h3>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Aset</th>
                      <th>Mitra</th>
                      <th>Tanggal mulai</th>
                      <th>Tanggal selesai</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody id="val-body" data-act="hapus-bagi-hasil" data-meth="POST">
                      <?= $value['val'] ?>
                  </tbody>
                </table>
            </div>
            <div class="pgn-cust">
              <?= $value['paginasi'] ?>
            </div>
            <h6>Cat: Setelah 30 hari atau telah menerima pembayaran, bagi hasil hanya bisa dibatalkan</h6>
          </div>
        </div>
          
          <br>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">
                <div class="row x_title">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <h3>Pertumbuhan pemasukan bagi hasil <small id="g-tahun">Tahun <?= $y ?></h3>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div id="grafik_bagi_hasil"></div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer style="border-top: 1px solid #d9dee4;">
          <div class="pull-right">
          Admin Template by <a href="#">KKN Tematik UNG</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <?php $this->load->view('SuptPage/JsP') ?>
    <script src="<?= base_url('asset/') ?>/JS/Highchart.js"></script>
    <script src="<?= base_url('asset/') ?>/JS/Form_hapus.js"></script>
    <!--Javascript tambahan -->
    <script src="<?= base_url('asset') ?>/JS/Fitur.js"></script>
    <script src="<?= base_url('asset/JS/Ajax_req.js') ?>"></script>
    <script>
      bagi_hasil(JSON.parse('<?= $v_grafik ?>'),'#grafik_bagi_hasil',2020);
    </script>
  </body>
</html>