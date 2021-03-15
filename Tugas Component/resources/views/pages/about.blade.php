@extends('layouts.app')
@section('title', 'About')
@section('content')
<section id="contact" style="margin-top: 50px;">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card text-white bg-primary mb-3 text-center">
          <div class="card-body">
            <p class="card-text">About</p>
          </div>
        </div>
        <ul class="list-group">
          <li class="list-group-item">Namaku, Rispianti</li>
          <li class="list-group-item">Npm saya, 5520119003</li>
          <li class="list-group-item">Saya Kelas, IF A 2019</li>
          <li class="list-group-item">fakultas saya, Teknik Informatika</li>
          <li class="list-group-item">Universitas Suryakancana</li>
        </ul>
      </div>
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal" style="margin-bottom: 30px;">Klik disini</button>
    <x-modal id="modal">
    @slot('header')
        Contact->
    @endslot
    Next Page ?
    @slot('footer1')
        Gas
    @endslot
    @slot('footer2')
        Cancel
    @endslot
    </x-modal>
@stop
