@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('quickadmin.income.title')</h3>
        <p class="badge-pill badge-info text-lowercase ml-1 mt-1 small">@lang('quickadmin.qa_edit')</p>
    </div>
    <div class="card-body">
        {!! Form::model($income, ['method' => 'PUT', 'route' => ['admin.incomes.update', $income->id], 'id' =>
        'income']) !!}

        <div class="position-relative form-group">
            {!! Form::label('income_category_id', trans('quickadmin.income.fields.income-category').'*',
            ['class' => 'control-label']) !!}
            {!! Form::select('income_category_id', $income_categories, old('income_category_id'), ['class'
            => 'form-control form-control-sm select2', 'required' => '']) !!}
            <p class="help-block"></p>
            @if($errors->has('income_category_id'))
            <p class="help-block">
                {{ $errors->first('income_category_id') }}
            </p>
            @endif
        </div>

        <div class="position-relative form-group">
            {!! Form::label('entry_date', trans('quickadmin.income.fields.entry-date').'*', ['class' =>
            'control-label']) !!}
            {!! Form::text('entry_date', old('entry_date'), ['class' => 'form-control form-control-sm date', 'placeholder'
            => '', 'required' => '']) !!}
            @if($errors->has('entry_date'))
            <p class="help-block">
                {{ $errors->first('entry_date') }}
            </p>
            @endif
        </div>

        <div class="position-relative form-group">
            {!! Form::label('amount', trans('quickadmin.income.fields.amount').'*', ['class' =>
            'control-label']) !!}
            {!! Form::text('amount', old('amount'), ['class' => 'form-control form-control-sm', 'id' => 'moneyFormat',
            'placeholder' => '', 'required' => '']) !!}
            @if($errors->has('amount'))
            <p class="help-block">
                {{ $errors->first('amount') }}
            </p>
            @endif
        </div>
        <div class="position-relative">
            <a href="{{ route('admin.incomes.index') }}" class="btn btn-light btn-sm">
                <i class="fas fa-angle-double-left"></i>
                @lang('quickadmin.qa_back_to_list')
            </a>
            {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-primary btn-sm']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('javascript')
@parent
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "{{ config('app.date_format_js') }}"
    });
</script>

@stop