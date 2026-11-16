<style>
body{
    background-color: #f4f6f9;
    color: #333;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    text-align: center;
}
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
.main-header{
    background-color: #1e293b;
    color: #fff;
    padding: 15px 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.main-header nav a{
    color: #fff;
    text-decoration: none;
    margin-left: 12px;
    transition: 0.3s;
}
.container{
    flex: 1;
    max-width: 900px;
    margin: 30px auto;
    width: 100%;
    padding: 25px;
    background: #fff;
    border-radius: 8px;
}
input, button, select {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
button{
    background-color: #2563eb;
    color: white;
    font-weight: bold;
    border: none;
    transition: 0.3s;
}
button:hover{
    background-color: #3759b9;
}
header nav a:hover{
    color: #cdf9ff; 
}
</style>