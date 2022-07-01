@extends('layouts.app')

@section('title','Form Penawaran GINUMERIK')

@section('content')

    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-7 offset-xl-3">
                    <div class="login-brand text-dark">
                        <div class="row mb-5">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="https://ginumerik.com/wp-content/uploads/2021/02/LOGO-GIN-2020.png" alt="" width="35%">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="https://ginumerik.com/wp-content/uploads/2021/02/icon_right.png" alt="" width="55%">
                            </div>
                        </div>
                        <span style="font-weight: 500;">FORM PENAWARAN GINUMERIK</span>
                    </div>

                    <div class="card card-success">
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
                                        <input type="text" class="form-control" name="nama_perusahaan" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat Perusahaan</label>
                                        <input type="text" class="form-control" name="alamat_perusahaan" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label>PIC (Person in Change)</label>
                                        <input type="text" class="form-control" name="pic" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" name="email" autocomplete="off">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>No Telephone</label>
                                        <input type="number" class="form-control" name="no_telephone" autocomplete="off">
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
                                                <button class="btn btn-success add-more" type="button">
                                                    <i class="fa fa-plus"></i> Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            
                                </div>

                                @php
                                    $number1 = rand(1,10);
                                    $number2 = rand(1,20);
                                @endphp 

                                <div class="form-group">
                                    <label for="">Please Answer this question</label> <br>
                                    <span id="number1">{{$number1}}</span> + <span id="number2">{{$number2}}</span> = 
                                    <input type="number" id="result" required>
                                    <button type="button" id="btnResult" class="btn btn-sm btn-success">Check</button>
                                </div>
                                
                                <button type="submit" name="send" id="kirim" disabled class="btn btn-icon icon-left btn-success float-right mt-2"><i class="fa fa-paper-plane"></i> Kirim Penawaran</button>
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

            $('#btnResult').click(function() {
                let number1 = "{{$number1}}"
                let number2 = "{{$number2}}"
                
                let result = $('#result').val()

                if ((parseInt(number1) + parseInt(number2)) == parseInt(result)) {
                    $('#kirim').attr('disabled', false)
                    alert('Jawaban benar');
                    $('#kirim').click()
                } else {
                    alert('Jawaban salah, periksa kembali jawaban')
                }

            });

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