<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templates.css') }}">
</head>
<body>
    <main>
        <div class="col-sm-12 col-lg-9 red_left_side">
{{--            @includeIf('resumes.template-' . auth()->user()->credential->template_id)--}}
            @includeIf('components.resumes.template' . auth()->user()->credential->template_id)
        </div>
    </main>
</body>
</html>
