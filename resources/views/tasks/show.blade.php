@extends('home')
@section('content')
    <div class="text-center">
        <h3 class="text-dark mt-5">Thông Tin Công Việc</h3>
        <div class="col-sm-4 offset-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Tên: {{$task->title}}</h5>
                    <h6 class="card-text ">Nội dung: {{$task->content}}</h6>
                    <p class="card-text">Ảnh:<br> <img src="{{ asset('storage/' . $task->image) }}" alt="" style="width: 300px">
                    </p>
                    <p class="card-text">Ngày hết hạn: {{$task->due_date}}</p>
                </div>
            </div>
        </div>
        <a href="{{route('tasks.index')}}" class="btn btn-success mt-3">Quay Lại</a>
    </div>
@endsection