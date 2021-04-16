@extends('base', ["title" => $title, "fitur" => \App\Helper\Constant::MENU_GALERY_IMAGE])

@section('js')
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
                            <label class="form-label" for="nama">Nama</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="nama" placeholder="Nama">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row gy-4">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="deskripsi">Deskripsi</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label" for="imagetext">Image</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" multiple class="custom-file-input" id="image">
                                    <label class="custom-file-label" for="image">Pilih file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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