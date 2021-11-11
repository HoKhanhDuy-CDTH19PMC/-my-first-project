@extends('layout.app')

@section('main-content')
    <h1>Danh sach giang vien</h1>
    <a href="{{route('them-moi-giang-vien')}}">Them moi</a>

    <table border="1">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Full name
                </th>
                <th>
                    UserName
                </th>
                <th>
                    Email
                </th>
                <th>
                    Time
                </th>
                <th>Action</th>
            </tr>
            @forelse($dsGiangVien as $gv)
            <tr>
               
                <td>{{$gv->id}}</td>
                <td>{{$gv->ho_ten}}</td>
                <td>{{$gv->ten_dang_nhap}}</td>
                <td>{{$gv->email}}</td>
                <td>{{$gv->created_at}}</td>
                <td><a href="{{route('cap-nhat-giang-vien',['id' => $gv->id]) }}">Update</a></td>
            </tr>
          @empty
          <tr ><td colspan="5">Empty</td></tr>
            @endforelse
    </table>
@endsection
@section('title')
    - Giang vien
@endsection