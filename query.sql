SELECT Tb_banco.nome AS nome_banco, 
       Tb_convenio.verba AS verba, 
       MIN(Tb_contrato.data_inclusao) AS data_inclusao_minima, 
       MAX(Tb_contrato.data_inclusao) AS data_inclusao_maxima, 
       SUM(Tb_contrato.valor) AS soma_valor
FROM Tb_banco
JOIN Tb_convenio ON Tb_convenio.banco = Tb_banco.codigo
JOIN Tb_convenio_servico ON Tb_convenio_servico.convenio = Tb_convenio.codigo
JOIN Tb_contrato ON Tb_contrato.convenio_servico = Tb_convenio_servico.codigo
GROUP BY nome_banco, verba
