@extends('layouting.home.master')

@section('title', 'Ulasan')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($ulasan as $u)
        <div class="col-md-8">
            <div class="media g-mb-30 media-comment">
                 <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                  <div class="g-mb-15">
                    <h5>{{$u->username}}</h5>
                    <span class="g-color-gray-dark-v4 g-font-size-12">{{$u->formatted_created_at}}</span>
                  </div>
            
                  <p>{{$u->Ulasan}}</p>
                </div>
            </div>
        </div>
        @endforeach
        {{$ulasan->links()}}
    

    </div>
    </div>

@endsection