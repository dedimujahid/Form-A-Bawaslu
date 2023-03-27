
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Tambah Data Customer</h1>
                <b>FORM. A</b> <br>
                <b>LAPORAN HASIL PENGAWASAN PEMILU</b> <br>
                <b>NOMOR :    /LHP/PM.00.02/JL.34/00/2023</b> <br>
            </div>
            <div class="panel-body">
            <form action="{{url('customer')}}" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <b>I. Data Pengawas Pemilihan: </b> <br>
                <small>Tahapan yang diawasi</small><br>
                    <div class="form-group">
                        <label for="nama">Nama Pelaksana Tugas</label>
                        <input type="text" name="nama" id="nama" class="w-full py-2 rounded" required="require">
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" id="nomor_telepon" class="w-full py-2 rounded">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="w-full py-2 rounded">
                    </div>
                    <div class="form-floating mb-4">
                        <label for="floatingInput">Jabatan :</label>
                        <input type="text" class="form-control" id="jabatan" required name="jabatan">
                    </div>
                     <div class="form-floating mb-4">
                        <label for="floatingInput" id="label_noktp">Nomor Surat Perintah : </label>
                        <input type="number" class="form-control" id="nomor_surat_perintah" required name="nomor_surat_perintah" >
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="w-full py-2 rounded">
                    </div>
                    
                    <b>II. Kegiatan Pengawasan</b> <br>
                    <small>1. Kegiatan I</small><br>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control bg-white" id="bentuk1"  name="bentuk1">
                        <label for="floatingInput">a. Bentuk :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="tujuan1" required name="tujuan1" >
                        <label for="floatingInput">b. Tujuan :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="sasaran1" required name="sasaran1" >
                        <label for="floatingInput">c. Sasaran :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="waktudantempat1" required name="waktudantempat1" >
                        <label for="floatingInput">d. Waktu dan Tempat :</label>
                    </div>

                    <small>2. Kegiatan II</small><br>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control bg-white" id="bentuk2"  required name="bentuk2">
                        <label for="floatingInput">a. Bentuk :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="tujuan2" required name="tujuan2" >
                        <label for="floatingInput">b. Tujuan :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="sasaran2" required name="sasaran2" >
                        <label for="floatingInput">c. Sasaran :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="waktudantempat2" required name="waktudantempat2" >
                        <label for="floatingInput">d. Waktu dan Tempat :</label>
                    </div>
               
                <b>Uraian Singkat Hasil Pengawasan</b> <br>
                    <div class="form-group mb-4">
                        <input class="form-control" placeholder="uraian_singkat" name="uraian_singkat" id="uraian_singkat" style="height: 100px">
                        <label for="floatingInput">Isi Uraian</label>
                    </div>

                <b>III. Informasi Dugaan Pelanggaran : </b> <br>
                <small>1. Peristiwa</small><br>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control bg-white" id="peristiwa"  required name="peristiwa">
                        <label for="floatingInput">a. Peristiwa :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="tempat_kejadian" required name="tempat_kejadian" >
                        <label for="floatingInput">b. Tempat Kejadian :</label>
                    </div>
  
                    <div class="form-floating mb-4">
                        <input type="number" class="form-control" id="waktu_kejadian" required name="waktu_kejadian" >
                        <label for="floatingInput">c. Waktu Kejadian : </label>
                    </div>
                    <div class="form-floating mb-4">
                        <input class="form-control" placeholder="pelaku" name="pelaku" id="pelaku" style="height: 100px" >
                        <label for="floatingTextarea2">d. Pelaku :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input class="form-control" placeholder="alamat_peristiwa" name="alamat_peristiwa" id="alamat_peristiwa" style="height: 100px">
                        <label for="floatingTextarea2">e. Alamat :</label>
                    </div>

                    <small>2. Saksi-saksi</small><br>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control bg-white" id="nama_saksi1"  required name="nama_saksi1">
                        <label for="floatingInput">a. Nama :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="alamat_Saksi1" required name="alamat_Saksi1" >
                        <label for="floatingInput"> Alamat :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="nama_saksi2" required name="nama_saksi2" >
                        <label for="floatingInput">b. Nama :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="alamat_saksi2" required name="alamat_saksi2" >
                        <label for="floatingInput">Alamat :</label>
                    </div>

                    <small>3. Alat Bukti</small><br>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control bg-white" id="alat_bukti_a"  required name="alat_bukti_a">
                        <label for="floatingInput">a.</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="alat_bukti_b" required name="alat_bukti_b" >
                        <label for="floatingInput">b.</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="alat_bukti_c" required name="alat_bukti_c" >
                        <label for="floatingInput">c.</label>
                    </div>


                    <small>4. Barang Bukti</small><br>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control bg-white" id="barang_bukti_a"  required name="barang_bukti_a">
                        <label for="floatingInput">a.</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="barang_bukti_b" required name="barang_bukti_b" >
                        <label for="floatingInput">b.</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="barang_bukti_c" required name="barang_bukti_c">
                        <label for="floatingInput">c.</label>
                    </div>
             

                <b>Uraian Singkat Dugaan Pelanggaran</b> <br>
                    <div class="form-group mb-4">
                        <input class="form-control" placeholder="uraian_singkat_dugaan" name="uraian_singkat_dugaan" id="uraian_singkat_dugaan" style="height: 100px" >
                        <label for="floatingInput">Isi Uraian</label>
                    </div> 

                    <small>Malang, </small><br>
                    <small>Pelaksana Tugas,</small><br>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" value="Simpan" class="px-3 py-2 text-white bg-green-600" >{!!csrf_field()!!}
                    </div>
                    </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>

                
  
