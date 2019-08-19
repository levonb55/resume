<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js" ></script>
<script src="{{asset('assets/libs/js/jquery-3.3.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{asset('assets/libs/js/bootstrap.min.js')}}"></script>
<script>
    let appUrl = "";

    if(window.location.hostname !== 'resume.loc') {
        appUrl = 'http://greatexpertdev.site/laravel/resume-builder/public';
    }
</script>
@yield('extra-scripts')
<script src="{{asset('js/script.js')}}"></script>
