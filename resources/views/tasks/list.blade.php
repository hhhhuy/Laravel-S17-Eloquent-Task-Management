@extends('home')
@section('title', 'Danh sách Công Việc')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Danh Sách Công Việc</h1></div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên Công Việc</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Ngày hết hạn</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($tasks) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($tasks as $key => $task)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->content }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $task->image) }}" alt="" style="width: 150px">
                            </td>
                            <td>{{ $task->due_date}}</td>
                            <td><a href="{{ route('tasks.show', $task->id) }}">xem</a></td>
                            <td><a href="{{ route('tasks.edit', $task->id) }}">sửa</a></td>
                            <td><a href="{{ route('tasks.destroy', $task->id) }}" class="text-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa công việc {{$task->title}} ?')">xóa</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('tasks.create') }}">Thêm mới</a>
        </div>
    </div>
@endsection