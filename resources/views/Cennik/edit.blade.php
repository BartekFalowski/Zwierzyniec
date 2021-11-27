@extends('layouts.lista')

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


        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj Usługi<u>{{$cennik->cena}}-->{{$cennik->usluga}}</u></h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <form action="{{route('cennik.update', ['id' => $cennik->id])}}" method="POST">

                {{csrf_field()}}
                @method('PUT')

                <div class="form-floating">
                    <input class="form-control" id="cena" value="{{$cennik->cena}}" name="cena" type="text" placeholder="Cena" />
                    <label for="skad">Cena</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="usluga" value="{{$cennik->usluga}}" name="usluga" type="text" placeholder="Usługa" />
                    <label for="dokad">Usługa</label>
                </div>
                <br />
                <button class="btn btn-primary btn-xl" type="submit">Edytuj  Usługi</button>
            </form>
        </div>
    </div>


@endsection

