@extends('master')


@section('content')
    <div class="card">
        <div class="card-header">
            Category
        </div>
        <div class="card-body">
            @if ($action==='create')
                <form action="{{ route('categories.store') }}" method="POST">
            @endif

            @if ($action==='edit')
                <form action="{{ route('categories.update', $item->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
            @endif
                <div class="row">
                    @csrf
                    <div class="col-12 form-group">
                        <label for="name">Name(*)</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{$item->name}}">
                    </div>

                    <div class="col-12 form-group">
                        
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>

                        @if ($action==='create')
                            <button type="submit" class="btn btn-primary">Store</button>
                        @endif

                        @if ($action==='edit')
                            <button type="submit" class="btn btn-success">update</button>
                        @endif

                    </div>
                </div>
            @if ($action==='create' || $action==='edit')
                </form>
            @endif
            
        </div>
    </div>
@endsection