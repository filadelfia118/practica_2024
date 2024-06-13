@extends('layouts.guest')

@section('content')
    <div class="container contacts">
        <h2>Lista de mesaje </h2>
        <div class="row" >
            @foreach($contacts as $contact)
                <div class="col-md-4" >
                    <div class="card" style="color: white;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $contact->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted text-white" >{{ $contact->email }}</h6>
                            <p class="card-text">{{ $contact->subject }}</p>
                            <p class="card-text">{{ $contact->message }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection