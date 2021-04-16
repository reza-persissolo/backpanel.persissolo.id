@extends('base', ["title" => $title, "fitur" => \App\Helper\Constant::MENU_SPONSOR])

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/editors/summernote.css?ver=2.2.0') }}">
@endsection

@section('js')

<script src="{{ asset('assets/js/libs/editors/summernote.js?ver=2.2.0') }}"></script>

<script>
    var table;

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
            <div class="preview-block">
                <div class="row gy-4">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="judul">Judul</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="judul" placeholder="Judul">
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <div class="summernote-basic"></div>
            
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