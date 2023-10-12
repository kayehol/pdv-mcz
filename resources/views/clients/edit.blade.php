<html>

<body>
  <form method="POST" action="{{ '/clients/patch/'.$client->id }}">
    @csrf
    <label for="name">Nome</label>
    <input id="name" type="text" name="name" value="{{ $client->nome }}">
    <label for="email">E-mail</label>
    <input id="email" type="text" name="email" value="{{ $client->email }}">
    <label for="phone">Telefone</label>
    <input id="phone" type="text" name="phone" value="{{ $client->fone }}">
    <label for="address">Endereço</label>
    <input id="address" type="text" name="address" value="{{ $client->endereco }}">
    <label for="cep">CEP</label>
    <input id="cep" type="text" name="cep" value="{{ $client->cep }}">
    <label for="city">Cidade</label>
    <input id="city" type="text" name="city" value="{{ $client->cidade }}">
    <label for="state">Estado</label>
    <input id="state" type="text" name="state" value="{{ $client->estado }}">
    <label for="cnpj">CPNJ</label>
    <input id="cnpj" type="text" name="cnpj" value="{{ $client->cnpj }}">
    <label for="cpf">CPF</label>
    <input id="cpf" type="text" name="cpf" value="{{ $client->cpf }}">
    <input type="submit" value="Enviar">
  </form>
</body>

</html>
