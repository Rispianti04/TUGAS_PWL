@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<section id="contact" style="margin-top: 50px;">
    <div class="text-center"><h1>Contact Us</h1></div>
    <div class="col-lg-6">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">No HP</label>
        <input type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label for="hp" class="form-label">Email</label>
        <input type="text" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal">Kirim </button>
    </div>
<x-modal id="modal">
    @slot('header')
        Confirm Box
    @endslot
    Apakah Anda Yakin?
    @slot('footer1')
        Yakin
    @endslot
    @slot('footer2')
        Tidak
    @endslot
</x-modal>
@stop
