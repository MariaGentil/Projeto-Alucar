<div class="alucar-card">
    <div class="top">
        <h2>Lista de Clientes</h2>
    </div>
<table class="alucar-tabela">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
<?php if (!empty($clientes)): ?>
<?php foreach ($clientes as $c): ?>
        <tr>
            <td><?= $c['id'] ?></td>
            <td><?= $c['nome'] ?></td>
            <td><?=($c['email']) ?></td>
            <td><?= $c['cpf'] ?></td>
            <td><?= $c['telefone'] ?></td>

            <td>
                <a href="EditarCliente.php?id=<?= $c['id'] ?>" class="acao editar">Editar</a>
                <a href="ExcluirCliente.php?id=<?= $c['id'] ?>" class="acao excluir">Excluir</a>
            </td>
        </tr>
<?php endforeach; ?>
<?php else: ?>
        <tr>
            <td>Nenhum cliente cadastrado ainda.</td>
        </tr>
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
    max-width: 800px;
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
</style>