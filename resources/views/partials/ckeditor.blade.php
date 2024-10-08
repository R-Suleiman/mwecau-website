<script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.0/"
        }
    }
</script>

<script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.0/"
        }
    }
</script>

<script type="module">
    import {
        ClassicEditor,
        Essentials,
        Paragraph,
        Bold,
        Italic,
        Font,
        List,
        Alignment,
        Link,
        Indent
    } from 'ckeditor5';

    ClassicEditor
        .create(document.querySelector('#editor'), {
            plugins: [
                Essentials, Paragraph, Bold, Italic, Font, List, Alignment, Link, Indent
            ],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic', '|',
                'fontFamily', 'alignment:left', 'alignment:center', 'alignment:right', 'alignment:justify', '|',
                'bulletedList', 'numberedList', '|', 'link', '|',
                'outdent', 'indent'
            ]
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
</script>

<!-- A friendly reminder to run on a server, remove this during the integration. -->
<script>
    window.onload = function() {
        if (window.location.protocol === 'file:') {
            alert('This sample requires an HTTP server. Please serve this file with a web server.');
        }
    };
</script>
