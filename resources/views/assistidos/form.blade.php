<div class="row no-gutters">
    <div class="col-md-4">
        <div class="form-group">
        <label class="form-control-label">Nome: <span class="tx-danger">*</span></label>
        <input class="form-control" type="text" name="nome" value="{{ $assistido->nome ?? '' }}" placeholder="Nome completo" required>
        </div>
    </div><!-- col-4 -->
    <div class="col-md-3 mg-t--1 mg-md-t-0">
        <div class="form-group mg-md-l--1">
        <label class="form-control-label">Telefone: <span class="tx-danger">*</span></label>
        <input class="form-control" id="phoneMask" type="text" name="telefone" value="{{ $assistido->telefone ?? '' }}" placeholder="Telefone" required>
        </div>
    </div><!-- col-4 -->
    <div class="col-md-2 mg-t--1 mg-md-t-0">
        <div class="form-group mg-md-l--1">
        <label class="form-control-label">Data de Nascimento: <span class="tx-danger">*</span></label>
        <input class="form-control" type="text" name="data_nascimento" id="dateMask" value="{{ Helper::data_br($assistido->data_nascimento ?? '') }}" placeholder="00/00/0000" required>
        </div>
    </div><!-- col-4 -->
    <div class="col-md-3">
        <div class="form-group mg-md-l--1 mg-t--1">
        <label class="form-control-label mg-b-0-force">Perfil: <span class="tx-danger">*</span></label>
        <select id="select2-a" class="form-control" name="tipo_pessoa_id" data-placeholder="Selecione o Perfil" required>
            <option label="Selecione"></option>
            @foreach ($tipos_pessoa as $tipo_pessoa)
            <option value="{{ $tipo_pessoa->id }}" @if(($assistido->tipo_pessoa_id ?? '') == $tipo_pessoa->id) selected @endif>{{ $tipo_pessoa->nome }}</option> 
            @endforeach
        </select>
        </div>
    </div><!-- col-4 -->
    <div class="col-md-4">
        <div class="form-group bd-t-0-force">
        <label class="form-control-label">E-mail: <span class="tx-danger">*</span></label>
        <input class="form-control" type="email" name="email" value="{{ $assistido->email ?? '' }}" placeholder="Email" required>
        </div>
    </div><!-- col-8 -->

    <div class="col-md-4">
        <div class="form-group bd-t-0-force">
        <label class="form-control-label">CPF: <span class="tx-danger">*</span></label>
        <input class="form-control" type="text" id="cpf" name="cpf" value="{{ $assistido->cpf ?? '' }}" placeholder="CPF">
        </div>
    </div><!-- col-8 -->
    
</div><!-- row -->