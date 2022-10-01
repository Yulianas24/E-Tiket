@include('layouts/main')
{{-- content --}}
<div class="grid content-start w-[83%] h-full mx-auto bg-white p-4 rounded-md">

  {{-- kelas bus --}}
  <div class="grid gap-20  overflow-hidden">
    {{-- kelas ekonomi --}}
    <div class="grid grid-cols-2 gap-2 w-full h-auto" id="ekonomi">
      <h2 class="col-span-2 text-xl font-semibold text-gray-700 text-center">EKONOMI</h2>
      {{-- tampilan interior --}}
      <div class="card-image">
        <img class="image" src="assets/bus_image/ekonomi.png" alt="">
      </div>
      {{-- tampilan luar --}}
      <div class="card-image">
        <img class="image" src="assets/bus_image/Bus-ekonomi.webp" alt="">
      </div>
      {{-- deskripsi --}}
      <div class="col-span-2 justify-self-center">
        <p class="text-justify">bus ekonomi adalah yang paling murah dan memiliki peminat banyak. Anda mungkin tak akan menerima fasilitas seperti AC, tetapi sejumlah penyedia bus sudah melengkapi armadanya dengan reclining atau footrest. Semenetara formasi kursi penumpang dalam kabinnya adalah 3-2.</p>
      </div>
    </div>
    {{-- end of kelas ekonomi --}}

    {{-- kelas bisnis --}}
    <div class="grid grid-cols-2 gap-2 w-full h-auto" id="bisnis">
      <h2 class="col-span-2 text-xl font-semibold text-gray-700 text-center">BISNIS</h2>
      {{-- tampilan interior --}}
      <div class="card-image">
        <img class="image" src="assets\bus_image\bisnis.jpg" alt="">
      </div>
      {{-- tampilan luar --}}
      <div class="card-image">
        <img class="image" src="assets\bus_image\Bus-bisnis.webp" alt="">
      </div>
      {{-- deskripsi --}}
      <div class="col-span-2 justify-self-center">
        <p class="text-justify">Kemudian, ada bus bisnis untuk Anda yang membutuhkan fasilitas lebih lengkap. Reclining seat dan AC sangat mempengaruhi kenyamanan penumpang yang hendak bepergian jarak jauh. Masing-masing perusahaan penyedia pun memiliki ketentuan terkait pengaturan RS. Ada yang memakai formasi seat 2-2, ada juga yang 3-2.</p>
      </div>
    </div>
    {{-- end of kelas bisnis --}}

    {{-- kelas eksekutif --}}
    <div class="grid grid-cols-2 gap-2 w-full h-auto mb-10" >
      <h2 class="col-span-2 text-xl font-semibold text-gray-700 text-center" id="eksekutif">EKSEKUTIF</h2>
      {{-- tampilan interior --}}
      <div class="card-image">
        <img class="image" src="assets\bus_image\eksekutif.jpg" alt="">
      </div>
      {{-- tampilan luar --}}
      <div class="card-image">
        <img class="image" src="assets\bus_image\Bus-kelas-super-eksekutif.webp" alt="">
      </div>
      {{-- deskripsi --}}
      <div class="col-span-2 justify-self-center">
        <p class="text-justify">Bus kelas eksekutif (executive class) memiliki fasilitas akan membuat Anda terkesan. Sebut saja legrest sebagai sandaran kaki supaya Anda tak pegal-pegal. Ada pula yang menyediakan Wi-Fi untuk Anda yang ingin berselancar di dunia maya.</p>
      </div>
    </div>
    {{-- end of kelas eksekutif --}}
  </div>
  {{--end of kelas bus --}}

  {{-- menu kelas --}}
  <div class="grid">
    <hr class=" h-[2px] bg-gray-400">
    <div class=" flex justify-center w-full gap-5 h-8 mt-3 text-center text-xs text-black ">
      <a class="btn-menu w-[116px] h-8 bg-gray-700" href="#ekonomi">EKONOMI</a>
      <a class="btn-menu w-[116px] h-8 bg-gray-700" href="#bisnis">BISNIS</a>
      <a class="btn-menu w-[116px] h-8 bg-gray-700" href="#eksekutif">EKSEKUTIF</a>
    </div>
    {{-- tombol kembali --}}
    <a class=" justify-self-center  font-semibold text-blue-800 italic" href="/"><< Kembali</a>
  </div>
  {{-- end of menu kelas --}}
  
{{-- end of content --}}