@include('layouts.index')
    <title>Edit Form A</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Edit Data Form A
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Edit Data Form A</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('customer/update', $customer->id_customer)}}" method="post">

                <div class="form-group">
                        <label for="nama">Nama Pelaksana Tugas</label>
                        <input type="text" name="nama" id="nama" value="{{$customer->nama}}" class="w-full py-2 rounded" required="require">
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" value="{{$customer->nomor_telepon}}" id="nomor_telepon" class="w-full py-2 rounded">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{$customer->email}}" id="email" class="w-full py-2 rounded">
                    </div>
                    <div class="form-floating mb-4">
                        <label for="floatingInput">Jabatan :</label>
                        <input type="text" class="form-control" value="{{$customer->jabatan}}" id="jabatan" required name="jabatan">
                    </div>
                     <div class="form-floating mb-4">
                        <label for="floatingInput" id="label_noktp">Nomor Surat Perintah : </label>
                        <input type="number" class="form-control" value="{{$customer->nomor_surat_perintah}}" id="nomor_surat_perintah" required name="nomor_surat_perintah" >
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="{{$customer->alamat}}" id="alamat" class="w-full py-2 rounded">
                    </div>
                    
                    <b>II. Kegiatan Pengawasan</b> <br>
                    <small>1. Kegiatan I</small><br>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control bg-white" value="{{$customer->bentuk1}}" id="bentuk1"  name="bentuk1">
                        <label for="floatingInput">a. Bentuk :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="tujuan1" value="{{$customer->tujuan1}}" required name="tujuan1" >
                        <label for="floatingInput">b. Tujuan :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="sasaran1" value="{{$customer->sasaran1}}" required name="sasaran1" >
                        <label for="floatingInput">c. Sasaran :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="waktudantempat1" value="{{$customer->waktudantempat1}}" required name="waktudantempat1" >
                        <label for="floatingInput">d. Waktu dan Tempat :</label>
                    </div>

                    <small>2. Kegiatan II</small><br>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control bg-white" id="bentuk2" value="{{$customer->bentuk2}}" required name="bentuk2">
                        <label for="floatingInput">a. Bentuk :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="tujuan2" value="{{$customer->tujuan2}}" required name="tujuan2" >
                        <label for="floatingInput">b. Tujuan :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="sasaran2" value="{{$customer->sasaran2}}" required name="sasaran2" >
                        <label for="floatingInput">c. Sasaran :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="waktudantempat2" value="{{$customer->waktudantempat2}}" required name="waktudantempat2" >
                        <label for="floatingInput">d. Waktu dan Tempat :</label>
                    </div>
               
                <b>Uraian Singkat Hasil Pengawasan</b> <br>
                    <div class="form-group mb-4">
                        <input class="form-control" placeholder="uraian_singkat" name="uraian_singkat" value="{{$customer->uraian_singkat}}" id="uraian_singkat" style="height: 100px">
                        <label for="floatingInput">Isi Uraian</label>
                    </div>

                <b>III. Informasi Dugaan Pelanggaran : </b> <br>
                <small>1. Peristiwa</small><br>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control bg-white" id="peristiwa" value="{{$customer->peristiwa}}" required name="peristiwa">
                        <label for="floatingInput">a. Peristiwa :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="tempat_kejadian" value="{{$customer->tempat_kejadian}}" required name="tempat_kejadian" >
                        <label for="floatingInput">b. Tempat Kejadian :</label>
                    </div>
  
                    <div class="form-floating mb-4">
                        <input type="number" class="form-control" id="waktu_kejadian" value="{{$customer->waktu_kejadian}}" required name="waktu_kejadian" >
                        <label for="floatingInput">c. Waktu Kejadian : </label>
                    </div>
                    <div class="form-floating mb-4">
                        <input class="form-control" placeholder="pelaku" name="pelaku" id="pelaku" value="{{$customer->pelaku}}" style="height: 100px" >
                        <label for="floatingTextarea2">d. Pelaku :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input class="form-control" placeholder="alamat_peristiwa" name="alamat_peristiwa" value="{{$customer->alamat_peristiwa}}" id="alamat_peristiwa" style="height: 100px">
                        <label for="floatingTextarea2">e. Alamat :</label>
                    </div>

                    <small>2. Saksi-saksi</small><br>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control bg-white" id="nama_saksi1" value="{{$customer->nama_saksi1}}" required name="nama_saksi1">
                        <label for="floatingInput">a. Nama :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="alamat_Saksi1" value="{{$customer->alamat_Saksi1}}" required name="alamat_Saksi1" >
                        <label for="floatingInput"> Alamat :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="nama_saksi2" value="{{$customer->nama_saksi2}}" required name="nama_saksi2" >
                        <label for="floatingInput">b. Nama :</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="alamat_saksi2" value="{{$customer->alamat_saksi2}}" required name="alamat_saksi2" >
                        <label for="floatingInput">Alamat :</label>
                    </div>

                    <small>3. Alat Bukti</small><br>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control bg-white" id="alat_bukti_a" value="{{$customer->alat_bukti_a}}" required name="alat_bukti_a">
                        <label for="floatingInput">a.</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="alat_bukti_b" value="{{$customer->alat_bukti_b}}" required name="alat_bukti_b" >
                        <label for="floatingInput">b.</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="alat_bukti_c" value="{{$customer->alat_bukti_c}}" required name="alat_bukti_c" >
                        <label for="floatingInput">c.</label>
                    </div>


                    <small>4. Barang Bukti</small><br>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control bg-white" id="barang_bukti_a" value="{{$customer->barang_bukti_a}}" required name="barang_bukti_a">
                        <label for="floatingInput">a.</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="barang_bukti_b" value="{{$customer->barang_bukti_b}}" required name="barang_bukti_b" >
                        <label for="floatingInput">b.</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="barang_bukti_c" value="{{$customer->barang_bukti_c}}" required name="barang_bukti_c">
                        <label for="floatingInput">c.</label>
                    </div>
             

                <b>Uraian Singkat Dugaan Pelanggaran</b> <br>
                    <div class="form-group mb-4">
                        <input class="form-control" placeholder="uraian_singkat_dugaan" name="uraian_singkat_dugaan" value="{{$customer->uraian_singkat_dugaan}}" id="uraian_singkat_dugaan" style="height: 100px" >
                        <label for="floatingInput">Isi Uraian</label>
                    </div> 

                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="px-4 py-2 text-white bg-indigo-600 rounded">{!!csrf_field()!!}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</x-app-layout>
