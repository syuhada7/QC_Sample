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
            <h3 class="box-title"><?= ucfirst($page) ?> Checksheet Backcover</h3>
            <div class="pull-right">
                <Span hidden><?= $id = $this->fungsi->user_login()->id_user; ?></Span>
                <a href="<?= site_url('Injection_C/index') ?>" class="btn btn-warning">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <div class="header">
                    <img alt="Company Logo" height="50" src="<?= base_url() ?>uploads/logo/logo.png" width="150">
                </div>
            </div>
            <form action="<?= base_url('Injection_C/process_bc'); ?>" method="post" enctype="multipart/form-data" onsubmit="return false">
                <table class="table-wrapper">
                    <div class="form-group row">
                        <div class="col-xs-3">
                            <br>
                            <label>PIC Name</label>
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="nama_pic" value="<?= $this->fungsi->user_login()->nama_pic; ?>" class="form-control" readonly>
                            <input type="hidden" name="id_user" value="<?= $this->fungsi->user_login()->id_user; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-3">
                            <label>Area</label>
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="area" value="<?= $this->fungsi->user_login()->area; ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-3">
                            <label>Shift *</label>
                        </div>
                        <div class="col-xs-3">
                            <select name="shift" class="form-control" id="shift">
                                <option>--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <input type="hidden" name="id_dp" class="form-control" value="<?= $dimensi; ?>" readonly>
                            <input type="hidden" name="id_cs" class="form-control" value="<?= $c_sheet; ?>" readonly>
                            <input type="hidden" name="id_lb" class="form-control" value="<?= $lb_c; ?>" readonly>
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
                                <th colspan="6">
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
                                    S/N (Serial No.) Lable
                                </th>
                                <th rowspan="3">
                                    P/N Slide Lable AV
                                </th>
                                <th rowspan="3">
                                    P/N Decor Lable
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
                                <th colspan="2">
                                    VESA HOLE
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
                                <th rowspan="1" colspan="2">
                                    Hole Screw Stand 2 Pole
                                </th>
                                <th rowspan="2">
                                    Core
                                </th>
                                <th rowspan="2">
                                    Cavity
                                </th>
                                <th rowspan="2">
                                    Spec
                                </th>
                                <th rowspan="2">
                                    Actual
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
                            <tr>
                                <th>
                                    Spec
                                </th>
                                <th>
                                    Actual
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><select name="mesin" class="form-control" id="mesin" required>
                                        <option>--</option>
                                        <?php foreach ($mesin as $mc) : ?>
                                            <option value="<?= $mc->id_mesin ?>"><?= $mc->nama_mesin ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td><input type="text" name="dt_created" class="form-control" <?= date_default_timezone_set("Asia/Jakarta"); ?> value="<?= date('Y-m-d H:i:s') ?>" readonly></td>
                                <td><input type="text" name="model" class="form-control"></td>
                                <td><input type="text" name="part_name" class="form-control"></td>
                                <td><input type="text" name="part_no" class="form-control"></td>
                                <td><input type="text" name="resin" class="form-control"></td>
                                <td><input type="text" name="name_core" class="form-control"></td>
                                <td>
                                    <input type="text" name="d_spek1" class="form-control">
                                    <br>
                                    <input type="text" name="d_spek2" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="d_aktual_1" class="form-control">
                                    <br>
                                    <input type="text" name="d_aktual_2" class="form-control">
                                    <br>
                                    <input type="text" name="d_aktual_3" class="form-control">
                                    <br>
                                    <input type="text" name="d_aktual_4" class="form-control">
                                    <br>
                                    <input type="text" name="d_aktual_5" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="d_sp_bending1" class="form-control">
                                    <br>
                                    <input type="text" name="d_sp_bending2" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="d_sp_aktual_1" class="form-control">
                                    <br>
                                    <input type="text" name="d_sp_aktual_2" class="form-control">
                                    <br>
                                    <input type="text" name="d_sp_aktual_3" class="form-control">
                                    <br>
                                    <input type="text" name="d_sp_aktual_4" class="form-control">
                                </td>
                                <td><input type="text" name="hs_spek" class="form-control"></td>
                                <td>
                                    <input type="text" name="hs_aktual_1" class="form-control">
                                    <br>
                                    <input type="text" name="hs_aktual_2" class="form-control">
                                    <br>
                                    <input type="text" name="hs_aktual_3" class="form-control">
                                    <br>
                                    <input type="text" name="hs_aktual_4" class="form-control">
                                </td>
                                <td><input type="text" name="suhu" class="form-control"></td>
                                <td><input type="text" name="berat_1" class="form-control"></td>
                                <td><input type="text" name="mtc_core" class="form-control"></td>
                                <td><input type="text" name="mtc_kaviti" class="form-control"></td>
                                <td>
                                    <input type="text" name="lb_sn1" class="form-control">
                                    <br>
                                    <input type="text" name="lb_sn2" class="form-control">
                                    <br>
                                    <input type="text" name="lb_sn3" class="form-control">
                                    <br>
                                    <input type="text" name="lb_sn4" class="form-control">
                                    <br>
                                    <input type="text" name="lb_sn5" class="form-control">
                                </td>
                                <td><input type="text" name="lb_av" class="form-control"></td>
                                <td><input type="text" name="lb_decor" class="form-control"></td>
                                <td><input type="text" name="hc_core" class="form-control"></td>
                                <td><input type="text" name="v_hole" class="form-control"></td>
                                <td>
                                    <select name="oil_cek" class="form-control" id="oil_cek">
                                        <option>--</option>
                                        <option value="6">OK</option>
                                        <option value="7">NG</option>
                                    </select>
                                </td>
                                <td><input type="text" name="sh_ed_cek" class="form-control"></td>
                                <td><input type="text" name="vh_spek" class="form-control"></td>
                                <td>
                                    <input type="text" name="vh_aktual1" class="form-control">
                                    <br>
                                    <input type="text" name="vh_aktual2" class="form-control">
                                    <br>
                                    <input type="text" name="vh_aktual3" class="form-control">
                                    <br>
                                    <input type="text" name="vh_aktual4" class="form-control">
                                </td>
                                <td>
                                    <input type="number" name="p_jam_1" class="form-control">
                                    <br>
                                    <input type="number" name="p_jam_2" class="form-control">
                                </td>
                                <td>
                                    <input type="number" name="ft_1" class="form-control">
                                    <br>
                                    <input type="number" name="ft_2" class="form-control">
                                </td>
                                <td>
                                    <input type="number" name="ms_1" class="form-control">
                                    <br>
                                    <input type="number" name="ms_2" class="form-control">
                                </td>
                                <td>
                                    <input type="number" name="ap_gm1" class="form-control">
                                    <br>
                                    <input type="number" name="ap_gm2" class="form-control">
                                </td>
                                <td>
                                    <input type="number" name="ap_dc1" class="form-control">
                                    <br>
                                    <input type="number" name="ap_dc2" class="form-control">
                                </td>
                                <td>
                                    <input type="number" name="ap_etc1" class="form-control">
                                    <br>
                                    <input type="number" name="ap_etc2" class="form-control">
                                </td>
                                <td>
                                    <select name="status_pr" class="form-control" id="status_pr">
                                        <option>--</option>
                                        <option value="6">OK</option>
                                        <option value="7">NG</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" rows="3" name="keterangan"></textarea></td>
                            </tr>
                        </tbody>
                        <tfooter>
                            <tr>
                                <th colspan="34">
                                    <span> Attacment Oil Test</span>
                                    <input type="file" name="image" class="form-control">
                                </th>
                            </tr>
                            <tr>
                                <th colspan="34">
                                    <div class="notes">
                                        <div class="form-group">
                                            <div class="pull-left">
                                                <button class="btn btn-success" type="submit" name="<?= $page ?>">
                                                    <i class="fa fa-save"></i> Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </tfooter>
                </table>
            </form>
        </div>
    </div>
</section>
<!-- /.content -->