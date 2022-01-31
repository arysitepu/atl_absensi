<?php if ($this->session->userdata('logged_in') == true) : ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets'); ?>/assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="<?= (empty($dataapp['logo_instansi'])) ? base_url('assets/img/clock-image.png') : (($dataapp['logo_instansi'] == 'default-logo.png') ? base_url('assets/img/clock-image.png') : base_url('storage/setting/' . $dataapp['logo_instansi'])); ?>">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $title; ?></title>
        <link href="<?= base_url('assets'); ?>/css/styles.css" rel="stylesheet" />
        <link href="<?= base_url('assets'); ?>/css/bootstrap.css" rel="stylesheet" />
        <link href="<?= base_url('assets'); ?>/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet" />
        <link href="<?= base_url('assets'); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <link href="<?= base_url('assets'); ?>/vendor/jonthornton-jquery-timepicker/jquery.timepicker.min.css" rel="stylesheet" />
        <link href="<?= base_url('assets'); ?>/vendor/bootstrap-toggle-master/css/bootstrap4-toggle.min.css" rel="stylesheet" />
        <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
        <link href="<?= base_url('assets'); ?>/vendor/leaflet/leaflet.css" rel="stylesheet" />
        <link href="<?= base_url('assets'); ?>/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <script src="<?= base_url('assets'); ?>/vendor/leaflet/leaflet.js"></script>
        <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <style rel="stylesheet">
            .select2-container--default .select2-selection--single {
                background-color: #fff;
                border: 1px solid #ced4da;
                border-radius: 4px;
            }
            .select2-container--default .select2-selection--single .select2-selection__arrow {
                height: 26px;
                position: absolute;
                top: 6px;
                right: 1px;
                width: 20px;
            }
            .select2-container .select2-selection--single {
                box-sizing: border-box;
                cursor: pointer;
                display: block;
                height: 38px;
                user-select: none;
                -webkit-user-select: none;
            }
            .select2-container--default .select2-selection--single .select2-selection__rendered {
                color: #444;
                line-height: 36px;
            }
            .is-invalid .select2-container--default .select2-selection--single {
                border: 1px solid #e30808 !important;
            }
        </style>
    </head>

    <body class="sb-nav-fixed">
    <?php else : ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <link rel="icon" type="image/png" href="<?= (empty($dataapp['logo_instansi'])) ? base_url('assets/img/clock-image.png') : (($dataapp['logo_instansi'] == 'default-logo.png') ? base_url('assets/img/clock-image.png') : base_url('storage/setting/' . $dataapp['logo_instansi'])); ?>">
            <meta name="author" content="" />
            <title><?= $title; ?></title>
            <link href="<?= base_url('assets'); ?>/css/styles.css" rel="stylesheet" />
            <link href="<?= base_url('assets'); ?>/css/bootstrap.css" rel="stylesheet" />
            <link href="<?= base_url('assets'); ?>/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet" />
            <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
            <style>
                body{
                    background: #11998e;  /* fallback for old browsers */
                    background: -webkit-linear-gradient(to right, #38ef7d, #11998e);  /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to right, #38ef7d, #11998e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


                }    
            </style>
        </head>

        <body>
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <div class="overlay-auth">
                    </div>
                    <main>
                    <?php endif; ?>