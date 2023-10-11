<html>

<body>
    <form method="POST" action="{{url('client')}}">
        @csrf
        <label for="name">Nome</label>
        <input id="name" type="text" name="name">
        <label for="email">E-mail</label>
        <input id="email" type="text" name="email">
        <label for="phone">Telefone</label>
        <input id="phone" type="text" name="phone">
        <label for="address">Endereço</label>
        <input id="address" type="text" name="address">
        <label for="cep">CEP</label>
        <input id="cep" type="text" name="cep">
        <label for="city">Cidade</label>
        <input id="city" type="text" name="city">
        <label for="state">Estado</label>
        <input id="state" type="text" name="state">
        <label for="cnpj">CPNJ</label>
        <input id="cnpj" type="text" name="cnpj">
        <label for="cpf">CPF</label>
        <input id="cpf" type="text" name="cpf">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
