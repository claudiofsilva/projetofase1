<form class="form-horizontal" role="form" method="post" action="index.php">
    <div class="form-group">
        <label for="inputEmail4" class="col-sm-2 control-label">Nome</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="inputEmail4" placeholder="Nome" name="nome">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail5" class="col-sm-2 control-label">Assunto</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail5" placeholder="Assunto" name="assunto">
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail5" class="col-sm-2 control-label">Mensagem</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="5" name="mensagem"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Enviar</button>
        </div>
    </div>
</form>