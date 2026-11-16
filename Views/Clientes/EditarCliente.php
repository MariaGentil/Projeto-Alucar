<div class="alucar-card">
    <div class="top">
        <h2>Editar Cliente</h2>
    </div>
    <form method="POST" class="alucar-form">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" value="<?= $clientes['nome'] ?? '' ?>" placeholder="Nome completo">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" value="<?= $clientes['email'] ?? '' ?>" placeholder="seu@email.com">
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input type="text" name="cpf" value="<?= $clientes['cpf'] ?? '' ?>" placeholder="000.000.000-00">
        </div>
        <div class="form-group">
            <label>Telefone<span class="sub-label"></span></label>
            <input type="text" name="telefone" value="<?= $clientes['telefone'] ?? '' ?>" placeholder="(00) 00000-0000">
        </div>
        <div class="form-botoes">
            <button type="submit" class="salvar">Salvar Alterações</button>
            <a href="index.php" class="cancelar">Cancelar</a>
        </div>
    </form>
</div>
<style>
.top{
    display: flex; 
    justify-content: space-between; 
    align-items: center; 
    margin-bottom: 20px;
}
.alucar-card{
    background: #fff;
    padding: 25px;
    border-radius: 8px;
    margin: 30px auto;
    max-width: 600px;
}
.alucar-card h2{
    color: #1e293b;
    font-size: 22px;
    margin: 0;
}
.alucar-form{
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.form-group label{
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #334155;
    font-size: 14px;
}
.sub-label{
    font-weight: normal;
    color: #64748b;
    font-size: 12px;
}
.form-group input{
    width: 100%;
    padding: 10px;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    font-size: 14px;
    box-sizing: border-box;
}
.form-botoes{
    display: flex;
    gap: 10px;
    margin-top: 10px;
}
.salvar{
    background-color: #500383;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    font-weight: bold;
    font-size: 14px;
    cursor: pointer;
}
.salvar:hover{
    background-color: #880dec;
}
.cancelar{
    background-color: #e2e8f0;
    color: #334155;
    padding: 10px 20px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
}
.cancelar:hover{
    background-color: #cbd5e1;
}
</style>