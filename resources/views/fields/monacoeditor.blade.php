@component('dashboard::partials.fields.group',get_defined_vars())
    <div class="monacoeditor-wrapper" data-controller="monacoeditor">
        <div id="{{$id}}" style="width:800px;height:600px;border:1px solid grey" >
        <textarea style="display:none;" @include('dashboard::partials.fields.attributes', ['attributes' => $attributes])>{{$attributes['value']}}</textarea></div>
    </div>
@endcomponent

@push('scripts')
    <script src="/orchids/monacoeditor/js/min/vs/loader.js" type="text/javascript"></script>
    <script>
        require.config({ paths: { 'vs': '/orchids/monacoeditor/js/min/vs' }});
        require(['vs/editor/editor.main'], function() {
            window.editor = monaco.editor.create(document.getElementById('{{$id}}'), {
                value: "{{ $attributes['value'] }} ", 
                language: 'javascript'
            });
        });
        
        function save() {
           var value = window.editor.getValue();
           console.log(value);
            $('#{{$id}} textarea').val(value);           
        }
        
        setInterval(function() {
            save();
        }, 2000);
        
        document.getElementById('{{$id}}').onclick = save;
    </script>
@endpush
