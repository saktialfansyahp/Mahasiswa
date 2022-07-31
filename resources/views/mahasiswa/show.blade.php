@extends('mahasiswa.view')
@section('title', 'Mahasiswa')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Show student</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 8px">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $mahasiswa->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NRP:</strong>
                {{ $mahasiswa->nrp }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas:</strong>
                {{ $mahasiswa->kelas }}
            </div>
        </div>
    </div>
@endsection
