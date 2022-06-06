@extends('layout.main')

@section('content')

@include('layout.navbar')


<div style="background-color: rgb(26, 202, 20);">
  <div class="container py-5">
    <div class="row align-items-center py-5">
      <div class="col-lg-6"  style="font-size: 18px; color:black">
       <!---- Tambah kelas ---->
    <form class="border bg-secondary" method="POST">
      <div>
        <h3 class="mx-3">Form Pertanyaan</h3>
      </div>
      <div class="mx-3 my-3">
        <div class="mb-3">
          Penanya
          <input class="form-control py-3" name="pelapor" type="text" placeholder="masukkan nama anda" required=""/>
        </div>
        <div class="mb-3">
            NIK
            <input class="form-control py-3" name="NIK" type="text" placeholder="masukkan NIK anda" required=""/>
        </div>
        <div class="mb-3">
          Jenis Kelamin <br>
          <select class="form-select " aria-label="Default select example">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="mb-3">
          Alamat
          <input class="form-control py-3" name="alamat" type="text" placeholder="Masukkan alamat anda" required="" />
        </div>
        <div class="mb-3">
          No.Handphone
          <input class="form-control py-3" name="nomorhp" type="text" placeholder="Masukkan nomor telepon anda" required="" />
        </div>
        <div class="mb-3">
          Pertanyaan
          <input class="form-control py-3" name="pertanyaan" type="text" placeholder="Masukkan pertanyaan anda" required="" />
        </div>
        <div class="mb-3">
          Deskripsi
          <textarea class="px-3" name="deskripsi_pertanyaan" cols="50%" rows="4"></textarea>
        </div>
        <div class="mb-3">
          <input class="form-control py-3" name="pertanyaan" type="hidden" placeholder="Masukkan pertanyaan anda" required="" />
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">
          Batal</button>
        <button type="submit" name="btnbuatkelas" class="btn btn-primary" data-bs-dismiss="modal">
          Ajukan</button>
      </div>

    </form>

    <div class="text-black">
    - warga memiliki otoritas untuk mengirimkan
    pertanyaan terkait informasi (contoh: menanyakan dana BLT),
    permintaan (contoh: pengurusan surat seperti akte lahir, dll),
    komplain (contoh: jalan/jembatan rusak, lingkungan kotor, dll);
    mengetahui histori dan status pertanyaan (umur dari pertanyaan: hari/minggu/bulan)
    dan siapa yang menangani pertanyaan tersebut.
  </div>



  </div>
  </div>
</div>



@include('layout.footer')