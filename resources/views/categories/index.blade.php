@extends('master')


@section('content')

<div class="card">
    <div class="card-header">
        Category
    </div>
    <div class="card-body p-0">
        <table class="table table-sm table-hover mb-0">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td width="200" class="text-center">
                        <a href="{{route('categories.create')}}" class="btn btn-sm btn-outline-primary">New</a>
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td class="text-center">
                        <a href="{{ route('categories.show', $item->id)}}" class="btn btn-sm btn-outline-info">show</a>
                        <a href="{{ route('categories.edit', $item->id)}}" class="btn btn-sm btn-outline-success">edit</a>

                        
                        <a href="#" onclick="document.getElementById('{{'form-delete-'.$item->id}}').submit();" class="btn btn-sm btn-outline-danger">delete</a>

                        <form action="{{ route('categories.destroy', $item->id)}}" method="POST" id="{{'form-delete-'.$item->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
        
@endsection