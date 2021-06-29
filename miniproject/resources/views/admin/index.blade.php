@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <div class="container">
        <h2 align="center">ข้อมูลผู้ใช้งาน</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ชื่อ-นามสกุล</th>
                <th scope="col">อาชีพ</th>
                <th scope="col">ตรวจสอบ</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                    <tr>
                        <th scope="row">{{$row->id}}</th>
                        <td>{{$row->firstname}} {{$row->lastname}}</td>
                        <td>{{$row->career}}</td>
                        <td>
                        <a href="{{route('profile',$row->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection