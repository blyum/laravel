@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('myStat') }}">моя стата</a> 
                    <a href="{{ route('allStat') }}">вся стата</a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
