   <div id="page-content-wrapper">
  <div class="container-fluid">
    <h2>Sistema de Seleção de Monitores</h2>
    <hr>
    <div class="col-sm-12">
      <h4>Editar usuário @<?=$usuario[0]->login?>.</h4>
      Observação: preencha somente os campos que deseja alterar.<br/><br/>

      <form action="<?= base_url(); ?>usuarios/salvar_atualizacao" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="login" id="login" value="<?=$usuario[0]->login?>"/>

        <label class="mr-sm-2" for="inlineFormCustomSelect">Departamento</label>
        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="nome_dep" id="nome_dep" >
          <option selected value="">Selecione...</option>
          <option value="DACOM">DACOM</option>
          <option value="DAELE">DAELE</option>
          <option value="DAMEC">DAMEC</option>
          <option value="DAMAT">DAMAT</option>
          <option value="DACIN">DACIN</option>
        </select>

        <label class="mr-sm-2" for="inlineFormCustomSelect">Tipo</label>
        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="tipo" id="tipo" >
          <option selected value="">Selecione...</option>
          <option value="1">Coordenador</option>
          <option value="2">Chefe de departamento</option>
          <option value="3">Diretoria de graduação</option>
          <option value="4">DEPED</option>
        </select>

        <label class="mr-sm-2" for="inlineFormCustomSelect">Status</label>
        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="status" id="status">
          <option selected value="">Selecione...</option>
          <option value="Ativo">Ativo</option>
          <option value="Inativo">Inativo</option>
        </select><br/><br/>

        <button type="submit" class="btn btn-default">Submit</button>

      </form><br/><a href="<?= base_url(); ?>usuarios"><h5>Cancelar</h5></a>
    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
