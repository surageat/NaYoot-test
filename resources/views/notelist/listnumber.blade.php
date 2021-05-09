@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-5">
                <a href="javascript:history.back()" class="btn btn-danger btn-lg ">ย้อนหลับ</a>
            </div>
            <div class="col-5">
                <a href="{{ url('/programe') }}" class="btn btn-success btn-lg col-5">กลับสู่หน้ารายการ</a>
            </div>
        </div><br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">รูปภาพ</th>
                                <th class="text-center">เบอร์โทรศัพท์</th>
                                <th class="text-center">ชื่อ</th>
                                <th class="text-center">ดูข้อมูล</th>
                                <th class="text-center">แก้ไขข้อมูล</th>
                                <th class="text-center">ลบข้อมูล</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($phonenumber as $row)
                                <tr>
                                    <td style="width: 300px; word-break: break-all;">
                                        <img class="d-block w-100 " src="{{ asset('img/Picnumber/' . $row->picture) }}"
                                            width="20px" height="100px">
                                    </td>
                                    <td style="width: 200px; word-break:  break-all;" class="text-center">
                                        {{ $row->tel_number }}
                                    </td>
                                    <td style="width: 200px; word-break:  break-all;" class="text-center">
                                        {{ $row->name }}
                                    </td>
                                    <td style="width:400px; word-break:  break-all;" class="text-center">
                                        <button class="btn btn-secondary" data-toggle="modal"
                                            data-target="#show{{ $row->id }}">ดูข้อมูลบุคคล</button>
                                    </td>
                                    <td style="width: 100px; word-break:  break-all;" class="text-center">
                                        <a href="{{ action('NumberController@edit', $row->id) }}"
                                            class="btn btn-warning">แก้ไข</a>
                                    </td>
                                    <td style="width: 80px; word-break: break-all;" class="text-center">
                                        <form method="post" action="{{ url('deletenumber', $row->id) }}"
                                            onclick="return confirm('ต้องการลบข้อมูลใช่ หรือ ไม่')">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger" type="submit">ลบ</button>
                                        </form>
                                    </td>
                                </tr>
                                <div class="modal fade bd-example-modal-lg" id="show{{ $row->id }}" tabindex="1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="text-center">
                                                    <img class="d-block w-100 " src="{{ asset('img/Picnumber/' . $row->picture) }}"
                                                    width="20px" height="500px">
                                                </div><br><br>
                                                <div class="text-center">
                                                   <h1>เบอร์โทรศัพท์ : {{$row->tel_number}}</h1> 
                                                   <h1>ชื่อ-สกุล :  {{$row->name}}</h1>
                                                   <h1>ที่อยู่ : {{$row->address}}</h1> 
                                                    
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">ยกเลิก</button>
                                            </div>

                                    </div>
                                </div>
                </div>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });

        </script>
    @endsection
