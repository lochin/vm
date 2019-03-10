@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <ul class="list-group w-100">
            @foreach($applies as $key => $apply)
            <li class="list-group-item list-group-item-action my-2">
                <div class="row">
                <div class="md-v-line"></div>
                    <div class="col-sm-2">
                        <span class="text-nowrap">
                            <b>{{ $applies->total() - ($key+($applies->currentPage()-1)*$applies->perPage()) }}. </b>
                            <i class="{{ ($apply->status == 1) ? 'fab fa-readme text-success' : 'fas fa-book text-danger'}} mr-4 pr-3"></i>
                        </span>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <span>{{ $apply->firstname.' '.$apply->lastname }}</span>
                            </div>
                            <div class="col-sm-7">
                                <span>{{ $apply->region.' '.$apply->district }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        {{ $applies->links() }}
    </div>
</div>
@endsection
