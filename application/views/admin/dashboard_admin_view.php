<div id="content-wrapper">
    <section class="content-header">
      <h1>
        <span>Dashboard Admin</span>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Prakerin SMK Telkom Malang <?php echo date("Y"); ?></h3>
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row" style="margin: 5px;">
              <div class="col-lg-4 col-s-3" style="margin-bottom: 10px;">
                <!-- small box -->
                <div class="small-box bg-aqua" style="margin-bottom: 40px;">
                  <div class="inner">
                    <h3><?php echo $countG; ?></h3>

                    <h4>Guru Pembimbing</h4>
                  </div>
                  <div class="icon">
                    <i class="fa fa-user" style="margin: 3px;"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>index.php/admin/addguru" class="small-box-footer col-lg-6" style="background-color: #00ACD7;">
                    Add new data <i class="fa fa-plus-circle"></i>
                  </a>
                  <a href="<?php echo base_url(); ?>index.php/admin/dataguru" class="small-box-footer col-lg-6" style="background-color: #00ACD7;">
                    More info <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-4 col-s-3">
                <!-- small box -->
                <div class="small-box bg-green" style="margin-bottom: 40px;">
                  <div class="inner">
                    <h3><?php echo $countS; ?></h3>

                    <h4>Siswa</h4>
                  </div>
                  <div class="icon">
                    <i class="ion-ios-people" style="margin: 3px;"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>index.php/admin/addguru" class="small-box-footer col-lg-6" style="background-color: #009551;">
                    Add new data <i class="fa fa-plus-circle"></i>
                  </a>
                  <a href="<?php echo base_url(); ?>index.php/admin/dataguru" class="small-box-footer col-lg-6" style="background-color: #009551;">
                    More info <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-4 col-s-3">
                <!-- small box -->
                <div class="small-box bg-yellow" style="margin-bottom: 40px;">
                  <div class="inner">
                    <h3><?php echo $countI; ?></h3>

                    <h4>Industri Prakerin</h4>
                  </div>
                  <div class="icon">
                    <i class="fa fa-building-o" style="margin: 3px;"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>index.php/admin/addindustri" class="small-box-footer col-lg-6" style="background-color: #DA8C10;">
                    Add new data <i class="fa fa-plus-circle"></i>
                  </a>
                  <a href="<?php echo base_url(); ?>index.php/admin/dataindustri" class="small-box-footer col-lg-6" style="background-color: #DA8C10;">
                    More info <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>