@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('quickadmin.income-category.title')</h3>
    </div>
    <div class="card-body">
        {!! Form::open(['method' => 'POST', 'route' => ['admin.income_categories.store']]) !!}
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('quickadmin.qa_create')
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('name', trans('quickadmin.income-category.fields.name').'*', ['class' =>
                        'control-label']) !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required'
                        => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

