</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required placeholder="Digite seu e-mail">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required placeholder="Digite sua senha">
        <button type="submit">Entrar</button>
     </form>
</div>
</body>
</html>

<style>
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
body{
    background-color: #f4f6f9;
    color: #333;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.container{
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}
.container h2{
    margin-bottom: 20px;
    text-align: center;
    color: #000000;
}

form{
    display: flex;
    flex-direction: column;
    gap: 12px;
}
label{
    font-weight: bold;
    color: #4a75b3;
    font-size: 14px;
}
input, button{
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}
button{
    background-color: #2563eb;
    color: #fff;
    font-weight: bold;
    border: none;
    cursor: pointer;
    transition: 0.3s;
    margin-top: 5px;
}
button:hover{
    background-color: #2d54c2;
}
</style>
