@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-7">
                <a href="javascript:history.back()" class="btn btn-danger btn-lg col-4">ย้อนหลับ</a>
                <a href="{{ url('/home') }}" class="btn btn-success btn-lg col-4">กลับสู่หน้าหลัก</a>
            </div>
        </div><br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">ข้อ2 เงินทอน</div>

                    <div class="card-body">
                        <form action="{{ url('/changmoney') }}" method="post">
                            {{ csrf_field() }}
                            <div>
                                <label for="form-control">เงินที่จ่าย</label>
                                <input type="text" class="form-control" name="money">
                            </div>
                            <div>
                                <label for="form-control">ราคาสินค้า</label>
                                <input type="text" class="form-control" name="price">
                            </div><br><br>
                            <div>
                                <button type="submit" class="btn btn-primary">คำนวณ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
