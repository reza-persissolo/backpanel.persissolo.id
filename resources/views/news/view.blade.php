@extends('base', ["title" => $title, "fitur" => $fitur])

@section('js')
    <script src="{{ asset('assets/js/tables/datatables/datatables.min.js') }}"></script>
<script>
    var table;

    $(document).ready(function() {
            if (!$().fancybox) {
                console.warn('Warning - fancybox.min.js is not loaded.');
                return;
            }

            $('[data-popup="lightbox"]').fancybox({
                padding: 3
            });

            $.extend( $.fn.dataTable.defaults, {
                autoWidth: false,
                columnDefs: [{
                    orderable: false,
                    width: 100,
                    targets: [ 0 ]
                }],
                
                lengthMenu: [ 25,50, 75, 100 ],
                displayLength: 25
            });

            table = $('.datatable-basic').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ url('news/show') }}",
                    "type": "GET",
                    beforeSend: function(){
                        goBlock(false);
                    },
                    complete: function () {
                        $.unblockUI();
                    }
                },
                
                "columns": [
                    {'data': 'author'},
                    {'data': 'judul'},
                    {
                        "data": "id",
                        render: function ( data, type, full, meta ) {

                            return '<div class="drodown">\n' +
                                '   <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-view-list-fill"></em></a>\n' +
                                '   <div class="dropdown-menu dropdown-menu-right">\n' +
                                '   <ul class="link-list-opt no-bdr">\n' +
                                '       <li><a href="{{ url('news/form') }}/'+ data +'"><em class="icon ni ni-pen2"></em><span>Ubah</span></a></li>\n' +
                                '       <li><a onclick="hapus('+data+')"><em class="icon ni ni-trash"></em><span>Hapus</span></a></li>\n' +
                                // '       <button onclick="hapus('+data+')" class="dropdown-item"><em class="icon ni ni-pen2"></em><span>Hapus</span></button>\n' +
                                '   </ul>\n' +
                                '   </div>\n' +
                                '</div>';
                        }
                    },
                ]
            });
        });

        function reload_table(){
            table.ajax.reload(null, false);
        }

        function hapus(id){

            swal({
                title: 'Apakah anda yakin?',
                text: "Untuk menghapus data ini!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Tidak, Batalkan!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                allowOutsideClick: false,
                showLoaderOnConfirm: true,
            }, function (result) {

            }).then(function (result) {

                if(result.value){
                    $.ajax({
                        url : "{{ url('news/delete/') }}"+"/"+id,
                        type: "GET",
                        cache:false,
                        beforeSend:function(request) {
                            goBlock(true);
                        },
                        dataType: "json",
                        success: function(respon){
                            $.unblockUI();

                            reload_table();

                            swal(
                                'Berhasil !',
                                respon.msg,
                                'success'
                            );

                        },error: function (jqXHR, textStatus, errorThrown){
                            $.unblockUI();
                            swal(
                                'Perhatian !!',
                                errorThrown,
                                'error'
                            );
                        }
                    });
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
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt">
                            <a href="{{ url('news/form') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Tambah</span> </a>
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
            {{-- <table class="datatable-init nowrap table"> --}}
            <table class="table datatable-basic">
                <thead>
                <tr style="background-color: #eaeaea;">
                    <th>Author</th>
                    <th>Judul</th>
                    <th style="width:60px">Action</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
@stop