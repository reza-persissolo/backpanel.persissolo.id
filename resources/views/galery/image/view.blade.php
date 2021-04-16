@extends('base', ["title" => $title, "fitur" => $fitur])

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
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt">
                            <a href="{{ url('galery/image/form') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Tambah</span> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="nk-block">
    <div class="card card-preview">
        <div class="card-inner">
            <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                <thead>
                    <tr class="nk-tb-item nk-tb-head">
                        <th class="nk-tb-col"><span class="sub-text">Nama</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Image</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Deskripsi</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-right">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col tb-col-mb">                            
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">                                
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>Lihat</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-pen2"></em><span>Ubah</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Hapus</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div> <!-- nk-block -->
@stop