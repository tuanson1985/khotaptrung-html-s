@extends('theme_5.frontend.layouts.master')
@section('content')
    <div class="container c-container c-my-50">
        4 phía
        <textarea name="" id="bonphia" cols="30" rows="10" style="height: 100px"></textarea>
        right
        <textarea name="" id="right" cols="30" rows="10" style="height: 100px"></textarea>
        left
        <textarea name="" id="left" cols="30" rows="10" style="height: 100px"></textarea>
        top
        <textarea name="" id="top" cols="30" rows="10" style="height: 100px"></textarea>
        bottom
        <textarea name="" id="bot" cols="30" rows="10" style="height: 100px"></textarea>
    </div>
@endsection
@section('scripts')
    <script>
        let f = '';
        let r = '';
        let l = '';
        let t = '';
        let b = '';
        //bonphia
        for (let i = 1; i < 51; i++) {
            f += `.c-m-sm-n${i} {`;
            f += `margin:-${i}px;`;
            f += '}'
        }
        //right
        for (let i = 1; i < 51; i++) {
            r += `.c-mr-sm-n${i},.c-mx-sm-n${i}{`;
            r += `margin-right:-${i}px;`;
            r += '}'
        }
        //left
        for (let i = 1; i < 51; i++) {
            l += `.c-ml-sm-n${i},.c-mx-sm-n${i}{`;
            l += `margin-left:-${i}px;`;
            l += '}'
        }
        //top
        for (let i = 1; i < 51; i++) {
            t += `.c-mt-sm-n${i},.c-my-sm-n${i}{`;
            t += `margin-top:-${i}px;`;
            t += '}'
        }
        //bot
        for (let i = 1; i < 51; i++) {
            b += `.c-mb-sm-n${i},.c-my-sm-n${i}{`;
            b += `margin-bottom:-${i}px;`;
            b += '}'
        }
        document.querySelector('#bonphia').value = f;
        document.querySelector('#right').value = r;
        document.querySelector('#left').value = l;
        document.querySelector('#top').value = t;
        document.querySelector('#bot').value = b;
    </script>
@endsection
