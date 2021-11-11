@extends('layout.app')
@section('title')
    - Cap nhat
@endsection
@section('main-content')
    <h1>Cap nhat giang vien</h1>
    <a href="{{route('ds-giang-vien')}}">Back</a>

    <form action="{{route('xl-cap-nhat-giang-vien', ['id' => $giangVien->id ])}}" method="POST">
        @csrf
        <table>
            <tr>
                <th>
                    UserName
                </th>
                <td>
                    <input type="text" name="ten_dang_nhap" required value="{{$giangVien->ten_dang_nhap}}" disabled>
                </td>
            </tr>
            <tr>
                <th>
                    Full Name
                </th>
                <td>
                    <input type="text" name="ho_ten" required value="{{$giangVien->ho_ten}}">
                </td>
            </tr>
            <tr>
                <th>
                    Email
                </th>
                <td>
                    <input type="email" name="email" required value="{{$giangVien->email}}">
                </td>
            </tr>
            <tr>
                <th>
                  
                </th>
                <td>
                   <button type="submit">Update</button>
                </td>
            </tr>
        </table>
    </form>
@endsection