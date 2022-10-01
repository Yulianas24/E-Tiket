@include('layouts/main')


@if (session()->has('error'))
<div class="fixed top-20 w-full">
  <div id="id01" class="alert flex justify-between " role="alert">
    <p class="font-semibold">{{ session('success') }}</p>
    <button type="button" class="" data-bs-dismiss="alert" aria-label="Close"> <span onclick="document.getElementById('id01').style.display='none'"> &times;</button>
</div>
</div>

@endif


{{-- content --}}
  <div class="mx-auto w-[550px] h-auto bg-white px-7 py-6 rounded-md">
    <h1 class="text-2xl font-semibold mb-5 border-b">Form Pemesanan</h1>
    {{-- form pemesanan --}}
    <form action="/pesan" enctype="multipart/form-data" method="post" class="flex flex-wrap">
      @csrf
      {{-- input nama --}}
      <div class="form-box">
        <label for="nama" class="form-label">Nama Pemesan</label>
        <input type="text" class="form-input" name="nama" required>
      </div>
      {{-- input nomor identitas --}}
      <div class="form-box">
        <label for="" class="form-label">Nomor Identitas</label>
        <input type="number" class="form-input"  name="no_ktp" required>
      </div>
      {{-- input nomor hp --}}
      <div class="form-box">
        <label for="" class="form-label">Nomor HP</label>
        <input type="number" class="form-input" name="no_hp" required>
      </div>
      {{-- input kelas penumpang --}}
      <div class="form-box">
        <label for="" class="form-label">Kelas Penumpang</label>
        <select class="form-input" name="kelas" id="select_kelas" onchange="perubahan()" required >
          <option value="" selected hidden>pilih kelas</option>
          @foreach ($tiket as $item)
              <option value="{{ $item->kelas }}">{{ $item->kelas }}</option>
          @endforeach
        </select>
      </div>
      {{-- input jadwal --}}
      <div class="form-box">
        <label for="" class="form-label">Jadwal Keberangkatan</label>
        <input type="date" class="form-input" name="jadwal" min="<?php  echo date("Y-m-d") ?>"  required>
        
      </div>
      {{-- input jumlah penumpang --}}
      <div class="form-box">
        <label for="" class="form-label leading-3">Jumlah Penumpang <br> <span class="text-xs">bukan lansia (usia < 60)</span></label>
        <input type="number" class="form-input" name="jml_penumpang" id="inp_penumpang" onchange="perubahan()" required>
      </div>
      {{-- input jumlah penumpang lansia --}}
      <div class="form-box">
        <label for="" class="form-label leading-3">Jumlah Penumpang Lansia <br> <span class="text-xs">usia 60 tahun keatas</span></label>
        <input type="number" class="form-input" name="jml_lansia" id="inp_lansia" onchange="perubahan()"  required>
      </div>
      <!-- Tampilkan harga tiket -->
      <div class="form-box justify-start">
        <label class="form-label w-[195px]">Harga Tiket</label>
        <p id="text_harga">Rp. 000</p>
      </div>
      <!-- Tampilkan harga total -->
      <div class="form-box justify-start">
        <label class="form-label w-[195px]">Total Bayar</label>
        <p id="text_total">Rp. 000</p>
      </div>
      <!-- Input persetujuan -->
      <div class="flex w-full h-auto my-2 text-xs">
        <input class="w-6 mx-3" type="checkbox" name="persetujuan" id="" required>
        <p>saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</p>
      </div>
      <!-- Tombol operasi -->
      <div class=" flex justify-between w-[505px] h-8 mt-5 text-center text-xs text-black ">
        {{-- tombol hitung --}}
        <a id="hitung" class="hover:cursor-pointer btn-menu w-[116px] h-8 bg-blue-600" onclick="harga()">Hitung Total Bayar</a>
        {{-- tombol pesan --}}
        <button id="submit" type="submit" class="btn-menu w-[116px] h-8 bg-green-500 opacity-80" disabled>Pesan Tiket</button>
        {{-- tombol kembali --}}
        <a class="btn-menu w-[116px] h-8 bg-red-500" href="../index.php">Cancel</a>
      </div>
    </form>
  </div>
{{-- end of content --}}

<script>
  var tiket = @json($tiket);
  
  function harga() {
    var kelas = document.getElementById("select_kelas").value;
    var penumpang = document.getElementById("inp_penumpang").value;
    var lansia = document.getElementById("inp_lansia").value;
    var submit =  document.getElementById("submit");

    tiket.forEach(element => {
      if(element.kelas === kelas){

        // Hitung total biaya
        var total = (penumpang * element.harga) + (lansia * (element.harga*0.9));
        document.getElementById("text_harga").innerHTML = 'Rp. '+element.harga;
        document.getElementById("text_total").innerHTML = 'Rp. '+total;
        submit.classList.add("opacity-100");
        submit.disabled = false;
      }
    });
  }

  function perubahan(){
    var submit =  document.getElementById("submit");

    submit.classList.remove("opacity-100");
    submit.disabled = true;
  }
</script>