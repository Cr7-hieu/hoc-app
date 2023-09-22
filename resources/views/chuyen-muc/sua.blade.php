@extends('layout')
@section('main')
<a class="btn btn-primary" href="/chuyen-muc/danh-sach">list</a>
<h2>them chuyen muc</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="/chuyen-muc/sua/{{$chuyen_muc->id}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="ten" class="form-label">Ten</label>
      <input type="text" value="{{$chuyen_muc->ten}}" class="form-control @error('ten') is-invalid @enderror" name="ten" id="ten">
    </div>
    <div class="mb-3">
      <label for="mota" class="form-label">Mo ta</label>
      <textarea class="form-control" name="mota" id="mota">{{$chuyen_muc->mo_ta}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
