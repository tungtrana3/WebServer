@extends('layout')
@section('main-content')
  <div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">@if(isset($cauHinhDiemCauHoi)) Cập nhật @else Thêm @endif Cấu hình điểm câu hỏi</h4>
                @if(isset($cauHinhDiemCauHoi))
                <form action="{{ route('cau-hinh-diem-cau-hoi.xu-ly-cap-nhat', ['id' =>$cauHinhDiemCauHoi ->id]) }}" method="POST">
                @else

                <form action="{{ route('cau-hinh-diem-cau-hoi.xu-ly-them-moi') }}" method="POST">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="thu_tu">Thứ tự</label>
                        <input type="text" class="form-control" id="thu_tu" name="thu_tu" @if(isset($cauHinhDiemCauHoi)) value="{{ $cauHinhDiemCauHoi->thu_tu}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="diem">Điểm</label>
                        <input type="text" class="form-control" id="diem" name="diem" @if(isset($cauHinhDiemCauHoi)) value="{{ $cauHinhDiemCauHoi->diem}}" @endif>
                    </div> 
                    <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($cauHinhDiemCauHoi)) Cập nhật @else Thêm @endif</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->

  </div>
                <!-- end row -->
@endsection