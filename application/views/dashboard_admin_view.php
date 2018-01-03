<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard Admin</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Prakerin SMK Telkom Malang 2017</h3>
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row" style="margin: 5px;">
              <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3><?php echo $countG; ?></h3>

                    <h4>Guru Pembimbing</h4>
                  </div>
                  <div class="icon">
                    <i class="fa fa-user" style="margin: 3px;"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>index.php/admin/dataguru" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3><?php echo $countS; ?></h3>

                    <h4>Siswa</h4>
                  </div>
                  <div class="icon">
                    <i class="ion-ios-people" style="margin: 3px;"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>index.php/admin/datasiswa" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-4 col-xs-12">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3><?php echo $countI; ?></h3>

                    <h4>Industri Prakerin</h4>
                  </div>
                  <div class="icon">
                    <i class="fa fa-building-o" style="margin: 3px;"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>index.php/admin/dataindustri" class="small-box-footer">
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