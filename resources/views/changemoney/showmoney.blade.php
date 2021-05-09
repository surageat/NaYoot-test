@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-7">
                <a href="javascript:history.back()" class="btn btn-danger btn-lg col-4">ย้อนหลับ</a>
                <a href="{{url('/home')}}" class="btn btn-success btn-lg col-4">กลับสู่หน้าหลัก</a>
            </div>
        </div><br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">ผลสรุปเงินทอน</div>
                    <div class="card-body">
                        <h1>เงินทอน   :{{$change}}</h1>
                        <?php
                        if ($change >= 500) {
                        $changes2 = $change / 500;
                        $sum4 = floor($changes2) * 500;
                        $change = $change - $sum4;
                        echo 'แบงค์ 500 =' . floor($changes2) . 'ใบ<br />';
                        }
                        if ($change >= 100) {
                        $changes3 = $change / 100;
                        $sum4 = floor($changes3) * 100;
                        $change = $change - $sum4;
                        echo 'แบงค์ 100 =' . floor($changes3) . 'ใบ<br />';
                        }
                        if ($change >= 50) {
                        $changes4 = $change / 50;
                        $sum4 = floor($changes4) * 50;
                        $change = $change - $sum4;
                        echo 'แบงค์ 50 =' . floor($changes4) . 'ใบ<br />';
                        }
                        if ($change >= 10) {
                        $changes5 = $change / 10;
                        $sum4 = floor($changes5) * 10;
                        $change = $change - $sum4;
                        echo 'เหรียญ 10 =' . floor($changes5) . 'เหรียญ<br />';
                        }
                        if ($change >= 5) {
                        $changes6 = $change / 5;
                        $sum4 = floor($changes6) * 5;
                        $change = $change - $sum4;
                        echo 'เหรียญ 5 =' . floor($changes6) . 'เหรียญ<br />';
                        }
                        if ($change >= 1) {
                        $changes7 = $change / 1;
                        $sum4 = floor($changes7) * 1;
                        $change = $change - $sum4;
                        echo 'เหรียญ 1 =' . floor($changes7) . 'เหรียญ<br />';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
