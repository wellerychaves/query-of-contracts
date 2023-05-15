Em um sistema de cadastro de contratos, você tem as seguintes tabelas (Tb) e campos:

========================

Tb_contrato

codigo

prazo

valor

data_inclusao

convenio_servico

---

Tb_convenio_servico

codigo

convenio

servico

---

Tb_convenio

codigo

convenio

verba

banco

---

Tb_banco

codigo

nome

========================

Considerando que quando um campo é utilizado para ligar uma tabela a outra, este campo terá como nome, o nome da segunda tabela.

Construa um script PHP que execute a consulta e liste uma relação contendo:

========================

nome do banco

verba

codigo do contrato

data de inclusao

valor

prazo

========================
