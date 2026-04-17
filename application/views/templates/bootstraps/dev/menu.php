<div class="profile">
    <img src="<?php echo base_url() ?>assets/_tera_byte/img/apple-touch-icon.png" alt="" class="img-fluid rounded-circle">
    <h1 class="text-light text-center"><a href="<?php echo base_url() ?>"><?=$biodata->nama_lengkap ?></a></h1>

    <div class="social-links mt-3 text-center">
        <a href="<?=$sosmed->linkedin?>" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="<?=$sosmed->facebook?>" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="<?=$sosmed->twitter?>" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="<?=$sosmed->instagram?>" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://wa.me/<?=$no_wa?>?text=<?=$sosmed->text_wa?>" target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
    </div>
</div>

<nav id="navbar" class="nav-menu navbar">
    <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <!-- <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li> -->
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-image"></i> <span>Portfolio</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        <li>
            <a href="#loginModal" class="nav-link scrollto" data-toggle="modal" data-target="#loginModal">
            	<i class="fa fa-sign-in"></i> <span>&nbsp;Login</span>
            </a>
        </li>
    </ul>
</nav><!-- .nav-menu -->