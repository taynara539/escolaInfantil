@if(isset($convenio))
            {!! Form::model($convenio, ['route' => ['convenio.update', $convenio->id], 'method' => 'put']) !!}
        @else
            {!! Form::open(['route' => 'convenio.store']) !!}
        @endif
            <div class="row form-group">
                <div class="col-sm-12">
                    {!! Form::label('nome', 'Nome') !!}
                    {!! Form::input('text', 'nome', null, ['id' => 'nome', 'placeholder' => 'Nome do convênio', 'class' => 'form-control']) !!}
                </div>
            </div>

        <div class="row form-group">
            <div class="col-sm-6">
                {!! Form::label('cidade', 'Cidade') !!}
                {{ Form::select('id_cidade', $cidades, null, ['class' => 'form-control', 'id' => 'cidade']) }}
            </div>

            <div class="col-sm-6">
                {!! Form::label('rua', 'Rua') !!}
                {!! Form::input('text', 'rua', null, ['id' => 'rua', 'placeholder' => 'Rua', 'class' => 'form-control']) !!}
            </div>
        </div>

        <div class="row form-group">
            <div class="col-sm-6">
                {!! Form::label('numero', 'Número') !!}
                {!! Form::input('text', 'numero', null, ['id' => 'numero', 'placeholder' => 'Número', 'class' => 'form-control']) !!}
            </div>

            <div class="col-sm-6">
                {!! Form::label('sala', 'Sala') !!}
                {!! Form::input('text', 'sala', null, ['id' => 'sala', 'placeholder' => 'Sala', 'class' => 'form-control']) !!}
            </div>
        </div>

        <div class="row form-group">
            <div class="col-sm-12">
                {!! Form::label('fone', 'Telefone') !!}
            </div>

            <div class="fones">
                <div class="col-sm-3">
                    <input id="fone" type="text" name="fone[]" placeholder="Telefone" class="form-control fone">
                </div>
            </div>

            <a class="btn remover">Remover</a>
            <a class="btn adicionar">Adicionar</a>
        </div>

        <div class="row form-group">
            <div class="col-sm-6">
                {!! Form::label('servico', 'Tipo de serviço') !!}
                {!! Form::select('id_servico', [null => 'Selecione o tipo de serviço'] + $servicos, null, ['class' => 'form-control', 'id' => 'servico']) !!}
            </div>

            <div class="col-sm-6">
                {!! Form::label('especialidades', 'Tipo de especialidade') !!}
                <select name="id_especialidade" id="especialidades" class="form-control">
                    <option value="">Selecione o tipo de serviço</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-sm-12">
                {!! Form::label('descricao', 'Informações adicionais') !!}
                {!! Form::textarea('descricao', null, ['id' => 'descricao', 'placeholder' => 'Informações adicionais', 'class' => 'form-control']) !!}
            </div>
        </div>

        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

        <a href="{{route('convenio.index')}}" class="btn btn-primary">Voltar</a>
    {!! Form::close() !!}