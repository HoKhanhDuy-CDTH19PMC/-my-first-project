@extends('layout.app')
@section('title')
    - Them moi
@endsection
@section('main-content')
    <h1>Them moi giang vien</h1>
    <a href="{{route('ds-giang-vien')}}">Back</a>

    <form action="{{route('xl-them-moi-giang-vien')}}" method="POST">
        @csrf
        <table>
            <tr>
                <th>
                    Full Name
                </th>
                <td>
                    <input type="text" name="ho_ten" required>
                </td>
            </tr>
            <tr>
                <th>
                    UserName
                </th>
                <td>
                    <input type="text" name="ten_dang_nhap" required>
                </td>
            </tr>

            <tr>
                <th>
                    Password
                </th>
                <td>
                    <input type="text" name="mat_khau" required>
                </td>
            </tr>

            <tr>
                <th>
                    Email
                </th>
                <td>
                    <input type="email" name="email" required>
                </td>
            </tr>
            <tr>
                <th>
                  
                </th>
                <td>
                   <button type="submit">Save</button>
                </td>
            </tr>
        </table>
    </form>
@endsection