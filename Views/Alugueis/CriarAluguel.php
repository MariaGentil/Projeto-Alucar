<div class="alucar-card">
    <div class="top">
        <h2>Cadastrar Novo Aluguel</h2>
    </div>
<form method="POST" class="alucar-form">
    <div class="form-group">
        <label>Cliente</label>
        <select name="cliente_id" required>
        <option value="">Selecione um cliente...</option>
<?php foreach ($clientes as $cliente): ?>
        <option value="<?= $cliente['id'] ?>"><?= $cliente['nome'] ?></option>
<?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Carro</label>
        <select name="carro_id" required>
            <option value="">Selecione um carro...</option>
<?php foreach ($carros as $carro): ?>
        <option value="<?= $carro['id'] ?>"><?= $carro['modelo'] ?> (Placa: <?= $carro['placa'] ?>)</option>
<?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Data de Início</label>
        <input type="date" name="data_inicio" required>
    </div>
    <div class="form-group">
        <label>Data de Término</label>
        <input type="date" name="data_fim" required>
    </div>
    <div class="form-group">
        <label>Valor Total (R$)</label>
        <input type="number" name="valor_total" placeholder="0.00" required>
    </div>

    <div class="form-botoes">
        <button type="submit" class="salvar">Salvar Aluguel</button>
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
    font-size: 15px;
}
.alucar-form input, .alucar-form select{
    padding: 10px 14px;
    border: 1px solid #96aecc;
    border-radius: 6px;
    font-size: 14px;
    transition: 0.2s;
}
.form-botoes {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    margin-top: 15px;
}
.salvar{
    background-color: #19a730;
    color:cornsilk ;
    padding: 12px;
    border-radius: 6px;
    font-weight: bold;
    flex: 1; 
    font-size: 15px;
    transition: 0.2s;
}
.salvar:hover{
    background-color: #057417;
}
.voltar{
    text-decoration: none;
    color: #64748b;
    font-weight: bold;
    font-size: 15px;
    transition: 0.2s;
}
.voltar:hover{
    color: #0f172a;
}

</style>