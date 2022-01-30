@extends('adminlte::page')

@section('title', 'Info Peraturan')

@section('content_header')
    <h1 class="m-0 text-dark">Info Peraturan</h1>
@stop

@section('content')
                    <table class='table table-striped table-hover'>
                        <tr>
                            <td>NIK</td>
                            <td>{{ $user->name}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email}}</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>{{ $user->No_Telepon}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop