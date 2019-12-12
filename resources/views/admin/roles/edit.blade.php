@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('quickadmin.roles.title')</h3>
    </div>
    <div class="card-body">
        {!! Form::model($role, ['method' => 'PUT', 'route' => ['admin.roles.update', $role->id]]) !!}

        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('quickadmin.qa_edit')
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('title', trans('quickadmin.roles.fields.title').'*', ['class' => 'control-label']) !!}
                        {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                        @endif
                    </div>
                </div>

            </div>
        </div>

        {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

