<!-- Content Header (Page header) -->
<section class="content-header">
    <h1><i class="fa fa-home"></i> Dashboard</h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <span class="hidden-xs" hidden>
        <?=
        $id = $this->fungsi->user_login()->id_user;
        ?></span>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?= $this->fungsi->count_user(); ?></h3>
                    <p>Users</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="<?= base_url('User'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
<<<<<<< HEAD
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?= $this->fungsi->count_data(); ?></h3>
                    <p>Checksheet</p>
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
                <?php if ($this->session->userdata('level') == 1) { ?>
                    <a href="<?= base_url('Injection_C'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                <?php } elseif ($this->session->userdata('level') == 2) { ?>
                    <a href="<?= base_url('Injection_C/index_m/' . $id); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                <?php } elseif ($this->session->userdata('level') == 3) { ?>
                    <a href="<?= base_url('Injection_C/index_l/' . $id); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                <?php } elseif ($this->session->userdata('level') == 4) { ?>
                    <a href="<?= base_url('Injection_C/index_u/' . $id); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                <?php } ?>
            </div>
        </div>
        <!-- ./col -->
=======
>>>>>>> 1bba975c6b1d8206f251dc529b669aad41e79788
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->