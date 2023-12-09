@extends('layouting.layout admin.master')

@section('title', 'daftarulasan')

@section('content')
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    <div class="position-relative mb-3">
				    <div class="row g-3 justify-content-between">
					    <div class="col-auto">
					        <h1 class="app-page-title mb-0">Ulasan</h1>
					    </div>
				    </div>
			    </div>
			    

				@foreach ($ulasan as $u)
                <div class="app-card app-card-notification shadow-sm mb-4">
				    <div class="app-card-header px-4 py-3">
				        <div class="row g-3 align-items-center"> 
					        <div class="col-12 col-lg-auto text-center text-lg-start">
						        
						        <h4 class="notification-title mb-1">{{$u->Nama_Barang}}</h4>
						        
						        <ul class="notification-meta list-inline mb-0">
							        <li class="list-inline-item">{{$u->formatted_created_at}}</li>
							        <li class="list-inline-item">|</li>
							        <li class="list-inline-item">{{$u->username}}</li>
						        </ul>
						   
					        </div><!--//col-->
				        </div><!--//row-->
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4">
					    <div class="notification-content">{{$u->Ulasan}}</div>
				    </div><!--//app-card-body-->
				</div><!--//app-card-->
				@endforeach
				<div class="text-center mt-4">{{$ulasan->links()}}</div>
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
@endsection
	    
	    
	    
   					

 
    

