<form action="/konfigurasi/updatejamkerja" method="POST" id="frmjk_edit">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-scan" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 7v-1a2 2 0 0 1 2 -2h2"></path>
                        <path d="M4 17v1a2 2 0 0 0 2 2h2"></path>
                        <path d="M16 4h2a2 2 0 0 1 2 2v1"></path>
                        <path d="M16 20h2a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M5 12l14 0"></path>
                    </svg>
                </span>
                <input type="text" value="{{ $jamkerja->kode_jam_kerja }}" id="kode_jam_kerja_edit"
                    class="form-control" placeholder="Kode Jam Kerja" name="kode_jam_kerja">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-scan" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 7v-1a2 2 0 0 1 2 -2h2"></path>
                        <path d="M4 17v1a2 2 0 0 0 2 2h2"></path>
                        <path d="M16 4h2a2 2 0 0 1 2 2v1"></path>
                        <path d="M16 20h2a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M5 12l14 0"></path>
                    </svg>
                </span>
                <input type="text" value="{{ $jamkerja->nama_jam_kerja }}" id="nama_jam_kerja_edit"
                    class="form-control" placeholder="Nama Jam Kerja" name="nama_jam_kerja">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm-filled"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6.072a8 8 0 1 1 -11.995 7.213l-.005 -.285l.005 -.285a8 8 0 0 1 11.995 -6.643zm-4 2.928a1 1 0 0 0 -1 1v3l.007 .117a1 1 0 0 0 .993 .883h2l.117 -.007a1 1 0 0 0 .883 -.993l-.007 -.117a1 1 0 0 0 -.993 -.883h-1v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z"
                            stroke-width="0" fill="currentColor" />
                        <path
                            d="M6.412 3.191a1 1 0 0 1 1.273 1.539l-.097 .08l-2.75 2a1 1 0 0 1 -1.273 -1.54l.097 -.08l2.75 -2z"
                            stroke-width="0" fill="currentColor" />
                        <path
                            d="M16.191 3.412a1 1 0 0 1 1.291 -.288l.106 .067l2.75 2a1 1 0 0 1 -1.07 1.685l-.106 -.067l-2.75 -2a1 1 0 0 1 -.22 -1.397z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                </span>
                <input type="text" value="{{ $jamkerja->awal_jam_masuk }}" id="awal_jam_masuk_edit"
                    class="form-control" placeholder="Awal Jam Masuk" name="awal_jam_masuk">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm-filled"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6.072a8 8 0 1 1 -11.995 7.213l-.005 -.285l.005 -.285a8 8 0 0 1 11.995 -6.643zm-4 2.928a1 1 0 0 0 -1 1v3l.007 .117a1 1 0 0 0 .993 .883h2l.117 -.007a1 1 0 0 0 .883 -.993l-.007 -.117a1 1 0 0 0 -.993 -.883h-1v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z"
                            stroke-width="0" fill="currentColor" />
                        <path
                            d="M6.412 3.191a1 1 0 0 1 1.273 1.539l-.097 .08l-2.75 2a1 1 0 0 1 -1.273 -1.54l.097 -.08l2.75 -2z"
                            stroke-width="0" fill="currentColor" />
                        <path
                            d="M16.191 3.412a1 1 0 0 1 1.291 -.288l.106 .067l2.75 2a1 1 0 0 1 -1.07 1.685l-.106 -.067l-2.75 -2a1 1 0 0 1 -.22 -1.397z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                </span>
                <input type="text" value="{{ $jamkerja->jam_masuk }}" id="jam_masuk_edit" class="form-control"
                    placeholder="Jam Masuk" name="jam_masuk">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm-filled"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6.072a8 8 0 1 1 -11.995 7.213l-.005 -.285l.005 -.285a8 8 0 0 1 11.995 -6.643zm-4 2.928a1 1 0 0 0 -1 1v3l.007 .117a1 1 0 0 0 .993 .883h2l.117 -.007a1 1 0 0 0 .883 -.993l-.007 -.117a1 1 0 0 0 -.993 -.883h-1v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z"
                            stroke-width="0" fill="currentColor" />
                        <path
                            d="M6.412 3.191a1 1 0 0 1 1.273 1.539l-.097 .08l-2.75 2a1 1 0 0 1 -1.273 -1.54l.097 -.08l2.75 -2z"
                            stroke-width="0" fill="currentColor" />
                        <path
                            d="M16.191 3.412a1 1 0 0 1 1.291 -.288l.106 .067l2.75 2a1 1 0 0 1 -1.07 1.685l-.106 -.067l-2.75 -2a1 1 0 0 1 -.22 -1.397z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                </span>
                <input type="text" value="{{ $jamkerja->akhir_jam_masuk }}" id="akhir_jam_masuk_edit"
                    class="form-control" placeholder="Akhir Jam Masuk" name="akhir_jam_masuk">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm-filled"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6.072a8 8 0 1 1 -11.995 7.213l-.005 -.285l.005 -.285a8 8 0 0 1 11.995 -6.643zm-4 2.928a1 1 0 0 0 -1 1v3l.007 .117a1 1 0 0 0 .993 .883h2l.117 -.007a1 1 0 0 0 .883 -.993l-.007 -.117a1 1 0 0 0 -.993 -.883h-1v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z"
                            stroke-width="0" fill="currentColor" />
                        <path
                            d="M6.412 3.191a1 1 0 0 1 1.273 1.539l-.097 .08l-2.75 2a1 1 0 0 1 -1.273 -1.54l.097 -.08l2.75 -2z"
                            stroke-width="0" fill="currentColor" />
                        <path
                            d="M16.191 3.412a1 1 0 0 1 1.291 -.288l.106 .067l2.75 2a1 1 0 0 1 -1.07 1.685l-.106 -.067l-2.75 -2a1 1 0 0 1 -.22 -1.397z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                </span>
                <input type="text" value="{{ $jamkerja->jam_pulang }}" id="jam_pulang_edit" class="form-control"
                    placeholder="Jam Pulang" name="jam_pulang">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <select name="lintashari" id="lintashari_edit" class="form-select">
                    <option value="">Lintas Hari</option>
                    <option value="1" {{ $jamkerja->lintashari == 1 ? 'selected' : '' }}>Ya</option>
                    <option value="0" {{ $jamkerja->lintashari == 0 ? 'selected' : '' }}>Tidak</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="form-group">
                <button class="btn btn-primary w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                        <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M14 4l0 4l-6 0l0 -4" />
                    </svg>
                    Simpan
                </button>
            </div>
        </div>
    </div>
