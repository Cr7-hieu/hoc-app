@extends('layout')
@section('main')
<a class="btn btn-primary" href="/chuyen-muc/them">them moi</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ten</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $cm)
            <tr>
            <td>{{$cm->id}}</td>
            <td>{{$cm->ten}}</td>
            <td>
                <a href="/chuyen-muc/sua/{{$cm->id}}" class="btn btn-success">Edit</a>
                <a href="{{$cm->id}}"  method="DELETE" class="btn btn-danger"
                   onclick="return confirm('Bạn có chắc chắn muốn xóa chuyên mục này không?')">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
