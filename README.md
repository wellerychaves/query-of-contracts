Executando o Script PHP para Consulta de Contratos
Este é um script PHP que executa uma consulta em um banco de dados e lista uma relação de contratos com informações relacionadas.

Pré-requisitos
Servidor web (por exemplo, Apache) instalado e configurado
PHP instalado e configurado
Banco de dados MySQL instalado
Configuração do Banco de Dados
Crie um banco de dados no MySQL para armazenar as tabelas mencionadas no script. Anote o nome do banco de dados para uso posterior.
Execute o seguinte comando SQL no banco de dados para criar as tabelas necessárias:

```sql
  -- Tabela Tb_banco
  CREATE TABLE Tb_banco (
      codigo INT PRIMARY KEY,
      nome VARCHAR(255)
  );

  -- Tabela Tb_convenio
  CREATE TABLE Tb_convenio (
      codigo INT PRIMARY KEY,
      convenio VARCHAR(255),
      verba DECIMAL(10,2),
      banco INT,
      FOREIGN KEY (banco) REFERENCES Tb_banco(codigo)
  );

  -- Tabela Tb_convenio_servico
  CREATE TABLE Tb_convenio_servico (
      codigo INT PRIMARY KEY,
      convenio INT,
      servico VARCHAR(255),
      FOREIGN KEY (convenio) REFERENCES Tb_convenio(codigo)
  );

  -- Tabela Tb_contrato
  CREATE TABLE Tb_contrato (
      codigo INT PRIMARY KEY,
      prazo INT,
      valor DECIMAL(10,2),
      data_inclusao DATE,
      convenio_servico INT,
      FOREIGN KEY (convenio_servico) REFERENCES Tb_convenio_servico(codigo)
  );
```
Popule as tabelas com dados de exemplo, se necessário.
Configuração do Script PHP
Abra o arquivo PHP em um editor de texto.
Na seção "Estabelecer conexão com o banco de dados", atualize as seguintes variáveis de acordo com as suas configurações:
```php
  $servername = "localhost"; // nome do servidor MySQL
  $username = "seu_usuario"; // nome de usuário do MySQL
  $password = "sua_senha"; // senha do MySQL
  $dbname = "seu_banco_de_dados"; // nome do banco de dados criado anteriormente
```
Executando o Script PHP
Salve o arquivo PHP com a extensão .php (por exemplo, consulta_contratos.php).
Mova o arquivo PHP para a pasta raiz do seu servidor web (ou para uma subpasta, se preferir).
No seu navegador web, acesse o arquivo PHP através do URL correspondente ao seu servidor web e ao local onde você salvou o arquivo (por exemplo, http://localhost/consulta_contratos.php).
O script PHP será executado e você verá a relação de contratos com as informações relacionadas exibidas na página.

Certifique-se de que o servidor web, o PHP e o banco de dados estejam devidamente configurados para garantir o bom funcionamento do script.

Espero que isso ajude! Se você tiver mais dúvidas, fique à vontade para perguntar.
