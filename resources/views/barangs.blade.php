@extends('layouts.app')

@push('style')
    @livewireStyles()
@endpush

@push('script')
    @livewireScripts()
@endpush

@section('content')
    <div class="container">
        <h1>Daftar barang</h1>
        <hr>
        @livewire('barang-table')
    </div>
@endsection

