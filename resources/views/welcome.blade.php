<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="_token" content="{{ csrf_token() }}">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Stylish Portfolio - Start Bootstrap Template</title>

  <!-- Bootstrap Core CSS -->
  {{--  ajax search  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  {{--  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>  --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


  <link href="{{asset('template/css/count.css')}}s" rel="stylesheet" type="text/css">
  <!-- Custom Fonts -->
  <link href="{{asset('template/vendor/fontawesome-free/css/all.min.cs')}}s" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="{{asset('template/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{asset('template/css/stylish-portfolio.min.css')}}" rel="stylesheet">
  <style>
    .stroke {
        -webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color: white;
      }

  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Repository UNMA</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">About</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#count">Count</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#list">List</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contact</a>
      </li>
    </ul>
  </nav>

  <!-- Header -->
  @include('component.header')

  <!-- About -->
  @include('component.about')

  <!-- Count -->
  <section class="content-section bg-primary text-white text-center" id="count">
    <div id="count"></div>
    <script>
        $( "#count" ).load( "/count" );
    </script>
  </section>

  <!-- Callout -->
  <section class="callout">
    <div class="container text-center">
      <h2 class="mx-auto mb-5 stroke">Welcome to
        <em>Repository</em>
        UNMA</h2>
    </div>
  </section>

  <!-- List -->
  <section class="content-section" id="list">
    {{--  <div id="list"></div>
    <script>
        $( "#list" ).load( "/list" );
    </script>  --}}
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
                              <input type="text" name="search" id="search" class="form-control float-right" placeholder="Search">
                              <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>ISBN</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                              </tr>
                            </thead>
                            <tbody id="temu">
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

                          {{--  <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                              <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                              </div>
                            </div>
                          </div>  --}}
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
                                {{--  {{ $jurnal->links() }}  --}}
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

                            {{--  <div class="card-tools">
                              <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                              </div>
                            </div>  --}}
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
                                    {{--  {{ $kp->links() }}  --}}
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

                            {{--  <div class="card-tools">
                              <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                              </div>
                            </div>  --}}
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
                                    {{--  {{ $ta->links() }}  --}}
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

  </section>
  {{--  @include('component.list')  --}}

  <!-- Call to Action -->
  <section class="content-section bg-primary text-white">
    <div class="container text-center">
      <h2 class="mb-4">Berikut adalah alamat perpustakaan Universitas Majalengka</h2>
      {{--  <a href="#" class="btn btn-xl btn-light mr-4">Click Me!</a>
      <a href="#" class="btn btn-xl btn-dark">Look at Me!</a>  --}}
    </div>
  </section>

  <!-- Contact-->
  @include('component.contact')

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <i class="icon-social-github"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; Repository UNMA 2020</p>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
                $('#temu').html(data);
            }
        });
    })
  </script>
  <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
  </script>


  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('templatevendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('template/js/stylish-portfolio.min.js')}}"></script>
  <script src="{{asset('template/js/count.js')}}"></script>

</body>

</html>
