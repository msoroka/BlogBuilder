@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{ Form::model($setting, ['route' => ['admin.setting.update-setting', $setting], 'method' => 'PUT']) }}
                <div class="card shadow">
                    <div class="card-header">Blog settings</div>
                    <div class="card-body">
                        <h3>Main settings</h3>
                        <div class="row">
                            <div class="col">
                                <div class="form-group required">
                                    {{ Form::label('name', 'Name:', ['class' => 'control-label']) }}
                                    {{ Form::text('name', null, ['class' => 'form-control', 'required' => true]) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group required">
                                    {{ Form::label('description', 'Description:', ['class' => 'control-label']) }}
                                    {{ Form::textarea('description', null, ['class' => 'form-control', 'required' => true, 'rows' => 3]) }}
                                </div>
                            </div>
                        </div>
                        <h3>Socials</h3>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ Form::label('facebook', 'Facebook:', ['class' => 'control-label']) }}
                                    {{ Form::text('facebook', null, ['class' => 'form-control', 'required' => false]) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ Form::label('instagram', 'Highlighted Instagram post:', ['class' => 'control-label']) }}
                                    {{ Form::text('instagram', null, ['class' => 'form-control', 'required' => false]) }}
                                </div>
                            </div>
                        </div>
                        <h3>Blog owner: (can be empty)</h3>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ Form::label('owner_id', 'Owner:', ['class' => 'control-label']) }}
                                    {{ Form::select('owner_id', $users, null, ['class' => 'form-control my-editor', 'required' => false]) }}
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                {{ Form::submit('Save', ['class' => 'btn btn-primary btn-block']) }}
                            </div>
                        </div>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
