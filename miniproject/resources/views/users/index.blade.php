@extends('layouts.app')

@section('content')
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">  
                <h2 align="center">กรอกข้อมูลผู้ใช้งาน</h2>
                <div class="form-shadow col-xl-12">
                    <form action="{{ route('save') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <label for="firstname">ชื่อ:</label>
                                <input type="text" class="form-control" name="firstname" id="firstname">
                            </div>
                            <div class="col-xl-6">
                                <label for="lastname">นามสกุล:</label>
                                <input type="text" class="form-control" name="lastname" id="lastname">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-6">
                                <label for="career">อาชีพ:</label>
                                <input type="text" class="form-control" name="career" id="career">
                            </div>
                            <div class="col-xl-6">
                                <label for="sex">เพศ:</label>  <br>
                                <input type="radio" name="sex" id="female" value="1"><label for="female">&nbsp;ผู้หญิง</label>
                                <input type="radio" name="sex" id="male" value="2"><label for="male">&nbsp;ผู้ชาย</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-8">
                                <label for="dateB">วัน-เดือน-ปี เกิด:</label>
                                <input id="datepicker" name="dateB" width="270" />
                            </div>
                            <div class="col-xl-4">
                                <div class="pull-right mt-5">
                                    <input type="submit" value="บันทึก" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#datepicker').datepicker({
        // format: 'yy/mm/dd',
        uiLibrary: 'bootstrap4',
        autoclose: true,
        todayHighlight: true
    });
</script>
@endsection
