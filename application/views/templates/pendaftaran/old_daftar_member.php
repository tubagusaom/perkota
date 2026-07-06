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

        <form id="mainForm" action="<?=base_url()?>pendaftaran/save_pendaftaran" method="post">
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

                <!-- Email -->
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

                <!-- Username / handle -->
                <!-- <div class="row hf-row align-items-center">
                    <label for="handle" class="col-sm-3 col-form-label">
                        Handle
                        <span class="label-hint">Shown publicly</span>
                    </label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" id="handle" placeholder="yourhandle" />
                        </div>
                    </div>
                </div> -->

                <!-- Timezone -->
                <!-- <div class="row hf-row align-items-center">
                    <label for="timezone" class="col-sm-3 col-form-label">
                        Timezone
                    </label>
                    <div class="col-sm-9">
                        <select class="form-select" id="timezone">
                            <option value="">Select timezone…</option>
                            <option value="utc-5">UTC−05:00 · Eastern Time</option>
                            <option value="utc-6">UTC−06:00 · Central Time</option>
                            <option value="utc-7">UTC−07:00 · Mountain Time</option>
                            <option value="utc-8">UTC−08:00 · Pacific Time</option>
                            <option value="utc+0">UTC+00:00 · London</option>
                            <option value="utc+1">UTC+01:00 · Paris, Berlin</option>
                            <option value="utc+2">UTC+02:00 · Bucharest, Cairo</option>
                            <option value="utc+5.5">UTC+05:30 · Mumbai</option>
                            <option value="utc+9">UTC+09:00 · Tokyo</option>
                        </select>
                    </div>
                </div> -->

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
                        <!-- <input type="text" class="form-control" id="fullName" placeholder="Nama Bangunan / Identitas Gedung" required /> -->
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
                            <option value="a">Cagar Budaya</option>
                            <option value="b">Potensial Cagar Budaya</option>
                            <option value="c">Bukan Cagar Budaya</option>
                            <option value="d">Tidak Diketahui</option>
                        </select>
                    </div>
                </div>

            </div>

            <hr class="card-divider" />

            <!-- ─── Section 3: Preferences ─── -->
            <div class="section-head">
                <div class="dot"></div>
                <span>Preferences</span>
            </div>

            <div class="form-body">

                <!-- Theme -->
                <!-- <div class="row hf-row align-items-start">
                    <label class="col-sm-3 col-form-label">Theme</label>
                    <div class="col-sm-9">
                        <div class="radio-row">
                            <div class="radio-chip">
                                <input type="radio" id="themeSystem" name="theme" value="system" checked />
                                <label for="themeSystem">System</label>
                            </div>
                            <div class="radio-chip">
                                <input type="radio" id="themeLight" name="theme" value="light" />
                                <label for="themeLight">Light</label>
                            </div>
                            <div class="radio-chip">
                                <input type="radio" id="themeDark" name="theme" value="dark" />
                                <label for="themeDark">Dark</label>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Language -->
                <div class="row hf-row align-items-center">
                    <label for="lang" class="col-sm-3 col-form-label">Language</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="lang">
                            <option value="en">English</option>
                            <option value="fr">Français</option>
                            <option value="de">Deutsch</option>
                            <option value="es">Español</option>
                            <option value="ro">Română</option>
                            <option value="ja">日本語</option>
                        </select>
                    </div>
                </div>

            </div><!-- /form-body -->

            <hr class="card-divider" />

            <!-- ─── Section 3: Notifications ─── -->
            <div class="section-head">
                <div class="dot"></div>
                <span>Notifications</span>
            </div>

            <div class="form-body">

                <!-- Product updates -->
                <div class="row hf-row align-items-center">
                    <label class="col-sm-3 col-form-label">
                        Product updates
                        <span class="label-hint">Releases &amp; changelogs</span>
                    </label>
                    <div class="col-sm-9">
                        <div class="form-switch-custom">
                            <input class="form-check-input" type="checkbox" role="switch" id="switchUpdates" checked />
                            <span class="switch-label">Email me when a new version ships</span>
                        </div>
                    </div>
                </div>

                <!-- Usage digest -->
                <div class="row hf-row align-items-center">
                    <label class="col-sm-3 col-form-label">
                        Weekly digest
                    </label>
                    <div class="col-sm-9">
                        <div class="form-switch-custom">
                            <input class="form-check-input" type="checkbox" role="switch" id="switchDigest" />
                            <span class="switch-label">Receive a weekly usage summary</span>
                        </div>
                    </div>
                </div>

                <!-- Security alerts -->
                <div class="row hf-row align-items-center">
                    <label class="col-sm-3 col-form-label">
                        Security alerts
                        <span class="label-hint">Always on</span>
                    </label>
                    <div class="col-sm-9">
                        <div class="form-switch-custom">
                            <input class="form-check-input" type="checkbox" role="switch" id="switchSecurity" checked
                                disabled />
                            <span class="switch-label" style="color:var(--text-muted);">
                                Notify on new sign-ins and password changes
                            </span>
                        </div>
                    </div>
                </div>

            </div><!-- /form-body -->

            <!-- ─── Footer ─── -->
            <div class="form-footer">
                <span class="footer-note">Changes are saved to your workspace instantly.</span>
                <div class="footer-actions">
                    <button type="button" class="btn-ghost" id="btnReset">Discard</button>
                    <button type="submit" class="btn-primary-custom" id="btnSave">
                        <svg viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12" /></svg>
                        Save changes
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