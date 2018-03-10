<?php

$url = "/games";

?>
    <section>
        <nav>
            <?php
            if($ranga == 6)
            {
            ?>
            <div class="nav">
                <h1>Ranga 6</h1>
            </div>
            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/61">Podania</a>
            </div>
            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/62">Użytkownicy</a>
            </div>
            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/63">Uprawnienia</a>
            </div>
            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/64">Nowości na stronie</a>
            </div>
            <?php
            }
            if($ranga >= 5)
            {
            ?>
            <div class="nav">
                <h1>Ranga 5</h1>
            </div>

            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/51">Banowani</a>
            </div>
            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/52">Ustawienia</a>
            </div>
            <?php
            }
            if($ranga >= 4)
            {
            ?>
            <div class="nav">
                <h1>Ranga 4</h1>
            </div>

            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/41">Edycja elementów</a>
            </div>
            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/42">Reklamy</a>
            </div>
            <?php
            }
            if($ranga >= 3)
            {
            ?>
            <div class="nav">
                <h1>Ranga 3</h1>
            </div>

            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/31">Skargi</a>
            </div>
            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/32">Dodawane Materiały</a>
            </div>
            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/33">Błedy w kodzie</a>
            </div>
            <?php
            }
            if($ranga >= 2)
            {
            ?>
            <div class="nav">
                <h1>Ranga 2</h1>
            </div>

            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/21">Dodawane ogloszenia</a>
            </div>
            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/22">Zlecenia</a>
            </div>
            <?php
            }
            if($ranga >= 1)
            {
            ?>
            <div class="nav">
                <h1>Ranga 1</h1>
            </div>

            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/11">---</a>
            </div>
            <div class="ulr">
                <a href="<?php echo $url; ?>/index.php/admin/index/12">---</a>
            </div>
<?php
}

?>
        </nav>
        <section>
            
<?php
    echo $body;
?>          
        </section>
