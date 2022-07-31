@extends('mahasiswa.view')
@section('title', 'Mahasiswa')

@section('content')
    <div class="row" style="margin-bottom: 8px">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit student</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.update',$mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $mahasiswa->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NRP:</strong>
                    <input class="form-control" name="nrp" placeholder="NRP" value="{{ $mahasiswa->nrp }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kelas:</strong>
                    <input class="form-control" name="kelas" placeholder="Kelas" value="{{ $mahasiswa->kelas }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio1" value="Laki Laki">
                        <label class="form-check-label" for="inlineRadio1">Laki Laki</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio2" value="Perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                      </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>

    </form>
@endsection
