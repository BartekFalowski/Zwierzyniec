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


        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj Relacje</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <form action="{{route('relacje.store')}}" method="POST">

                {{csrf_field()}}
                <div class="form-floating">
                    <input class="form-control" id="skad" name="skad" type="text" placeholder="Skąd?" />
                    <label for="skad">Skąd</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="dokad" name="dokad" type="text" placeholder="Dokąd?" />
                    <label for="dokad">Dokąd</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="przystanki" name="przystanki" type="text" placeholder="Przez?" />
                    <label for="przystanki">Przez</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="pociag" name="pociag"  type="text" placeholder="Numer pociągu?" />
                    <label for="pociag">Numer pociągu</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="data" name="data" type="date" placeholder="Kiedy?" />
                    <label for="data">Data</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="timeod" name="timeod" type="time" placeholder="Podaj godzię..." />
                    <label for="timeod">Godzina odjazdu</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="timedo" name="timedo" type="time" placeholder="Podaj godzinę..." />
                    <label for="timedo">Godzina przyjazdu</label>
                </div>

                <div class="form-inline">
                <label class="my-4 mr-2" for="" name="timedo" type="time"><b><u>Liczba miejsc</u></b></label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Wybierz</option>
                        <option value="1">150</option>
                        <option value="2">250</option>
                        <option value="3">300</option>
                    </select>
                </div>
            
                
                
                <br />
                <button class="btn btn-primary btn-xl" type="submit">Dodaj Relacje</button>
            </form>
        </div>
    </div>


    <div class="masthead">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista Relacji</h2>
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
            <th class="table-success" scope="col">#</th>
            <th class="table-success" scope="col">Skąd</th>
            <th class="table-success" scope="col">Dokąd</th>
            <th class="table-success" scope="col">Przystanki</th>
            <th class="table-success" scope="col">Data</th>
            <th class="table-success" scope="col">Godzina odjazdu</th>
            <th class="table-success" scope="col">Godzina przyjazdu</th>
            <th class="table-success" scope="col">Pociag</th>
            <th class="table-success" scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($relacjes as $relacje)
            <tr>
                <th class="bg-secondary text-white" scope="row">{{$relacje->id}}</th>
                <td>{{$relacje->skad}}</td>
                <td>{{$relacje->dokad}}</td>
                <td>{{$relacje->przystanki}}</td>
                <td>{{$relacje->data}}</td>
                <td>{{$relacje->timeod}}</td>
                <td>{{$relacje->timedo}}</td>
                <td>{{$relacje->pociag}}</td>
                <td class="bg-secondary">
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('relacje.delete', ['id'=>$relacje->id]) }}" role="button" class="btn btn-danger">X</a>
                    <a href="{{ route('relacje.edit', ['id'=>$relacje->id]) }}" class="btn btn-success">Edit</a>
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

