<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cover Letter</title>
    {{--    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">--}}
    {{--        <link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/templates.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templates-pdf.css') }}">
    <style>


    </style>
</head>
<body>
<main>
    <div class="col-sm-12 col-lg-9 red_left_side">
        @includeIf('components.cover-letters.template' . auth()->user()->coverLetter->template_id)
    </div>
</main>
</body>
</html>
