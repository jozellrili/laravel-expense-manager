@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('quickadmin.currency.title')</h3>
        <p class="badge-pill badge-warning text-lowercase ml-1 mt-1 small">@lang('quickadmin.qa_create')</p>
    </div>
    <div class="card-body">
        {!! Form::open(['method' => 'POST', 'route' => ['admin.currencies.store']]) !!}
        <div class="position-relative form-group">
            {!! Form::label('title', trans('quickadmin.currency.fields.title').'', ['class' => 'control-label']) !!}
            {!! Form::text('title', old('title'), ['class' => 'form-control form-control-sm', 'placeholder' => '']) !!}
            @if($errors->has('title'))
            <p class=" help-block text-danger">
                {{ $errors->first('title') }}
            </p>
            @endif
        </div>
        <div class="position-relative form-group">
            {!! Form::label('symbol', trans('quickadmin.currency.fields.symbol').'', ['class' => 'control-label']) !!}
            {!! Form::text('symbol', old('symbol'), ['class' => 'form-control form-control-sm', 'placeholder' => ''])
            !!}
            @if($errors->has('symbol'))
            <p class=" help-block text-danger">
                {{ $errors->first('symbol') }}
            </p>
            @endif
        </div>
        <div class="position-relative form-group">
            {!! Form::label('money_format_thousands', 'Money format for thousands' .'', ['class' => 'control-label'])
            !!}
            {!! Form::text('money_format_thousands', old('money_format_thousands'), ['class' => 'form-control
            form-control-sm',
            'placeholder' => '']) !!}
            @if($errors->has('money_format_thousands'))
            <p class=" help-block text-danger">
                {{ $errors->first('money_format_thousands') }}
            </p>
            @endif
        </div>
        <div class="position-relative form-group">
            {!! Form::label('money_format_decimal', trans('quickadmin.currency.fields.money-format-decimal').'',
            ['class' => 'control-label']) !!}
            {!! Form::text('money_format_decimal', old('money_format_decimal'), ['class' => 'form-control
            form-control-sm',
            'placeholder' => '']) !!}
            @if($errors->has('money_format_decimal'))
            <p class=" help-block text-danger">
                {{ $errors->first('money_format_decimal') }}
            </p>
            @endif
        </div>
        <div class="position-relative">
            <a href="{{ route('admin.currencies.index') }}" class="btn btn-light btn-sm">
                <i class="fas fa-angle-double-left"></i>
                @lang('quickadmin.qa_back_to_list')
            </a>
            {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-primary btn-sm']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop

