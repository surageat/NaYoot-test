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
                    <div class="card-header">ข้อ4 ซื้อของ</div>

                    <div class="card-body">
                        <form action="{{ url('addcalculate') }}" method="post">
                            {{ csrf_field() }}
                            <div>
                                <label for="form-control">เงินที่มีอยู่ในกระเป๋า</label>
                                <input type="text" class="form-control col-4" name="money">
                            </div><br>
                            <div>
                                <button type="submit" class="btn btn-primary">ตรวจสอบ</button>
                            </div>
                        </form>
                        <br><br>
                        <div>
                            <h2>1.ร้านที่ 1 ราคาสินค้าชิ้นละ 25 บาท เมื่อซื้อ 10 ชิ้นขึ้นไปลดให้ 20%</h2>
                            <h2>2.ร้านที่ 2 ราคาสินค้าชิ้นละ 30 บาท เมื่อซื้อสินค้า 3 ชิ้น แถมให้ 1 ชิ้น</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
