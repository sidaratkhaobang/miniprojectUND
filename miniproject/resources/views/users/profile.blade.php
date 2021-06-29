@extends('layouts.app')

@section('content')
{{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">  
                <h2 align="center">ข้อมูลผู้ใช้งาน</h2>
                <div class="form-shadow col-xl-12">
                    <form action="" method="">
                        <br>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <label for="firstname">ชื่อ - นามสกุล : {{ $data->firstname }} {{ $data->lastname }}</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <label for="career">อาชีพ: {{ $data->career }}</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <label for="sex">เพศ: 
                                    @if ($data->sex == 1)
                                        <input type="radio" name="sex" id="female" value="1" checked>ผู้หญิง
                                    @elseif($data->sex == 2)
                                        <input type="radio" name="sex" id="male" value="2" checked>ผู้ชาย
                                    @endif
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <label for="dateB">วัน-เดือน-ปี เกิด:  {{ date('d-m-Y' , strtotime($data->dateB)) }}</label>
                                
                            </div>
                            {{-- <div class="col-xl-4">
                                <div class="pull-right mt-5">
                                    <input type="submit" value="บันทึก" class="btn btn-primary">
                                </div>
                            </div> --}}
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    $('#datepicker').datepicker({
        format: 'y/m/d',
        uiLibrary: 'bootstrap4',
        autoclose: true,
        todayHighlight: true
    });
</script> --}}
@endsection
