<body>
    <div class="container">
    <h2>Bem-vindo ao Alucar!</h2>
    <div class="dashboard-container">
    <div class="dashboard-welcome">
        <h2>Painel Administrativo - Alucar</h2>
    </div>
    <div class="dashboard-grid">
        <a href="/Usuarios/Criar.php" class="dash-card">
            <h3>Usuários</h3>
            <p>Gerenciar acessos e cadastros.</p>
        </a>
        <a href="/Clientes/CriarCliente.php" class="dash-card">
            <h3>Clientes</h3>
            <p>Consultar e cadastrar clientes.</p>
        </a>
        <a href="/Carros/CriarCarro.php" class="dash-card">
            <h3>Carros</h3>
            <p>Gerenciar veículos disponíveis.</p>
        </a>
        <a href="/Alugueis/CriarAluguel.php" class="dash-card">
            <h3>Aluguéis</h3>
            <p>Gerenciar aluguéis, retiradas e devoluções.</p>
        </a>
    </div>
</div>

<style>
.dashboard-container{
    max-width: 900px;
    margin: 20px auto;
}
.dashboard-welcome{
    background: #fff;
    padding: 25px;
    border-radius: 8px;
    margin-bottom: 25px;
}
.dashboard-welcome h2{
    color: #1e293b;
    font-size: 24px;
    margin-bottom: 8px;
}
.dashboard-welcome p{
    color: #64748b;
    font-size: 15px;
}
.dashboard-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}
.dash-card{
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    text-decoration: none;
    color: inherit;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    transition: transform 0.2s;
    border-top: 4px solid #010307;
}
.dash-card:hover{
    box-shadow: 0 6px 12px rgba(0,0,0,0.08);
}
.dash-card h3{
    color: #1e293b;
    font-size: 18px;
    margin-bottom: 8px;
}
.dash-card p{
    color: #64748b;
    font-size: 13px;
    margin: 0;
}
</style>
</div>
</body>
</html>
<?php
require_once __DIR__ . '/style.php';