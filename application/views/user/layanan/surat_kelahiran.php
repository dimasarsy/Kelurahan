<div class="container">
    <div class="container position-relative zindex-5 text-center pt-5 mt-lg-4 mt-xl-5 surat">
        <h3 class="display-1"><span class="text-black fw-normal">SURAT KELAHIRAN</span></h3>
    </div>
</div>

<form id="regForm" method="post" action="<?= base_url('layanan/in_surat_kelahiran'); ?>" enctype="multipart/form-data">
    <div id="container">
        <div id="label">
            <h4>Persyaratan</h4>
        </div>
        <div class="tab">
            <div class="syarat">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>PERSIAPKAN!</strong> Silahkan perhatikan dan lengkapi berkas persyaratan sebelum
                    melanjutkan.
                </div>
                <ol>
                    <li>Surat Pengantar RT/RW</li>
                    <li>Surat Kelahiran Bidan/ Dokter /Rumah Sakit</li>
                    <li>KTP Orang Tua</li>
                    <li>Kartu Keluarga</li><br>
                    <span class="text-danger">* </span>Berkas diupload ke sistem dengan format<span class="text-danger">
                        (jpg/png/pdf)</span> dengan Ukuran <span class="text-danger">(Maks 2MB)</span>
                </ol>
            </div>
        </div>
    </div>

    <div id="container">
        <div id="label">
            <h4>Data Diri</h4>
        </div>
        <div class="tab">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?= $user['nik']; ?>"
                    disabled required>
                <label for="floatingInput">NIK <span class="text-danger">*</span></label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $user['name']; ?>"
                    disabled required>
                <label for="floatingPassword">Nama <span class="text-danger">*</span></label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" name="hubungan" requiredd>
                    <option selected>-- Pilih salah satu --</option>
                    <option value="anak">Anak</option>
                    <option value="orang_tua">Orang Tua</option>
                    <option value="saudara">Saudara</option>
                    <option value="pasangan">Suami/Istri</option>
                    <option value="tetangga">Tetangga</option>
                    <option value="lain">Lain-lain</option>
                </select>
                <label for="floatingSelect">Hubungan Keluarga <span class="text-danger">*</span></label>
            </div>
        </div>
    </div>

    <div id="container">
        <div id="label">
            <h4>Data Pribadi</h4>
        </div>
        <div class="tab mb-3">
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="anak" placeholder="Nama Anak" value="" requiredd>
                <label for="floatingInput">Nama Anak <span class="text-danger">*</span></label>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input class="form-control" type="date" name="tgl_lahir" requiredd>
                        <label for="floatingInputGrid">Tanggal Lahir <span class="text-danger">*</span> </label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" value=""
                            requiredd>
                        <label for="floatingInput">Tempat Lahir <span class="text-danger">*</span></label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example"
                            name="jk" requiredd>
                            <option selected>-- Pilih salah satu --</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <label for="floatingSelectGrid">Jenis Kelamin <span class="text-danger">*</span></label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="ayah" placeholder="Nama Ayah" value="" requiredd>
                <label for="floatingPassword">Nama Ayah <span class="text-danger">*</span> </label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="ibu" placeholder="Nama Ibu" value="" requiredd>
                <label for="floatingPassword">Nama Ibu <span class="text-danger">*</span> </label>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example"
                            name="rw" requiredd>
                            <option selected>-- Pilih salah satu --</option>
                            <option value="1">Pager</option>
                            <option value="2">Ngumbuk</option>
                            <option value="3">Bendet</option>
                        </select>
                        <label for="floatingSelectGrid">Dusun <span class="text-danger">*</span> </label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input class="form-control" type="number" min="1" name="rt" placeholder="RT" requiredd>
                        <label for="floatingInputGrid">RT <span class="text-danger">*</span> </label>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div id="container">
        <div id="label">
            <h4>Berkas Syarat</h4>
        </div>
        <div class="tab">
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Surat Pengantar RT/RW<span class="text-danger">
                        *</span> </label>
                <input class="form-control" type="file" accept=".jpg, .png, .jpeg, .pdf" name="pengantar_file" requiredd
                    multiple>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Surat Bukti Kelahiran <span class="text-danger">
                        *</span> </label>
                <input class="form-control" type="file" accept=".jpg, .png, .jpeg, .pdf" name="ket_file" requiredd
                    multiple>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Kartu Keluarga <span class="text-danger">
                        *</span> </label>
                <input class="form-control" type="file" accept=".jpg, .png, .jpeg, .pdf" name="kk_file" requiredd
                    multiple>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">KTP Orang Tua <span class="text-danger">
                        *</span> </label>
                <input class="form-control" type="file" accept=".jpg, .png, .jpeg, .pdf" name="ktp_file" requiredd
                    multiple>
            </div>
            <div class="mb-3">

            </div>
        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>

            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </div>
</form>