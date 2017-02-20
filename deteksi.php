<?php

include('function/config.php');
include('layouts/head.php');

?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Deteksi Gejala
                <small>List Gejala</small>
            </h1>
        </section>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <section class="content">

            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        &nbsp;
                    </div>
                    <div class="col-md-8">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-check-square text-danger"></i> Daftar Gejala</h3>
                            </div>
                            <form action="hasil.php" method="post">
                                <div class="box-body">
                                    <h4>Silahkan centang gejala yang anda alami</h4>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th style="width:5%;text-align:center;">No.</th>
                                            <th style="width:5%;text-align:center;"><i class="fa fa-check-square"></i></th>
                                            <th style="text-align:center;">Gejala</th>
                                        </tr>
                                        <?php include('layouts/gejala.php'); ?>
                                    </table>
                                    <p>&nbsp;</p>
                                    <input type="submit" class="btn btn-success btn-block" value="SUBMIT">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include('layouts/foot.php'); ?>