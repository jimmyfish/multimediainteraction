<?php
include('function/algorithm.php');
include('layouts/head.php');
?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Hasil
            <small>didapatkan dari hasil inputan anda</small>
        </h1>
        </section>
        <section class="content">
            <div class="container">

                <!--                SHOW RESULT-->
                <?php
                if (key($result) == 'probRam') {
                    include('pages/ram.php');
                } elseif (key($result) == 'probVga') {
                    include('pages/vga.php');
                } elseif (key($result) == 'probChp') {
                    include('pages/chip.php');
                } elseif (key($result) == 'probPow') {
                    include('pages/power.php');
                } elseif (key($result) == 'probPrc') {
                    include('pages/proc.php');
                } else {
                    echo "HASIL TIDAK DITEMUKAN";
                }
                ?>
            </div>
        </section>

    </div>



    <?php
include('layouts/foot.php');
?>