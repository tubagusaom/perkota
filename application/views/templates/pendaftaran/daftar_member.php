<div class="page-wrap">

    <!-- Page header -->
    <div class="page-header">
        <!-- <div class="badge-pill">Settings</div> -->
        
        <h1 style="color:#233c58!important">
            <a href="<?=base_url() ?>"><img src="<?php echo base_url() ?>assets_perkota/images/logo_perkota_transparent_1.png" alt="perkota" style="width:70px"></a>
            Daftar Member
        </h1>
        <!-- <p>Manage your personal details, preferences, and notification settings.</p> -->
    </div>

    <div class="form-card">

        <!-- ─── Section 1: Pribadi ─── -->
        <div class="section-head">
            <div class="dot"></div>
            <span>Data Pribadi</span>
        </div>

        <form id="mainForm" action="<?=base_url()?>qr-payment" method="post">
            <div class="form-body">

                <div class="row hf-row align-items-center">
                    <label for="fullName" class="col-sm-4 col-form-label">
                        Nama
                        <span class="label-hint">Pemilik / Instansi</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fullName" placeholder="Nama Pemilik / Instansi" required />
                        <div class="invalid-feedback">Silakan masukkan Nama.</div>
                    </div>
                </div>

                <div class="row hf-row align-items-center">
                    <label for="fullName" class="col-sm-4 col-form-label">
                        Kontak
                        <span class="label-hint">Pemilik / Penanggung Jawab</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="fullName" placeholder="Kontak Pemilik / Penanggung Jawab" required />
                        <div class="invalid-feedback">Silakan masukkan Kontak.</div>
                    </div>
                </div>

                <div class="row hf-row align-items-center">
                    <label for="emailAddr" class="col-sm-4 col-form-label">
                        Email
                    </label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="emailAddr" placeholder="you@email.com"
                            required />
                        <div class="invalid-feedback">Silakan masukkan alamat email yang valid.</div>
                    </div>
                </div>

            </div><!-- /form-body -->

            <hr class="card-divider" />

            <!-- ─── Section 2: Bangunan ─── -->
            <div class="section-head">
                <div class="dot"></div>
                <span>Data Bangunan</span>
            </div>

            <div class="form-body">

                <div class="row hf-row align-items-center">
                    <label for="fullName" class="col-sm-4 col-form-label">
                        Nama Bangunan
                        <span class="label-hint">Identitas Gedung</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fullName" placeholder="Nama Bangunan / Identitas Gedung" required />
                        <div class="invalid-feedback">Silakan masukkan Nama.</div>
                    </div>
                </div>

                <div class="row hf-row align-items-center">
                    <label for="fullName" class="col-sm-4 col-form-label">
                        Alamat Lengkap Bangunan
                    </label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="alamat" placeholder="Masukkan alamat Bangunan di sini..." required></textarea>
                        <div class="invalid-feedback">Silakan masukkan Alamat Lengkap.</div>
                    </div>
                </div>

                <div class="row hf-row align-items-center">
                    <label for="fullName" class="col-sm-4 col-form-label">
                        Kode Blok / Zona
                        <span class="label-hint">jika ada</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fullName" placeholder="Blok / Zona" />
                        <div class="invalid-feedback">Silakan masukkan Kode Blok / Zona.</div>
                    </div>
                </div>

                <div class="row hf-row align-items-center">
                    <label for="fullName" class="col-sm-4 col-form-label">
                        Tahun Bangunan
                        <span class="label-hint">Pembangunan / Perkiraan Usia</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="fullName" placeholder="Tahun Pembangunan / Perkiraan Usia Bangunan" required />
                        <div class="invalid-feedback">Silakan masukkan Tahun Pembangunan / Perkiraan Usia Bangunan.</div>
                    </div>
                </div>

                <div class="row hf-row align-items-center">
                    <label for="fullName" class="col-sm-4 col-form-label">
                        Fungsi Bangunan
                        <span class="label-hint">Saat Ini</span>
                    </label>
                    <div class="col-sm-8">
                        <select class="form-select" id="lang">
                            <option value="">Pilih Fungsi Bangunan</option>
                            <option value="a">Museum</option>
                            <option value="b">Kantor</option>
                            <option value="c">Usaha/Komersial</option>
                            <option value="d">Gudang</option>
                            <option value="e">Hunian</option>
                            <option value="f">Kosong</option>
                        </select>
                    </div>
                </div>

                <div class="row hf-row align-items-center">
                    <label for="fullName" class="col-sm-4 col-form-label">
                        Status Kepemilikan
                    </label>
                    <div class="col-sm-8">
                        <select class="form-select" id="lang">
                            <option value="">Pilih Status Kepemilikan</option>
                            <option value="a">BUMN</option>
                            <option value="b">PEMPROV</option>
                            <option value="c">Pemerintah Pusat</option>
                            <option value="d">Individu</option>
                            <option value="e">Yayasan / Organisasi</option>
                            <option value="f">Perusahaan Swasta</option>
                            <option value="f">Tidak Diketahui</option>
                        </select>
                    </div>
                </div>

                <div class="row hf-row align-items-center">
                    <label for="fullName" class="col-sm-4 col-form-label">
                        Dokumen Kepemilikan
                    </label>
                    <div class="col-sm-8">
                        <select class="form-select" id="lang">
                            <option value="">Pilih Kondisi Kepemilikan</option>
                            <option value="a">SHM</option>
                            <option value="b">SHGB</option>
                            <option value="c">HGU</option>
                            <option value="d">Girik</option>
                            <option value="e">Atas Nama Pemerintah</option>
                            <option value="f">Tidak Tersedia</option>
                        </select>
                    </div>
                </div>

                <div class="row hf-row align-items-center">
                    <label for="fullName" class="col-sm-4 col-form-label">
                        Kondisi Bangunan
                    </label>
                    <div class="col-sm-8">
                        <select class="form-select" id="lang">
                            <option value="">Pilih Kondisi Bangunan</option>
                            <option value="a">Baik</option>
                            <option value="b">Cukup</option>
                            <option value="c">Rusak Ringan</option>
                            <option value="d">Rusak Berat</option>
                            <option value="e">Tidak Layak</option>
                        </select>
                    </div>
                </div>

                <div class="row hf-row align-items-center">
                    <label for="fullName" class="col-sm-4 col-form-label">
                        Status Pelestarian
                    </label>
                    <div class="col-sm-8">
                        <select class="form-select" id="lang">
                            <option value="">Pilih Status Pelestarian</option>
                            <option value="a">Cagar Budaya</option>
                            <option value="b">Potensial Cagar Budaya</option>
                            <option value="c">Bukan Cagar Budaya</option>
                            <option value="d">Tidak Diketahui</option>
                        </select>
                    </div>
                </div>

            </div>

            <hr class="card-divider" />


            <!-- ─── Footer ─── -->
            <div class="form-footer">
                <span class="footer-note">
                    Copyright &copy; 2026 PERKOTA
                    - Design: <a rel="nofollow" href="https://terabytee.my.id" class="tm-footer-link">terabytee</a>
                </span>
                <div class="footer-actions">
                    <button type="button" class="btn-ghost" id="btnReset">Kosongkan Formulir</button>
                    <button type="submit" class="btn-primary-custom" id="btnSave">
                        <!-- <svg viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12" />
                        </svg> -->
                        Lanjutkan
                    </button>
                </div>
            </div>

        </form>
    </div><!-- /form-card -->
</div>

<!-- Toast -->
<div class="toast-wrap">
    <div class="toast-msg" id="toast">
        <span class="check">✓</span> Profile updated successfully
    </div>
</div>