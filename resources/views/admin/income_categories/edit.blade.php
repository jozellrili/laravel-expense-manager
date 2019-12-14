@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('quickadmin.income-category.title')</h3>
        <p class="badge-pill badge-info text-lowercase ml-1 mt-1 small">@lang('quickadmin.qa_edit')</p>
    </div>
    <div class="card-body">
        {!! Form::model($income_category, ['method' => 'PUT', 'route' => ['admin.income_categories.update',
        $income_category->id]]) !!}

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
        <div class="position-relative">
            <a href="{{ route('admin.income_categories.index') }}" class="btn btn-light btn-sm">
                <i class="fas fa-angle-double-left"></i>
                @lang('quickadmin.qa_back_to_list')
            </a>
            {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-primary btn-sm']) !!}
        </div>
        
        {!! Form::close() !!}
    </div>
</div>
@stop

