@extends('layouts.masterpage')


@section('content')
    <div class="row mt-2">
        <div class="col-md-2">

            <x-category :categories="$categories" />

        </div>
        <div class="col-md-6">

            <div class="d-flex flex-wrap overflow-auto product-list" style="height: 550px;">
                <x-product :products="$products" />
            </div>
        </div>


    </div>
@endsection
