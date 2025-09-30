<!-- Content Header (Page header) -->
<section class="content-header">
    <h1><i class="fa fa-arrow-right"></i> Injections Line C</h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Injections Line C Data</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <i class="fa fa-list"></i>
            <h3 class="box-title">List Data</h3>
            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-flat">Created</button>
                    <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?= site_url('Injection_C/add_bc_u'); ?>">Back Cover</a></li>
                        <li><a href="#">Bottom</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th>PIC Name</th>
                    <th>Machine</th>
                    <th>Model</th>
                    <th>Shift</th>
                    <th>Date Created</th>
                    <th>Status Product</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($row as $key => $data) : ?>
                        <tr>
                            <td><?= $data->nama_pic ?></td>
                            <td><?= $data->nama_mesin ?></td>
                            <td><?= $data->part_model ?></td>
                            <td><?= $data->shift ?></td>
                            <td><?= $data->dt_created ?></td>
                            <td><?= $data->nama_status ?></td>
                            <td class="text-center" width="160">
                                <a class="btn btn-default btn-xs" href="<?= site_url('Injection_C/view_u/' . $data->id_cs); ?>"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- /.content -->