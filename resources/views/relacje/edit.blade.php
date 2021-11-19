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


        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj Relacje <u>{{$relacje->skad}}-->{{$relacje->dokad}}</u></h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <form action="{{route('relacje.update', ['id' => $relacje->id])}}" method="POST">

                {{csrf_field()}}
                @method('PUT')

                <div class="form-floating">
                    <input class="form-control" id="skad" value="{{$relacje->skad}}" name="skad" type="text" placeholder="Skąd?" />
                    <label for="skad">Skąd</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="dokad" value="{{$relacje->dokad}}" name="dokad" type="text" placeholder="Dokąd?" />
                    <label for="dokad">Dokąd</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="przystanki" value="{{$relacje->przystanki}}" name="przystanki" type="text" placeholder="Przez?" />
                    <label for="przystanki">Przez</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="pociag" value="{{$relacje->pociag}}" name="pociag"  type="text" placeholder="Numer pociągu?" />
                    <label for="pociag">Numer pociągu</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="data" value="{{$relacje->data}}" name="data" type="date" placeholder="Kiedy?" />
                    <label for="data">Data</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="timeod" value="{{$relacje->timeod}}" name="timeod" type="time" placeholder="Podaj godzię." />
                    <label for="timeod">Godzina odjazdu</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="timedo" value="{{$relacje->timedo}}" name="timedo" type="time" placeholder="Podaj godzinę." />
                    <label for="timedo">Godzina przyjazdu</label>
                </div>


                <br />
                <button class="btn btn-primary btn-xl" type="submit">Edytuj  Relacje</button>
            </form>
        </div>
    </div>


@endsection

