<?php 
if(!defined('R4F5CC')){
    header('Location: /');
    die('ERRO: Pagina não encontrada');
}
//echo password_hash(12345, PASSWORD_DEFAULT);
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
if(isset($this->dados['form'])){
   $valores =$this->dados['form'];
}
?>
<h1>Area restrita </h1>
<form method="POST" action="">
    <label>Usuario</label>
    <input name="usuario" type="text" placeholder="Digite o Uusuario" value="<?php if(isset($valores['usuario'])){ echo $valores['usuario']; }?>"/><br><br>
    <label>Senha</label>
    <input name="senha" type="password" placeholder="Digite a Senha"/><br><br>
    <input name="sendLogin" type="submit" value="Entrar"/><br><br>
    
    <p>
        <a href="">Cadastrar</a>-
        <a href="">Esqueceu a senha?</a>
    </p>
       
    
    
</form>

  