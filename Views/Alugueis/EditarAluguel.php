<div class="alucar-card">
    <div class="top">
        <h2>Editar Aluguel</h2>
    </div>

<form method="POST" class="alucar-form">
    <div class="form-group">
        <label>Cliente</label>
        <select name="cliente_id" required>
                <option value="">Selecione um cliente...</option>
                <?php foreach ($clientes as $c): ?>
                <option value="<?= $c['id'] ?>" <?= ($aluguel['cliente_id'] == $c['id']) ? 'selected' : '' ?>>
                <?= $c['nome'] ?>
                </option>
                <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Carro</label>
        <select name="carro_id" required>
                <option value="">Selecione um carro...</option>
                <?php foreach ($carros as $ca): ?>
                <option value="<?= $ca['id'] ?>" <?= ($aluguel['carro_id'] == $ca['id']) ? 'selected' : '' ?>>
                    <?= $ca['modelo'] ?> (Placa: <?= $ca['placa'] ?>)
                </option>
                <?php endforeach; ?>
        </select>
    </div>

        <div class="form-group">
            <label>Data de Início</label>
            <input type="date" name="data_inicio" value="<?= $aluguel['data_inicio'] ?>" required>
        </div>

        <div class="form-group">
            <label>Data de Término</label>
            <input type="date" name="data_fim" value="<?= $aluguel['data_fim'] ?>" required>
        </div>

        <div class="form-group">
            <label>Valor Total (R$)</label>
            <input type="number" step="0.01" name="valor_total" value="<?= $aluguel['valor_total'] ?>" placeholder="0.00" required>
        </div>

        <div class="form-botoes">
            <button type="submit" class="salvar">Salvar Alterações</button>
            <a href="index.php" class="cancelar">Cancelar</a>
        </div>
</form>
</div>

<?php if (!empty($erro)): ?>
    <div class="erro">
    <?= $erro ?>
    </div>
<?php endif; ?>
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
.form-group input,
.form-group select{
    width: 100%;
    padding: 10px;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    font-size: 14px;
    box-sizing: border-box;
    background-color: #fff;
}
.form-botoes{
    display: flex;
    gap: 10px;
    margin-top: 10px;
}
.salvar{
    background-color: #19a730;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    font-weight: bold;
    font-size: 14px;
}
.salvar:hover{
    background-color: #057417;
}
.cancelar{
    background-color: #e2e8f0;
    color: #334155;
    padding: 10px 20px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
    align-items: center;
}
.cancelar:hover{
    background-color: #cbd5e1;
}
.erro{
    color: red;
    font-weight: bold;
}
</style>