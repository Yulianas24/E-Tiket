@include('layouts/main')
{{-- content --}}
<div class="grid content-between w-[635px] h-full mx-auto bg-white rounded-md p-10">
  {{-- detail riwayat --}}
  <div>
    <h1 class="text-center font-bold text-2xl">RIWAYAT PEMESANAN</h1>
    <hr class="h-[2px] bg-slate-400 mt-2 mb-7">

    <div class="grid grid-cols-2 gap-2 w-full h-full bg-slate-300 rounded-md shadow-lg py-5 px-9">
      <p class="font-semibold">Nama Pemesan</p>
      <p class="font-semibold">: {{ $detail->nama }}</p>
      
      <p class="font-semibold">Nomor Identitas</p>
      <p class="font-semibold">: {{ $detail->no_ktp }}</p>
      
      <p class="font-semibold">No. HP</p>
      <p class="font-semibold">: {{ $detail->no_hp }}</p>
      
      <p class="font-semibold">Kelas Penumpang </p>
      <p class="font-semibold">: {{ $detail->kelas }}</p>
      
      <p class="font-semibold">Jumlah Penumpang</p>
      <p class="font-semibold">: {{ $detail->jml_penumpang }}</p>
      
      <p class="font-semibold">Jumlah Penumpang Lansia</p>
      <p class="font-semibold">: {{ $detail->jml_lansia }}</p>
      
      <p class="font-semibold">Harga Tiket</p>
      <p class="font-semibold">: Rp. {{ number_format($detail->harga_tiket, 2, ',', '.') }}</p>
      
      
      <p class="font-semibold">Total Bayar</p>
      <p class="font-semibold">: Rp. {{ number_format($detail->total_bayar, 2, ',', '.') }}</p>
      
    </div>
    
  </div>

  <style>
    @media print {
  /* ... */
  .btn-menu {
    display: none;
  }

}
  </style>
  {{-- end of detail riwayat --}}
  <div class="flex mx-auto gap-10">
    <a class="btn-menu w-[120px] h-8 bg-[#12B05A] justify-self-center" onclick="window.print()">CETAK</a>
    <a class="btn-menu w-[120px] h-8 bg-[#12B05A] justify-self-center" href="/">KEMBALI</a>
  </div>

</div>
{{-- end of content --}}