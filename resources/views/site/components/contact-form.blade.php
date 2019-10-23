<form method="post" action="" id="ContactForm">
    <div class="form-group" style="width: 100%;">
        <input type="text" name="ContactFullName" id="ContactFullName" class="form-control required" placeholder="Nome" required>
    </div>
    <div class="form-group" style="width: 100%;">
        <input type="email" name="ContactEmail" id="ContactEmail" class="form-control required email" placeholder="Email" required>
    </div>
    <div class="form-group" style="width: 100%;">
        <input type="text" name="ContactNumber" id="ContactNumber" class="form-control" placeholder="Telefone" required>
    </div>
    <div class="form-group" style="width: 100%;">
        <textarea name="ContactDescription" id="ContactDescription" class="form-control" placeholder="Mensagem" required></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
</form>