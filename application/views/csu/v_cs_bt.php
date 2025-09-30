<style>
    /* body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    } */
    .box-body {
        overflow: scroll;
    }

    table {
        width: 200%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header img {
        height: auto;
    }

    .header div {
        text-align: right;
    }

    .notes {
        margin-top: 10px;
    }

    .notes span {
        display: inline-block;
        margin-right: 20px;
    }
</style>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <i class="fa fa-edit"></i>
            <h3 class="box-title">Resume Checksheet Injection - Bottom</h3>
            <div class="pull-right">
                <Span hidden><?= $id = $this->fungsi->user_login()->id_user; ?></Span>
                <a href="<?= site_url('Injection_C/index_u/' . $id); ?>" class="btn btn-warning">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <?php foreach ($row as $rw) : ?>
                <div class="form-group">
                    <div class="header">
                        <img alt="Company Logo" height="50" src="<?= base_url() ?>uploads/logo/logo.png" width="150">
                    </div>
                </div>
                <table class="table-wrapper">
                    <div class="form-group row">
                        <div class="col-xs-3">
                            <br>
                            <label>PIC Name</label>
                        </div>
                        <div class="col-xs-3">
                            <br>
                            <input type="text" value="<?= $rw->nama_pic; ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-3">
                            <label>Area</label>
                        </div>
                        <div class="col-xs-3">
                            <input type="text" value="<?= $rw->area; ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-3">
                            <label>Shift *</label>
                        </div>
                        <div class="col-xs-3">
                            <input type="text" value="<?= $rw->shift; ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th rowspan="3">
                                M/C
                            </th>
                            <th rowspan="3">
                                Time
                            </th>
                            <th rowspan="3">
                                Model
                            </th>
                            <th rowspan="3">
                                Part Name
                            </th>
                            <th rowspan="3">
                                Part Number
                            </th>
                            <th rowspan="3">
                                Resin
                            </th>
                            <th colspan="1">
                                Change Core
                            </th>
                            <th colspan="4">
                                Dimentions
                            </th>
                            <th rowspan="3">
                                Temperature Measurement 21-23 C
                            </th>
                            <th rowspan="3">
                                Weight
                            </th>
                            <th colspan="2">
                                MTC
                            </th>
                            <th rowspan="3">
                                Hole Change Core
                            </th>
                            <th rowspan="3">
                                Venthole
                            </th>
                            <th rowspan="3">
                                Oil Check
                            </th>
                            <th rowspan="3">
                                SHARP EDGE TEST
                            </th>
                            <th rowspan="3">
                                (@) POINT_/2HOUR
                            </th>
                            <th rowspan="3">
                                FITTING TEST
                            </th>
                            <th rowspan="3">
                                MASTER SAMPLE
                            </th>
                            <th colspan="3">
                                APPEARANCE
                            </th>
                            <th rowspan="3">
                                JUDGMENT
                            </th>
                            <th rowspan="3">
                                REMAKRS
                            </th>
                        </tr>
                        <tr>
                            <th rowspan="2">
                                Core Name
                            </th>
                            <th rowspan="2">
                                Spec
                            </th>
                            <th rowspan="2">
                                Actual
                            </th>
                            <th rowspan="2">
                                Spec Bending
                            </th>
                            <th rowspan="2">
                                Actual
                            </th>
                            <th rowspan="2">
                                Core
                            </th>
                            <th rowspan="2">
                                Cavity
                            </th>
                            <th rowspan="2">
                                Gas Mark
                            </th>
                            <th rowspan="2">
                                Difrent Color
                            </th>
                            <th rowspan="2">
                                Etc.
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span><?= $rw->nama_mesin; ?></span></td>
                            <td><span><?= $rw->dt_created; ?></span></td>
                            <td><span><?= $rw->part_model; ?></span></td>
                            <td><span><?= $rw->part_name; ?></span></td>
                            <td><span><?= $rw->part_no; ?></span></td>
                            <td><span><?= $rw->resin; ?></span></td>
                            <td><span><?= $rw->name_core; ?></span></td>
                            <td>
                                <span><?= $rw->d_spek1; ?></span>
                            </td>
                            <td>
                                <span><?= $rw->d_aktual1; ?></span>
                            </td>
                            <td>
                                <span><?= $rw->d_sp_bending1; ?></span>
                                <br>
                                <span><?= $rw->d_sp_bending2; ?></span>
                            </td>
                            <td>
                                <span><?= $rw->d_spb_aktual1; ?></span>
                                <br>
                                <span><?= $rw->d_spb_aktual2; ?></span>
                                <br>
                                <span><?= $rw->d_spb_aktual3; ?></span>
                                <br>
                                <span><?= $rw->d_spb_aktual4; ?></span>
                            </td>
                            <td><span><?= $rw->suhu; ?></span></td>
                            <td>
                                <span><?= $rw->berat_1; ?></span>
                                <br>
                                <span><?= $rw->berat_2; ?></span>
                            </td>
                            <td><span><?= $rw->mtc_core; ?></span></td>
                            <td><span><?= $rw->mtc_kaviti; ?></span></td>
                            <td><span><?= $rw->hc_core; ?></span></td>
                            <td><span><?= $rw->v_hole; ?></span></td>
                            <td>
                                <span><?= $rw->nama_status; ?></span>
                            </td>
                            <td><span><?= $rw->sh_ed_cek; ?></span></td>
                            <td>
                                <span><?= $rw->p_jam_1; ?></span>/
                                <span><?= $rw->p_jam_2; ?></span>
                            </td>
                            <td>
                                <span><?= $rw->ft_1; ?></span>/
                                <span><?= $rw->ft_2; ?></span>
                            </td>
                            <td>
                                <span><?= $rw->ms_1; ?></span>/
                                <span><?= $rw->ms_2; ?></span>
                            </td>
                            <td>
                                <span><?= $rw->ap_gm1; ?></span>/
                                <span><?= $rw->ap_gm2; ?></span>
                            </td>
                            <td>
                                <span><?= $rw->ap_dc1; ?></span>/
                                <span><?= $rw->ap_dc2; ?></span>
                            </td>
                            <td>
                                <span><?= $rw->ap_etc1; ?></span>/
                                <span><?= $rw->ap_etc2; ?></span>
                            </td>
                            <td>
                                <span><?= $rw->nama_status; ?></span>
                            </td>
                            <td><textarea class="form-control" rws="3" readonly><?= $rw->keterangan; ?></textarea></td>
                        </tr>
                    </tbody>
                    <ftooter>
                        <tr>
                            <th colspan="34">Oil Check Picture</th>
                        </tr>
                        <tr>
                            <td colspan="34">
                                <a href="<?= site_url('uploads/cs/' . $rw->oil_picture) ?>" target="_blank"><img src="<?= base_url('uploads/cs/' . $rw->oil_picture) ?>" style="width:150px"></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="34"></td>
                        </tr>
                        <tr>
                            <th>Submit</th>
                            <th>Reject</th>
                            <th>Approved</th>
                            <th>Final Approved</th>
                            <th colspan="4">Note</th>
                        </tr>
                        <tr>
                            <?php if ($rw->u_updated == null && $rw->u_approved == null && $rw->u_rejected == null) { ?>
                                <th><?= $rw->nama_pic; ?></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            <?php } elseif ($rw->u_updated == null && $rw->u_approved == null && $rw->u_rejected != null) { ?>
                                <th><span><?= $rw->nama_pic; ?></span></th>
                                <th><span><?= $rw->u_rejected; ?></span></th>
                                <th></th>
                                <th></th>
                            <?php } elseif ($rw->u_updated != null && $rw->u_approved == null && $rw->u_rejected == null) { ?>
                                <th><span><?= $rw->nama_pic; ?></span></th>
                                <th></th>
                                <th><span><?= $rw->u_updated; ?></span></th>
                                <th></th>
                            <?php } elseif ($rw->u_updated != null && $rw->u_approved != null && $rw->u_rejected == null) { ?>
                                <th><?= $rw->nama_pic; ?></th>
                                <th></th>
                                <th><span><?= $rw->u_updated; ?></span></th>
                                <th><span><?= $rw->u_approved; ?></span></th>
                            <?php } ?>
                            <th colspan="4" rowspan="2"><?= $rw->kt_reject; ?></th>
                        </tr>
                        <tr>
                            <?php if ($rw->dt_updated == 0 && $rw->dt_approved == 0 && $rw->dt_rejected == 0) { ?>
                                <th><span><?= $rw->dt_created; ?></span></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            <?php } elseif ($rw->dt_updated == 0 && $rw->dt_approved == 0 && $rw->dt_rejected != 0) { ?>
                                <th><span><?= $rw->dt_created; ?></span></th>
                                <th><span><?= $rw->dt_rejected; ?></span></th>
                                <th></th>
                                <th></th>
                            <?php } elseif ($rw->dt_updated != 0 && $rw->dt_approved == 0 && $rw->dt_rejected == 0) { ?>
                                <th><span><?= $rw->dt_created; ?></span></th>
                                <th></th>
                                <th><span><?= $rw->dt_updated; ?></span></th>
                                <th></th>
                            <?php } elseif ($rw->dt_updated != 0 && $rw->dt_approved != 0) { ?>
                                <th><span><?= $rw->dt_created; ?></span></th>
                                <th></th>
                                <th><span><?= $rw->dt_updated; ?></span></th>
                                <th><span><?= $rw->dt_approved; ?></span></th>
                            <?php } ?>
                        </tr>
                    </ftooter>
                <?php endforeach; ?>
                </table>
        </div>
    </div>
</section>
<!-- /.content -->