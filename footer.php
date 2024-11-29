

<div class="section footer">
    <div class="container-fluid">
        <div class="row">
                <div class="col-6 col-md-3">
                    <div class="footer-gap">
                        <h3><?php pll_e("Information") ?></h3>
                        <p>CVR: 593826</p>
                    </div> 
                </div>

                <div class="col-6 col-md-3">
                    <div class="footer-gap">
                        <h3><?php pll_e("Adresse") ?></h3>
                        <p>Rossagerdi 3</p>
                        <p>530 Fuglafjørdur</p>
                        <p><?php pll_e("Færøerne") ?></p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="footer-gap">
                        <h3><?php pll_e("Kontakt") ?></h3>
                        <a href="<?php echo site_url('/contact'); ?>"><p><?php pll_e("Kontaktformular") ?></p></a>
                        <a href="tel:+298770060"><p>Tlf: +298 770060</p></a>
                        <a href="mailto:hk@gmd.fo"><p>Mail: hk@gmd.fo</p></a>
                    </div>
                </div>
            
                <div class="col-6 col-md-3">
                    <div class="footer-gap">
                        <h3><?php pll_e("Find os på") ?></h3>
                        <div class="row">
                            <a href="#">
                                <p>LinkedIn</p>
                            </a>
                        </div>
                        <div class="row">
                            <a href="#" class="d-flex align-items-center">
                                <i class="bi bi-facebook me-2"></i> Facebook
                            </a>
                        </div>
                        <div class="row">
                            <a href="#">
                                <p>Instagram</p>
                            </a>
                        </div>
                        
                    </div>
                </div>
        </div>
    </div>
</div>


<?php wp_footer(); ?>

</body>
</html>