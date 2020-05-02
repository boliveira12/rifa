<div class="card-body">
    <div class="form-group row">

        <div class="col-sm-4">
        {!! Form::label('titular', 'Titular', ['class' => 'col-md-6 control-label']) !!}
            {!! Form::text('titular',null,['class' => 'form-control input-jqv', 'id' => 'titular', 'autocomplete' =>
            'username' ]) !!}
        </div>
        @error('name')
        <span class="invalid-feedback d-block"> {{ $message }} </span>
        @enderror
        
        <div class="col-sm-4">
        {!! Form::label('cpf', 'CPF', ['class' => 'col-sm-12 control-label']) !!}
            {!! Form::text('cpf',null,['class' => 'form-control input-jqv', 'id' => 'name']) !!}
        </div>
        @error('name')
        <span class="invalid-feedback d-block"> {{ $message }} </span>
        @enderror

        <div class="col-sm-4">
        {!! Form::label('agencia', 'Agência', ['class' => 'col-sm-12 control-label']) !!}
            {!! Form::text('agencia',null,['class' => 'form-control input-jqv', 'id' => 'valor']) !!}
        </div>
        @error('agencia')
        <span class="invalid-feedback d-block"> {{ $message }} </span>
        @enderror
        
        <div class="col-sm-4">
        {!! Form::label('tipo', 'Tipo', ['class' => 'col-sm-12 control-label']) !!}
            {!! Form::text('tipo',null,['class' => 'form-control input-jqv', 'id' => 'valor']) !!}
        </div>
        @error('tipo')
        <span class="invalid-feedback d-block"> {{ $message }} </span>
        @enderror

        <div class=" col-sm-12 my-2">
        {!! Form::label('conta', 'Conta', ['class' => 'col-sm-12 control-label']) !!}
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
