  <div class="container">
    <div class="content-section-heading">
      <h3 class="text-secondary mb-0">Count</h3>
      <h2 class="mb-5">Apa yang kami punya?</h2>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-book-open"></i>
        </span>
        <h4>
          <strong class="timer count-title count-number" data-to="{{$buku->count()}}" data-speed="1500">{{$buku->count()}}</strong>
        </h4>
        <p class="text-faded mb-0">Jumlah Buku</p>
      </div>
      <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-doc"></i>
        </span>
        <h4>
            <strong class="timer count-title count-number" data-to="{{$jurnal->count()}}" data-speed="1500">{{$jurnal->count()}}</strong>
        </h4>
        <p class="text-faded mb-0">Jumlah Jurnal</p>
      </div>
      <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-notebook"></i>
        </span>
        <h4>
            <strong class="timer count-title count-number" data-to="{{$kp->count()}}" data-speed="1500">{{$kp->count()}}</strong>
        </h4>
        <p class="text-faded mb-0">Tugas Kerja Praktek</p>
      </div>
      <div class="col-lg-3 col-md-6">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-graduation"></i>
        </span>
        <h4>
            <strong class="timer count-title count-number" data-to="{{$ta->count()}}" data-speed="1500">{{$ta->count()}}</strong>
        </h4>
        <p class="text-faded mb-0">Jumlah Tugas Akhir</p>
      </div>
    </div>
    <hr>
    <div class="content-section-heading">
        <h3 class="text-secondary mb-0">Jumlah anggota sebanyak : <strong class="timer count-title count-number" data-to="{{$anggota->count()}}" data-speed="1500">{{$anggota->count()}}</strong> Anggota</h3>
    </div>
  </div>
