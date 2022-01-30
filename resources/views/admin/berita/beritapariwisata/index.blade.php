@extends('adminlte::page')
@section('title', 'List Berita pariwisata')
@section('content_header')
    <h1 class="m-0 text-dark">List Berita pariwisata</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('beritapariwisata.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Berita pariwisata</th>
                            <th>Isi Berita pariwisata</th>
                            <th>Link pariwisata</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($beritapariwisata as $key => $beritapariwisata)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$beritapariwisata->judul_beritapariwisata1}}</td>
                                <td>{{$beritapariwisata->isi_beritapariwisata1}}</td>
                                <td>{{$beritapariwisata->linkpariwisata1}}</td>
                                <td>
                                    <a href="{{route('beritapariwisata.edit', $beritapariwisata)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('beritapariwisata.destroy', $beritapariwisata)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush