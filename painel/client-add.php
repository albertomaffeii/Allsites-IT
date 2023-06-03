<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <title>Formulário de Cadastro de Clientes</title>
</head>
<body>
  <div class="container">
    <h1>Formulário de Cadastro de Clientes</h1>
    <form>
      <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="address" name="address" required>
      </div>
      <div class="mb-3">
        <label for="city" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="city" name="city" required>
      </div>
      <div class="mb-3">
        <label for="regiao" class="form-label">Região</label>
        <input type="text" class="form-control" id="regiao" name="regiao" required>
      </div>
      <div class="mb-3">
        <label for="state" class="form-label">Estado</label>
        <textarea class="form-control" id="state" name="state" required></textarea>
      </div>
      <div class="mb-3">
        <label for="tax_code" class="form-label">Código de Imposto</label>
        <input type="number" class="form-control" id="tax_code" name="tax_code">
      </div>
      <div class="mb-3">
        <label for="phone1" class="form-label">Telefone 1</label>
        <input type="tel" class="form-control" id="phone1" name="phone1" required>
      </div>
      <div class="mb-3">
        <label for="phone2" class="form-label">Telefone 2</label>
        <input type="tel" class="form-control" id="phone2" name="phone2" required>
      </div>
      <div class="mb-3">
        <label for="email1" class="form-label">E-mail 1</label>
        <input type="email" class="form-control" id="email1" name="email1" required>
      </div>
      <div class="mb-3">
        <label for="email2" class="form-label">E-mail 2</label>
        <input type="email" class="form-control" id="email2" name="email2" required>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
