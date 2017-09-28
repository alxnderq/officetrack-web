
        <section class="footer">
            <div class="container">
                <?php
                    $telefons = get_field("telefons",25);
                    if (!empty($telefons)){
                        foreach ($telefons as $item) {
                            ?>
                            <div class="telefons">
                                <img src="<?php echo $item["imagen"];?>" width="44" height="25" vspace="13">
                                <h5><?php echo $item["titulo"];?></h5>
                                <p><?php echo $item["contenido"];?>
                                </p>
                            </div>
                            <?php
                        }
                    }
                ?>               
            </div>
            <div class="colofon">
                <div class="credits">
                    <p>© 2017 OfficeTrack · All rights reserved · Various trademarks held by their respective owners</p>
                </div>
            </div>
        </section>

    </div>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.2.1.min.js"></script>
    <script src='<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js' type="text/javascript"></script>
    <?php wp_footer(); ?>

</body>
</html>
