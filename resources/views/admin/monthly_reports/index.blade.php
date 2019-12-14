@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Monthly Report</h3>
    </div>
    <div class="card-body">
        {!! Form::open(['method' => 'get']) !!}
        <div class="row">
            <div class="col-sm-4 col-lg-4 form-group">
                {!! Form::label('year','Year',['class' => 'control-label']) !!}
                {!! Form::select('y', array_combine(range(date("Y"), 1900), range(date("Y"), 1900)), old('y',
                Request::get('y', date('Y'))), ['class' => 'form-control form-control-sm']) !!}
            </div>
            <div class="col-sm-4 col-lg-4 form-group">
                {!! Form::label('month','Month',['class' => 'control-label']) !!}
                {!! Form::select('m', cal_info(0)['months'], old('m', Request::get('m', date('m'))), ['class' =>
                'form-control form-control-sm']) !!}
            </div>
            <div class="col-sm-4 col-lg-4">
                <label class="control-label">&nbsp;</label><br>
                {!! Form::submit('Select month',['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Report
            </div>
            {!! Form::close() !!}
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Income</th>
                                <td>{{ auth()->user()->currency->symbol . ' ' . number_format($inc_total, 2,
                                    auth()->user()->currency->money_format_decimal,
                                    auth()->user()->currency->money_format_thousands) }}
                                </td>
                            </tr>
                            <tr>
                                <th>Expenses</th>
                                <td>{{ auth()->user()->currency->symbol . ' ' . number_format($exp_total, 2,
                                    auth()->user()->currency->money_format_decimal,
                                    auth()->user()->currency->money_format_thousands) }}
                                </td>
                            </tr>
                            <tr>
                                <th>Profit</th>
                                <td>{{ auth()->user()->currency->symbol . ' ' . number_format($profit, 2,
                                    auth()->user()->currency->money_format_decimal,
                                    auth()->user()->currency->money_format_thousands) }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Income by category</th>
                                <th>{{ auth()->user()->currency->symbol . ' ' . number_format($inc_total, 2,
                                    auth()->user()->currency->money_format_decimal,
                                    auth()->user()->currency->money_format_thousands) }}
                                </th>
                            </tr>
                            @foreach($inc_summary as $inc)
                            <tr>
                                <th>{{ $inc['name'] }}</th>
                                <td>{{ auth()->user()->currency->symbol . ' ' . number_format($inc['amount'], 2,
                                    auth()->user()->currency->money_format_decimal,
                                    auth()->user()->currency->money_format_thousands) }}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Expenses by category</th>
                                <th>{{ auth()->user()->currency->symbol . ' ' . number_format($exp_total, 2,
                                    auth()->user()->currency->money_format_decimal,
                                    auth()->user()->currency->money_format_thousands) }}
                                </th>
                            </tr>
                            @foreach($exp_summary as $inc)
                            <tr>
                                <th>{{ $inc['name'] }}</th>
                                <td>{{ auth()->user()->currency->symbol . ' ' . number_format($inc['amount'], 2,
                                    auth()->user()->currency->money_format_decimal,
                                    auth()->user()->currency->money_format_thousands) }}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop