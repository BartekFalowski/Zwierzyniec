@extends('home')

@section('content')

<div class="masthead">

        @if(session()->has('message'))
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Gratulacje!</strong> {{session()->get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

    <div class="masthead">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Twoje Bilety</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>

    <div class="container">
    <table class=" table">
        <form class="form-inline">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </form>
        <thead class="thead-dark">
        <tr>
            <th class="table-success" scope="col">Nr. Biletu</th>
            <th class="table-success" scope="col">Skąd</th>
            <th class="table-success" scope="col">Dokąd</th>
            <th class="table-success" scope="col">Data</th>
            <th class="table-success" scope="col">INFO</th>


        </tr>
        </thead>
        <tbody>
        @foreach ($relacjes as $relacje)
            <tr>
                <th class="bg-secondary text-white" scope="row">ID BILETU</th>
                <td>{{$relacje->skad}}</td>
                <td>{{$relacje->dokad}}</td>
                <td>{{$relacje->data}}</td>
                <td class="bg-secondary d-flex justify-content-center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="" role="button" class="btn btn-danger">Drukuj</a>
                    <a href="" class="btn btn-info">Inf</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    </div>

    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; PKP S.A 2021</small></div>
    </div>

@endsection
