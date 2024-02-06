<form action="/cabang/update" method="POST" id="frmcabangedit">
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
                <input type="text" value="{{ $cabang->kode_cabang }}" readonly id="kode_cabang" class="form-control"
                    placeholder="Kode Cabang" name="kode_cabang">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-filled"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" stroke-width="0"
                            fill="currentColor"></path>
                        <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z"
                            stroke-width="0" fill="currentColor"></path>
                    </svg>
                </span>
                <input type="text" id="nama_cabang" value="{{ $cabang->nama_cabang }}" class="form-control"
                    name="nama_cabang" placeholder="Nama Cabang">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 18.5l-3 -1.5l-6 3v-13l6 -3l6 3l6 -3v7.5" />
                        <path d="M9 4v13" />
                        <path d="M15 7v5.5" />
                        <path
                            d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z" />
                        <path d="M19 18v.01" />
                    </svg>
                </span>
                <input type="text" id="lokasi_cabang" value="{{ $cabang->lokasi_cabang }}" class="form-control"
                    name="lokasi_cabang" placeholder="Lokasi Cabang">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-radar" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M21 12h-8a1 1 0 1 0 -1 1v8a9 9 0 0 0 9 -9" />
                        <path d="M16 9a5 5 0 1 0 -7 7" />
                        <path d="M20.486 9a9 9 0 1 0 -11.482 11.495" />
                    </svg>
                </span>
                <input type="text" id="radius_cabang" value="{{ $cabang->radius_cabang }}" class="form-control"
                    name="radius_cabang" placeholder="Radius Cabang">
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
    $(function() {
        $("#frmcabangedit").submit(function() {
            var kode_cabang = $("#frmcabangedit").find("#kode_cabang").val();
            var nama_cabang = $("#frmcabangedit").find("#nama_cabang").val();
            var lokasi_cabang = $("#frmcabangedit").find("#lokasi_cabang").val();
            var radius_cabang = $("#frmcabangedit").find("#radius_cabang").val();

            if (kode_cabang == "") {
                // alert('nik harus di isi');
                Swal.fire({
                    title: 'OOoops!',
                    text: 'Kode Cabang Harus Di isi!',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    $("#kode_cabang").focus();
                });

                return false;
            } else if (nama_cabang == "") {
                // alert('nik harus di isi');
                Swal.fire({
                    title: 'OOoops!',
                    text: 'Nama Cabang Harus Di isi!',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    $("#nama_cabang").focus();
                });

                return false;
            } else if (lokasi_cabang == "") {
                // alert('nik harus di isi');
                Swal.fire({
                    title: 'OOoops!',
                    text: 'Lokasi Cabang Harus Di isi!',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    $("#lokasi_cabang").focus();
                });

                return false;
            } else if (radius_cabang == "") {
                // alert('nik harus di isi');
                Swal.fire({
                    title: 'OOoops!',
                    text: 'Radius Cabang Harus Di isi!',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    $("#radius_cabang").focus();
                });

                return false;
            }

        });
    });
</script>
