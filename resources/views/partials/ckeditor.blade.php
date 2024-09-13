 {{-- CKEDITOR LINKS --}}
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
        BlockQuote,
        Link,
        Image,
        ImageToolbar,
        ImageCaption,
        ImageStyle,
        Table,
        TableToolbar,
        CodeBlock,
        Highlight,
        FindAndReplace,
        SpecialCharacters,
        SpecialCharactersEssentials
    } from 'ckeditor5';

    ClassicEditor
        .create(document.querySelector('#editor'), {
            plugins: [
                Essentials, Paragraph, Bold, Italic, Font, List,
                Alignment, BlockQuote, Link, Image, ImageToolbar,
                ImageCaption, ImageStyle, Table, TableToolbar, CodeBlock,
                Highlight, FindAndReplace, SpecialCharacters, SpecialCharactersEssentials
            ],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                'alignment', 'blockQuote', 'link', 'imageUpload', 'insertTable', 'codeBlock', '|',
                'highlight', 'findAndReplace', 'specialCharacters', '|',
                'bulletedList', 'numberedList'
            ],
            image: {
                toolbar: ['imageTextAlternative', '|', 'imageStyle:full', 'imageStyle:side']
            },
            table: {
                contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
            }
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
</script>

    {{-- <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Paragraph,
            Bold,
            Italic,
            Font,
            bullets
        } from 'ckeditor5';
        ClassicEditor
            .create(document.querySelector('#editor'), {
                plugins: [Essentials, Paragraph, Bold, Italic, Font, bullets],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script> --}}
    <!-- A friendly reminder to run on a server, remove this during the integration. -->
    <script>
        window.onload = function() {
            if (window.location.protocol === 'file:') {
                alert('This sample requires an HTTP server. Please serve this file with a web server.');
            }
        };
    </script>