</form>

<script>
    $("#awal_jam_masuk_edit, #jam_masuk_edit, #akhir_jam_masuk_edit,#jam_pulang_edit").mask("00:00");
    $("#frmjk_edit").submit(function() {
        var kode_jam_kerja = $("#kode_jam_kerja_edit").val();
        var nama_jam_kerja = $("#nama_jam_kerja_edit").val();
        var awal_jam_masuk = $("#awal_jam_masuk_edit").val();
        var jam_masuk = $("#jam_masuk_edit").val();
        var akhir_jam_masuk = $("#akhir_jam_masuk_edit").val();
        var jam_pulang = $("#jam_pulang_edit").val();
        var lintashari = $("#lintashari_edit").val();

        if (kode_jam_kerja == "") {
            // alert('nik harus di isi');
            Swal.fire({
                title: 'OOoops!',
                text: 'Kode Jam Kerja Harus Di isi!',
                icon: 'warning',
                confirmButtonText: 'OK'
            }).then((result) => {
                $("#kode_jam_kerja").focus();
            });

            return false;
        } else if (nama_jam_kerja == "") {
            // alert('nik harus di isi');
            Swal.fire({
                title: 'OOoops!',
                text: 'Nama Jam Kerja Harus Di isi!',
                icon: 'warning',
                confirmButtonText: 'OK'
            }).then((result) => {
                $("#nama_jam_kerja").focus();
            });

            return false;
        } else if (awal_jam_masuk == "") {
            // alert('nik harus di isi');
            Swal.fire({
                title: 'OOoops!',
                text: 'Awal Jam Masuk Harus Di isi!',
                icon: 'warning',
                confirmButtonText: 'OK'
            }).then((result) => {
                $("#awal_jam_masuk").focus();
            });

            return false;
        } else if (jam_masuk == "") {
            // alert('nik harus di isi');
            Swal.fire({
                title: 'OOoops!',
                text: 'Jam Masuk Harus Di isi!',
                icon: 'warning',
                confirmButtonText: 'OK'
            }).then((result) => {
                $("#jam_masuk").focus();
            });

            return false;
        } else if (akhir_jam_masuk == "") {
            // alert('nik harus di isi');
            Swal.fire({
                title: 'OOoops!',
                text: 'Akhir Jam Masuk Harus Di isi!',
                icon: 'warning',
                confirmButtonText: 'OK'
            }).then((result) => {
                $("#akhir_jam_masuk").focus();
            });

            return false;
        } else if (jam_pulang == "") {
            // alert('nik harus di isi');
            Swal.fire({
                title: 'OOoops!',
                text: 'Jam Pulang Harus Di isi!',
                icon: 'warning',
                confirmButtonText: 'OK'
            }).then((result) => {
                $("#jam_pulang").focus();
            });

            return false;

        } else if (lintashari == "") {
            // alert('nik harus di isi');
            Swal.fire({
                title: 'OOoops!',
                text: 'Lintas Hari Harus Di isi!',
                icon: 'warning',
                confirmButtonText: 'OK'
            }).then((result) => {
                $("#lintashari").focus();
            });

            return false;
        }

    });
</script>
