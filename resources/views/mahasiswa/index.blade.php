@extends('mahasiswa.view')
@section('title', 'Mahasiswa')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Data Mahasiswa Application</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Create new mahasiswa</a>
                <a href="{{ route('generatepdf')}}"><button class="btn btn-danger">Generate PDF</button></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Jenis Kelamin</th>
            <th>NRP</th>
            <th>Kelas</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswa as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->jeniskelamin }}</td>
            <td>{{ $student->nrp }}</td>
            <td>{{ $student->kelas }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy',$student->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('mahasiswa.show',$student->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$student->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
