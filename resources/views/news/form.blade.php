@extends('base', ["title" => $title, "fitur" => \App\Helper\Constant::MENU_SPONSOR])

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/editors/summernote.css?ver=2.2.0') }}">
@endsection

@section('js')

<script src="{{ asset('assets/js/libs/editors/summernote.js?ver=2.2.0') }}"></script>
<script src="{{ asset('assets/js/editors.js?ver=2.2.0') }}"></script>

<script>
    $(document).ready(function() {

        $('[data-popup="lightbox"]').fancybox({
            padding: 3
        });

    });

    function save() {
        if ($('#judul').val() == ''){
            notifWarning('Isian Judul tidak boleh kosong !');
            $('#judul').focus();

            return;
        }

        $.ajax({
            url : "{{ $form['url'] }}",
            type: "POST",
            data: $('#form').serialize(),
            cache:false,
            dataType: "json",
            beforeSend:function(request) {
                goBlock(true);
            },
            success: function(respon){
                $.unblockUI();

                if(!respon.status){
                    notifWarning(respon.msg);

                    return;
                }

                notifSuccess(respon.msg);

                window.location.href = '{{ url('news') }}';

            },error: function (jqXHR, textStatus, errorThrown){
                notifWarning(errorThrown);

                $.unblockUI();
            }
        });
    }
</script>

@stop

@section('content')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">{{ $title }}</h3>
        </div>
    </div>
</div>
    
<div class="nk-block">
    <div class="card card-preview">
        <div class="card-inner">
            <form method="post" id="form">
                @csrf
                <div class="preview-block">
                    <div class="row gy-4">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="judul">Judul</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="judul" placeholder="Judul"
                                    name="judul" value="{{ $form['judul'] }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="author">Author</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="author" placeholder="Author"
                                    name="author" value="{{ $form['author'] }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="deskripsi">Deskripsi</label>
                                
                                <div class="form-control-wrap">
                                    <textarea class="summernote-basic" name="deskripsi">{{ $form['deskripsi'] }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </form>
            <br>
            <div class="preview-block">
                <div class="text-right">
                    <button type="button" id="btn" onclick="save()" data-loading-text="<i class='icon ni ni-loader'></i> Loading" class="btn btn-primary">
                        <em class="icon ni ni-save"></em><span>Simpan</span>
                    </button>
                </div>
            </div>
        </div>        
    </div>
</div>


@stop