@push('stylesheets')
    <script src="/orchids/monacoeditor/js/min/vs/loader.js" type="text/javascript"></script>
@endpush
@component('dashboard::partials.fields.group',get_defined_vars())
    <div class="monacoeditor-wrapper" data-controller="monacoeditor">
        <div id="{{$id}}" style="height:600px;border:1px solid grey">
        </div>
        <textarea class="{{$id}}" style="display:none;" @include('dashboard::partials.fields.attributes', ['attributes' => $attributes])>{{$attributes['value']}}</textarea>
    </div>
@endcomponent

@push('scripts')
    <script>
        require.config({ paths: { 'vs': '/orchids/monacoeditor/js/min/vs' }});
        require(['vs/editor/editor.main'], function() {
            var jsCode = "{{json_encode($attributes['value'])}}";
            window.editor = monaco.editor.create(document.getElementById('{{$id}}'), {
                value: decodeHtml(jsCode), 
                language: "{{ $attributes['language'] }}",
            });
        });
        
        function decodeHtml(str)
        {
            var map =
            {
                '&amp;': '&',
                '&lt;': '<',
                '&gt;': '>',
                '&quot;': '"',
                '&#039;': "'"
            };
            str = str.replace(/&amp;|&lt;|&gt;|&quot;|&#039;/g, function(m) {return map[m];});
            if (str.charAt(0) === '"' && str.charAt(str.length -1) === '"')
            {
                str=str.substr(1,str.length -2);
            }
            return str;
        }
        
        function save() {
           var value = window.editor.getValue();
           console.log(value);
           $('textarea.{{$id}}').val(value);           
        }
        
        document.getElementById('{{$id}}').onclick = save;
        document.getElementById('{{$id}}').onkeyup  = save;
    </script>
@endpush
