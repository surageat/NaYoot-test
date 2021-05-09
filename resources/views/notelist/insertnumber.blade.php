@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <a href="javascript:history.back()" class="btn btn-danger btn-lg col-4">ย้อนหลับ</a>
                <a href="{{url('/home')}}" class="btn btn-success btn-lg col-4">กลับสู่หน้าหลัก</a>
            </div>
            <div class="col-5">
                <a href="{{url('listnumber')}}" class="btn btn-secondary btn-lg col-4">บัญชีรายชื่อ</a>
            </div>
        </div><br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">เพิ่มข้อมูลรายชื่อ</div>

                    <div class="card-body">
                        <form method="post" action="{{ url('addnumber') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="inputEmail4">เบอโทรศัพท์ </label>
                                    <input type="text" class="form-control" name="tel_number"
                                        placeholder="กรอกเบอร์โทรศัพท์">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="inputEmail4">ชือ-นามสกุล</label>
                                    <input type="text" class="form-control" name="name" placeholder="กรอกเบอร์โทรศัพท์">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">ที่อยู่</label>
                                    <textarea class="form-control" name="address"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">รูปภาพ</label><br>
                                    <input type="file" id="filename" data-show-preview="true" name="picture">
                                </div>
                            </div>
                            <div class=" text-center">
                                <button type="submit" class="btn btn-primary ">เพิ่มข้อมูล</button>
                            </div>
                            <br><br>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
