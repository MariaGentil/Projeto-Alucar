<div class="alucar-card">
    <h2>Cadastrar Novo Carro</h2>

<?php if (!empty($erro)): ?>
    <div class="msg-erro">
    <?= $erro ?>
    </div>
<?php endif; ?>
    <form action="" method="POST" class="alucar-form">
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" required placeholder="Ex: Dolphin, Hilux..">
        </div>
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" name="marca" required placeholder="Ex: Toyota, BYD..">
        </div>
        <div class="form-group">
            <label for="cor">Cor:</label>
            <input type="text" name="cor" required placeholder="Prata, Preto, Branco..">
        </div>
        <div class="form-group">
            <label for="placa">Placa:</label>
            <input type="text" name="placa" required placeholder="ABC-1D2-3">
        </div>
        <div class="acoes-form">
            <button type="submit" class="salvar">Salvar Carro</button>
            <a href="/dashboard.php" class="voltar">Voltar</a>
        </div>
    </form>
</div>

<style>
.alucar-card{
    background: #fff;
    padding: 25px;
    border-radius: 8px;
    max-width: 500px;
    margin: 30px auto;
}
.alucar-card h2{
    margin-bottom: 20px;
    color: #1e293b;
    font-size: 22px;
}
.alucar-form .form-group{
    margin-bottom: 18px;
    display: flex;
    flex-direction: column;
    gap: 6px;
}
.alucar-form label{
    font-weight: 600;
    color: #334155;
    font-size: 14px;
}
.alucar-form input{
    padding: 10px 14px;
    border: 1px solid #96aecc;
    border-radius: 6px;
    font-size: 14px;
    transition: 0.2s;
}
.acoes-form {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    margin-top: 15px;
}
.salvar{
    background-color: #56beb1;
    color:cornsilk ;
    padding: 12px;
    border-radius: 6px;
    font-weight: bold;
    flex: 1; 
    font-size: 15px;
    transition: 0.2s;
}
.salvar:hover{
    background-color: #47a094;
}
.voltar{
    text-decoration: none;
    color: #64748b;
    font-weight: bold;
    font-size: 14px;
    transition: 0.2s;
}
.voltar:hover{
    color: #0f172a;
}
.msg-erro {
    background-color: #fee2e2; 
    color: #dc2626; 
    padding: 12px;
    border-radius: 6px; 
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 15px;
}
</style>