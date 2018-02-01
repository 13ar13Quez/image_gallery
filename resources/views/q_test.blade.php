@extends('layouts.template')

@section('content')
{{--    <div id="qTestVue">
        @{{ message }}
        <br>
        <input v-model = "message">
    </div>--}}
    5555
@endsection


@section('scripts')
    @parent
{{--    <script src="{{URL::asset('js/vue.js')}}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            new Vue({
                el: '#qTestVue',
                data: {
                    message: 'Hello !!!!'
                }
            });
        });
    </script>--}}
@endsection

