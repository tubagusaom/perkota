<!-- Theme Custom -->
<!-- <script src="<?= base_url() ?>assets_perkota/js/jquery-1.9.1.min.js"></script>
<script src="<?= base_url() ?>assets_perkota/slick/slick.min.js"></script>
<script src="<?= base_url() ?>assets_perkota/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>assets_perkota/js/jquery.singlePageNav.min.js"></script>
<script src="<?= base_url() ?>assets_perkota/js/bootstrap.min.js"></script>



<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/limonte-sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/public/login.js" type="text/javascript"></script> -->



<!-- <script src="<?php echo base_url() ?>assets/js/limonte-sweetalert2/sweetalert2.all.min.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const form = document.getElementById('mainForm');
    const toast = document.getElementById('toast');
    const btnReset = document.getElementById('btnReset');

    // Submit with inline validation
    // form.addEventListener('submit', e => {
    //     e.preventDefault();
    //     if (!form.checkValidity()) {
    //         form.classList.add('was-validated');
    //         return;
    //     }
    //     form.classList.remove('was-validated');
    //     showToast();
    // });

    // Discard — clear validation state
    btnReset.addEventListener('click', () => {
        form.classList.remove('was-validated');
        form.reset();
    });

    function showToast() {
        toast.classList.add('show');
        setTimeout(() => toast.classList.remove('show'), 3000);
    }
</script>

</body>

</html>