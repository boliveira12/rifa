<div class="card-body">
    <div class="form-group row">

        <div class="col-sm-4">
        {!! Form::label('name', 'Nome', ['class' => 'col-md-6 control-label']) !!}
            {!! Form::text('name',null,['class' => 'form-control input-jqv', 'id' => 'name', 'autocomplete' =>
            'username' ]) !!}
        </div>
        @error('name')
        <span class="invalid-feedback d-block"> {{ $message }} </span>
        @enderror
        
        <div class="col-sm-4">
        {!! Form::label('descricao', 'Descrição', ['class' => 'col-sm-12 control-label']) !!}
            {!! Form::text('descricao',null,['class' => 'form-control input-jqv', 'id' => 'name']) !!}
        </div>
        @error('name')
        <span class="invalid-feedback d-block"> {{ $message }} </span>
        @enderror

        <div class="col-sm-4">
        {!! Form::label('valor', 'Valor', ['class' => 'col-sm-12 control-label']) !!}
            {!! Form::number('valor',null,['class' => 'form-control input-jqv', 'id' => 'valor']) !!}
        </div>
        @error('valor')
        <span class="invalid-feedback d-block"> {{ $message }} </span>
        @enderror
        
        <div class=" col-sm-12 my-2">
        {!! Form::label('quantidade', 'Quantidade', ['class' => 'col-sm-12 control-label']) !!}
            {!! Form::textarea('content',null,['class' => 'form-control input-jqv', 'id' => 'password', 'autocomplete' =>
            'username']) !!}
            @error('content')
            <span class="invalid-feedback d-block"> {{ $message }} </span>
            @enderror
        </div>
        

        <div class="col-sm-12 row">
        {!! Form::label('image', 'Imagem', ['class' => 'pt-4 col-sm-12 control-label']) !!}
            <div class="col-sm-6">
                <input name="image" type='file' class="form-control input-jqv" onchange="readURL(this);" />
            </div>
            <div class="col-sm-6">
                <img id="image" width="auto" height="200" src="{{ $post ? str_replace('/public', '', $post->getFirstMediaUrl()) : '#' }}" alt="">
            </div>
        </div>
        @error('name')
        <span class="invalid-feedback d-block"> {{ $message }} </span>
        @enderror
    </div>


</div>

<div class="card-footer">
    <div class="box-footer">
        <a class="btn btn-danger float-right"
            href="{{ (auth()->user()->can('index', [App\User::class, auth()->user()])) ? route('panel.post.index') : route('panel.post') }}">Voltar</a> {!!
        Form::submit('Salvar',['class'
        => 'btn btn-primary pull-left']) !!}
    </div>

</div>
@section('css')
<link rel="stylesheet" href="/panel/js/plugins/jquery-ui/jquery-ui.min.css">
@endsection
@section('js_form')
<script type="text/javascript" src="/panel/js/via-cep.js"></script>
<script type="text/javascript" src="/panel/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {
            // $("#form_id").validate();
            $('.datepicker').datepicker({
                dateFormat: 'dd/mm/yy',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                nextText: 'Próximo',
                prevText: 'Anterior'
            });
        });
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .width('auto')
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
@stop
