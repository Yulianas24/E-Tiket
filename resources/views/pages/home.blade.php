@include('layouts/main')

@if (session()->has('success'))
<div class="fixed top-20 w-full">
  <div id="id01" class="alert flex justify-between " role="alert">
    <p class="font-semibold">{{ session('success') }}</p>
    <button type="button" class="" data-bs-dismiss="alert" aria-label="Close"> <span onclick="document.getElementById('id01').style.display='none'"> &times;</button>
</div>
</div>

@endif

{{-- content --}}

<div class="grid w-[500px] h-[400px] mx-auto bg-white rounded-md p-10">
  <h1 class="text-center font-bold text-2xl">PEMESANAN TIKET BUS AKAP</h1>
  {{-- tombol menu --}}
  <div class="grid grid-cols-2 w-full h-auto gap-3">
    <a class="btn-menu w-full col-span-2 h-10 bg-blue-500" href="/kelas-bus">KELAS BUS</a>
    <a class="btn-menu w-full col-span-2 h-10 bg-blue-500" href="/daftar-harga">DAFTAR HARGA</a>
    <hr class="col-span-2">
    <a class="btn-menu w-full col-span-2 h-10 bg-green-500" href="/pesan">PESAN</a>
  </div>
</div>
{{-- end of content --}}