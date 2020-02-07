{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Resume</title>--}}
{{--    --}}{{--    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">--}}
{{--        <link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/templates.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/templates-pdf.css') }}">--}}

{{--    <style>--}}

{{--        --}}{{--    EXAMPLE 1    --}}

{{--        .example1 {--}}
{{--            /*font-family: ;*/--}}
{{--        }--}}
{{--        .example1 li {--}}
{{--            /*width: ;*/--}}
{{--        }--}}

{{--        .example1 p {--}}
{{--            /*width: ;*/--}}
{{--        }--}}

{{--        .example1 h5 {--}}
{{--            /*width: ;*/--}}
{{--        }--}}


{{--        --}}{{--    EXAMPLE 2    --}}

{{--        .example3 {--}}
{{--            /*font-family: ;*/--}}
{{--        }--}}
{{--        .example2 li {--}}
{{--            /*width: ;*/--}}
{{--        }--}}

{{--        .example2 p {--}}
{{--            /*width: ;*/--}}
{{--        }--}}

{{--        .example2 h5 {--}}
{{--            /*width: ;*/--}}
{{--        }--}}


{{--        --}}{{--    EXAMPLE 3    --}}

{{--        .example3 {--}}
{{--            /*font-family: ;*/--}}
{{--        }--}}
{{--        .example3 li {--}}
{{--            /*width: ;*/--}}
{{--        }--}}

{{--        .example3 p {--}}
{{--            /*width: ;*/--}}
{{--        }--}}

{{--        .example3 h5 {--}}
{{--            /*width: ;*/--}}
{{--        }--}}

{{--    </style>--}}

{{--</head>--}}
{{--<body>--}}
{{--<main>--}}
{{--    <div class="col-sm-12 col-lg-9 red_left_side">--}}
{{--        --}}{{--            @includeIf('resumes.template-' . auth()->user()->credential->template_id)--}}
{{--        @includeIf('components.resumes.template' . auth()->user()->credential->template_id)--}}
{{--    </div>--}}
{{--</main>--}}
{{--</body>--}}
{{--</html>--}}


@extends('layouts.main')

@section('nav')@endsection
@section('footer')@endsection
@section('scripts')@endsection

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <style>
        .example {
            background-color: white;
        }
    </style>
@endsection

@section('content')
{{--    <main>--}}
{{--        <section class="redaktor_section">--}}
{{--            <div class="row red_row">--}}
{{--                <div>--}}
                    @includeIf('components.resumes.template' . $credential->template_id)
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </main>--}}
@endsection
