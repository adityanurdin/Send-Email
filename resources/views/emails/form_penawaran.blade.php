@extends('layouts.app')

@section('title','Form Penawaran GINUMERIK')

@section('content')

    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-7 offset-xl-3">
                    <div class="login-brand">
                        FORM PENAWARAN GINUMERIK
                    </div>

                    <div class="card card-primary">
                        <div class="card-body">

                            @if(count($errors) > 0)
                                <div class="alert alert-danger alert-dismissible show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">
                                        <span>×</span>
                                        </button>
                                        
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            @if($message = Session::get('success'))
                                <div class="alert alert-success alert-dismissible show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">
                                        <span>×</span>
                                        </button>
                                        
                                        <strong>{{ $message }}</strong>
                                    </div>
                                </div>
                            @endif

                            <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                               
                                <div class="control-group after-add-more">
                                    <div class="form-group">
                                        <label>Nama Perusahaan</label>
                                        <input type="text" class="form-control" name="nama_perusahaan">
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat Perusahaan</label>
                                        <input type="text" class="form-control" name="alamat_perusahaan">
                                    </div>

                                    <div class="form-group">
                                        <label>PIC (Person in Change)</label>
                                        <input type="text" class="form-control" name="pic">
                                    </div>

                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>No Telephone</label>
                                        <input type="text" class="form-control" name="no_telephone">
                                    </div>

                                    <div class="form-group">
                                        <label>Input List Alat</label>
                                        <div class="row mt-2">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="nama_alat[]" placeholder="Nama Alat" required>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="merk_alat[]" placeholder="Merk Alat" required>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="qty[]" placeholder="Quantity" required>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <button class="btn btn-success add-more btn-sm" type="button">
                                                    <i class="fa fa-plus"></i> Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            
                                </div>
                                
                                <button type="submit" name="send" class="btn btn-icon icon-left btn-outline-primary float-right mt-2"><i class="fa fa-paper-plane"></i> Kirim Email</button>
                            </form>

                            <!-- class invisible membuat form disembunyikan  -->
                            <div class="copy invisible">
                                <div class="control-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="nama_alat[]" placeholder="Nama Alat" required>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="merk_alat[]" placeholder="Merk Alat" required>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="number" class="form-control" name="qty[]" placeholder="Quantity" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <button class="btn btn-danger remove btn-sm" type="button"> Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')

     <!-- fungsi javascript untuk menampilkan form dinamis  -->
    <!-- penjelasan :
    saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
    <script type="text/javascript">
        $(document).ready(function() {
        $(".add-more").click(function(){ 
            var html = $(".copy").html();
            $(".after-add-more").after(html);
        });

        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click",".remove",function(){ 
            $(this).parents(".control-group").remove();
        });
        });
    </script>

@endpush