<div class="alucar-card">
    <div class="top">
        <h2>Lista de Aluguéis</h2>
    </div>
<table class="alucar-tabela">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Carro</th>
            <th>Início</th>
            <th>Término</th>
            <th>Valor Total</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
<?php if (!empty($alugueis)): ?>
<?php foreach ($alugueis as $a): ?>
        <tr>
            <td><?= $a['id'] ?></td>
            <td><?= $a['cliente'] ?></td>
            <td><?= $a['carro'] ?></td>
            <td><?= (new DateTime($a['data_inicio']))->format('d/m/Y') ?></td>
            <td><?= (new DateTime($a['data_fim']))->format('d/m/Y') ?></td>
            <td>R$ <?= number_format($a['valor_total'], 2, ',', '.') ?></td>
            <td>
                <a href="EditarAluguel.php?id=<?= $a['id'] ?>" class="acao editar">Editar</a>
                <a href="ExcluirAluguel.php?id=<?= $a['id'] ?>" class="acao excluir">Excluir</a>
            </td>
        </tr>
<?php endforeach; ?>

<?php else:?>
        <div class='cd' >Nenhum aluguel cadastrado ainda.</td>
        </tr>
        </div>
<?php endif; ?>

    </tbody>
    
</table>
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
    max-width: 900px;
}
.alucar-card h2{
    color: #1e293b;
    font-size: 22px;
    margin: 0;
}
.alucar-tabela{
    width: 100%;
    margin-top: 10px;
    text-align: left;
    border-collapse: collapse;
}
.alucar-tabela th, .alucar-tabela td{
    padding: 12px 15px;
    border-bottom: 1px solid #e2e8f0;
    font-size: 14px;
    color: #334155;
}
.alucar-tabela th{
    background-color: #f8fafc;
    color: #1e293b;
}
.acao{
    padding: 6px 12px;
    border-radius: 4px;
    font-size: 13px;
    font-weight: bold;
    display: inline-block;
}
.editar{
    text-decoration: none;
    background-color: #e2e8f0;
    color: #334155;
}
.editar:hover{
    background-color: #cbd5e1;
}
.excluir{
    background-color: #fee2e2;
    color: #dc2626;
    text-decoration: none;
}
.excluir:hover{
    background-color: #fecaca;
}
.cd{
    text-align: center;
    position:relative;
    top: 150px;
}
</style>