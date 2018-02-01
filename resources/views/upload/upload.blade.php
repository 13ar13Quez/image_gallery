@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>File Upload</h1>
                </div>
                <div class="panel-body">
                    <div class="">
                        <form action="{{ URL::to('gallery/upload') }}" class="dropzone" id="my-awesome-dropzone" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                            <div class="dz-message dz-message-fix">
                                <div class="drag-icon-cph">
                                    <i class="fa fa-4x fa-cloud-upload"></i>
                                </div>
                            </div>
                            <h3 class="text-center">Drop here..</h3>
                        </form>

                    </div>
                    <br>
                    <div id="showPic">
                        @if($picture)
                            @foreach($picture as $value)
                                <div class='col-md-3'>
                                    <img src="{{ URL::asset('uploads/original/'.$value['pic_name']) }}" alt="{{$value['pic_name']}}" class="img-responsive" style='max-height: 200px; max-width: 200px;'>
                                    <button class="btn btn-sm btn-info infoPic"><i class="fa fa-info-circle"></i></button>
                                    <button class="btn btn-sm btn-danger deletePic"><i class="fa fa-trash"></i></button>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    @parent
    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('js/dropzone.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('click', '.deletePic', function (e) {
                let token = $("input[name=_token]").val();
                let picName = $(e.target).prev('button').prev('img').attr('alt');
                if(picName !== undefined) {
                    $.ajax({
                        url: '{{ URL::to('/gallery/delete') }}',
                        cache: false,
                        type: "post",
                        data: {picName:picName, _token:token},
                        success: function (msg)
                        {
                            $(e.target).parent('div').remove();
                        }
                    })
                }
            });
        });
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 10, // MB
            acceptedFiles: "image/*",
            init: function() {

                myDropzone = this;
                myDropzone.on("success", function(file, response) {
                    myDropzone.removeFile(file);
                    if (!response) {
                        showPic(file.name);
                    }
                });
            },
        };
        function showPic (name) {
            let path= "uploads/original/"+name;
            $('#showPic').append("" +
                "<div class='col-md-3'>" +
                    "<img src="+path+" class=\"img-responsive\" style='max-height: 200px; max-width: 200px;'>" +
                    "<button class=\"btn btn-sm btn-info\"><i class=\"fa fa-info-circle\"></i></button>\n" +
                    "<button class=\"btn btn-sm btn-danger deletePic\"><i class=\"fa fa-trash\"></i></button>" +
                "</div>"
            );
        }


    </script>
@endsection