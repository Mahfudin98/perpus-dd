<div class="container">
    <div class="content-section-heading text-center">
      <h3 class="text-secondary mb-0">List</h3>
      <h2 class="mb-5">Daftar Buku & Jurnal yang ada di perpustakaan</h2>
    </div>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-buku" role="tab" aria-controls="nav-home" aria-selected="true">Buku</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-jurnal" role="tab" aria-controls="nav-profile" aria-selected="false">Jurnal</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-kp" role="tab" aria-controls="nav-contact" aria-selected="false">Kerja Praktek</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-ta" role="tab" aria-controls="nav-contact" aria-selected="false">Tugas Akhir</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <!-- List data Buku -->
        <div class="tab-pane show active" id="nav-buku" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">List Buku</h3>

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ISBN</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($buku as $row)
                                <tr>
                                    <td>{{$row->isbn}}</td>
                                    <td>{{$row->judul}}</td>
                                    <td>{{$row->pengarang}}</td>
                                    <td>{{$row->penerbit}}</td>
                                    <td>{{$row->tahun}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <hr>
                      <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li class="page-item">
                            {{ $buku->links() }}
                          </li>
                        </ul>
                      </nav>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
        </div>
        <!-- List data jurnal -->
        <div class="tab-pane" id="nav-jurnal" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="row">
              <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">List Jurnal</h3>

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Judul Jurnal</th>
                            <th>Judul Artikel</th>
                            <th>Pembuat Jurnal</th>
                            <th>Volume Jurnal</th>
                            <th>Link Jurnal</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurnal as $row)
                                <tr>
                                    <td>{{$row->judulJurnal}}</td>
                                    <td>{{$row->judulArtikel}}</td>
                                    <td>{{$row->pembuatJurnal}}</td>
                                    <td>{{$row->VolumeJurnal}}</td>
                                    <td><a href="{{$row->linkJurnal}}">{{$row->linkJurnal}}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <hr>
                      <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li class="page-item">
                            {{ $jurnal->links() }}
                          </li>
                        </ul>
                      </nav>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- List data Kerja Praktek -->
        <div class="tab-pane" id="nav-kp" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">List Jurnal</h3>

                        <div class="card-tools">
                          <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Judul Kerja Praktek</th>
                              <th>Penyusun Kerja Praktek</th>
                              <th>Tahun</th>
                              <th>View</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($kp as $row)
                                  <tr>
                                      <td>{{$row->judulKP}}</td>
                                      <td>{{$row->namaKP}}</td>
                                      <td>{{$row->tahunKP}}</td>
                                      <td><a class="btn btn-primary" href="/viewpdf/{{$row->idKP}}" role="button">View</a></td>
                                  </tr>
                              @endforeach
                          </tbody>
                        </table>
                        <hr>
                          <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                              <li class="page-item">
                                {{ $kp->links() }}
                              </li>
                            </ul>
                          </nav>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
            </div>
        </div>
        <!-- List data Tugas Akhir -->
        <div class="tab-pane" id="nav-ta" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">List Jurnal</h3>

                        <div class="card-tools">
                          <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Judul Tugas Akhir</th>
                              <th>Penyusun Tugas Akhir</th>
                              <th>Tahun</th>
                              <th>Link</th>
                              <th>View</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($ta as $row)
                                  <tr>
                                      <td>{{$row->judulTA}}</td>
                                      <td>{{$row->namaTA}}</td>
                                      <td>{{$row->tahunTA}}</td>
                                      <td>{{$row->linkTA}}</td>
                                      <td><button>Lihat</button></td>
                                  </tr>
                              @endforeach
                          </tbody>
                        </table>
                        <hr>
                          <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                              <li class="page-item">
                                {{ $ta->links() }}
                              </li>
                            </ul>
                          </nav>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
            </div>
        </div>
      </div>
    </nav>
</div>
