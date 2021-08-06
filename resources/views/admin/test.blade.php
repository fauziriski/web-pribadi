<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/summernote/summernote-lite.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="col-sm-12 col-md-7">
        <textarea id="summernote" name="content" class="summernote"></textarea>
    </div>
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/summernote/summernote-lite.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/summernote/plugin/nugget/summernote-ext-nugget.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/summernote/plugin/highlight/src/summernote-ext-highlight.js') }}"></script>

    <script>
    
        $(document).ready(function () {
            // var offset = target.position().top + parent.scrollTop();
            // alert($('#summernote').offset());
            var nav = $('#summernote');
            if(nav.length) {
                nav.summernote({
                placeholder: 'Hello stand alone ui',
                tabsize: 2,
                height: 400,
                prettifyHtml: false,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['highlight', ['highlight']],
                    ['insert', ['nugget']],
                ],
                nugget: {
                    list: [ // list of your nuggets
                        '[[code nugget 1]]',
                        '[[code nugget 2]]',
                        '[[code nugget 2]]'
                    ]
                },
            });
        }
        });
    
    </script>
</body>
</html>