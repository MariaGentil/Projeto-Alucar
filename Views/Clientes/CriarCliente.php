<div class="alucar-card">
    <h2>Cadastrar Novo Cliente</h2>

<?php if (!empty($erro)): ?>
    <div class="erro">
    <?= $erro ?>
    </div>
<?php endif; ?>
    <form action="" method="POST" class="alucar-form">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required placeholder="Nome completo">
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" required placeholder="seu@email.com">
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" required placeholder="000.000.000-00">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" required placeholder="(00) 00000-0000">
        </div>
        <div class="acoes-form">
            <button type="submit" class="salvar">Salvar Cliente</button>
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
    background-color: #500383;
    color:aliceblue;
    padding: 12px;
    border-radius: 6px;
    font-weight: bold;
    flex: 1; 
    font-size: 15px;
    transition: 0.2s;
}
.salvar:hover{
    background-color: #880dec;
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
.erro {
    background-color: #fee2e2; 
    color: #dc2626; 
    padding: 12px;
    border-radius: 6px; 
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 15px;
}
</style>