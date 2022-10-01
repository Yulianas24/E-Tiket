@include('layouts/main')
{{-- content --}}
<div class="grid content-between w-[635px] h-full mx-auto bg-white rounded-md p-10">
  {{-- tabel harga --}}
  <div>
    <h1 class="text-center font-bold text-2xl">DAFTAR HARGA</h1>
    <hr class="h-[2px] bg-slate-400 my-2">
    <table class="table-auto w-full mt-6">
      <thead>
        <tr class="border border-gray-500 bg-slate-200">
          <th class="table-cell" scope="col">Kelas</th>
          <th class="table-cell" scope="col">Harga</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($tiket as $item)
      <tr class="border border-gray-600 ">
        <td class="table-cell">{{ $item->kelas }}</td>
        <td class="table-cell">Rp. {{ number_format($item->harga, 2, ',', '.') }}</td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  {{-- end of tabel harga --}}
  <a class="btn-menu w-[120px] h-8 bg-[#12B05A] justify-self-center" href="/">KEMBALI</a>

</div>
{{-- end of content --}}