@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">โปรแกรมข้อ2-4</div>

                <div class="card-body">
                    <div>
                        <a class="btn btn-secondary btn-lg" href="{{route('change.index')}}"> โปรแกรม ข้อที่2 </a>
                        <a class="btn btn-warning btn-lg" href="{{url('/number')}}">โปรแกรม ข้อที่3 </a>
                        <a class="btn btn-success btn-lg" href="{{url('/calculate')}}">โปรแกรม ข้อที่4 </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection