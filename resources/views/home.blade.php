@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Disk usage overview</h1></div>

                <div class="panel-body" style="background-color: white">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-5"><h4> Totoal size : </h4></label>
                            <label class="control-label col-lg-4 col-md-4 col-sm-5">
                                <h4>
                                    {{number_format($total_size_mb, 2, '.', '')}} MB
                                    ({{number_format($total_size)}} B)
                                </h4>
                            </label>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4 col-md-5 col-sm-5"> <h4> No of files : </h4></label>
                            <label class="control-label col-lg-4 col-md-5 col-sm-5"> <h4> {{$count_file}} file </h4> </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
