@extends('base', ["title" => '$title', "fitur" => '$fitur'])

@section('js')
<script>
    $(document).ready(function(){
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});		
		
		var dataTableCust = $('#data-table-cust').DataTable( {			
			"ordering": false,
			searching: false,
			"processing": true,
        	"serverSide": true,
	        "ajax": {
	        	url: "{{ route('customer') }}",
	        	"data" : function(d){
	        		 var info = $('#data-table-cust').DataTable().page.info();        		 
	        		 d.page = ( info.page + 1 );
	        	}
	        },
	        "columns": [	            
	            { "data": "nama" },
	            { "data": "phone" },
	            { "data": "email" },
	            { "data": "alamat" },
	            { 
	            	"data": function(data){	            		
	            		return '<button type="button" class="btn btn-primary btn-xs btn-edit" data-id="'+data.id+'">Edit</button> <button type="button" class="btn btn-danger btn-xs btn-delete" data-id="'+data.id+'">Delete</button>';
	            	} 
	            }	            
	        ],
	        "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false
            }]
	    });
    });

    function ajaxRequest(url, type, data, successFunction){
		$.ajax({
    		url: url,
    		method: type,
    		data: data,
    		success: successFunction
    	});
	}

</script>
@stop

@section('content')

<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            {{-- <h3 class="nk-block-title page-title">{{ $title }}</h3> --}}
            <div class="nk-block-des text-soft">
                <p>You have total 2,595 customers.</p>
            </div>
        </div>
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                        <li class="nk-block-tools-opt">
                            <button type="button" name="tambah_data" id="tambah_data" class="btn btn-primary" data-toggle="modal" data-target="#modalform"><em class="icon ni ni-plus"></em><span>Tambah</span> </button>
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
            <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" id="data-table-cust" data-auto-responsive="false">
                <thead>
                    <tr class="nk-tb-item nk-tb-head">                        
                        <th class="nk-tb-col"><span class="sub-text">Customer</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Phone</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Alamat</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-right">
                        </th>
                    </tr>
                </thead>
                <tbody>                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="modalform">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Customer </h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="#" class="form-validate is-alter">
                    <div class="form-group">
                        <label class="form-label" for="full-name">Nama</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone">Phone</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="phone" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <div class="form-control-wrap">
                            <input type="email" class="form-control" id="email">
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label class="form-label" for="alamat">Alamat</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Save </button>
                    </div>
                </form>
            </div>                
        </div>
    </div>
</div>
@stop