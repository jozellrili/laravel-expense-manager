@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('quickadmin.currency.title')</h3>
    </div>
    <div class="card-body">
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('quickadmin.qa_view')
            </div>
            <div class="panel-body table-responsive">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>@lang('quickadmin.currency.fields.title')</th>
                                <td field-key='title'>{{ $currency->title }}</td>
                            </tr>
                            <tr>
                                <th>@lang('quickadmin.currency.fields.symbol')</th>
                                <td field-key='symbol'>{{ $currency->symbol }}</td>
                            </tr>
                            <tr>
                                <th>@lang('quickadmin.currency.fields.money-format')</th>
                                <td field-key='money_format'>{{ $currency->money_format_thousands }}</td>
                            </tr>
                            <tr>
                                <th>@lang('quickadmin.currency.fields.money-format')</th>
                                <td field-key='money_format'>{{ $currency->money_format_decimal }}</td>
                            </tr>
                            <tr>
                                <th>@lang('quickadmin.currency.fields.created-by')</th>
                                <td field-key='created_by'>{{ $currency->created_by->name or '' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>&nbsp;</p>
                <a href="{{ route('admin.currencies.index') }}" class="btn btn-light">@lang('quickadmin.qa_back_to_list')</a>
            </div>
        </div>
    </div>
</div>
@stop
