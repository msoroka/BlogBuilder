@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{ Form::open(['route' => ['admin.tag.store-tag']]) }}
                <div class="card shadow">
                    <div class="card-header">Create tag</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group required">
                                    {{ Form::label('name', 'Name:', ['class' => 'control-label']) }}
                                    {{ Form::text('name', null, ['class' => 'form-control', 'required' => true]) }}
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                {{ Form::submit('Create', ['class' => 'btn btn-primary btn-block']) }}
                            </div>
                        </div>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
