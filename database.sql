CREATE TABLE avulsas ( 
    id INT NOT NULL AUTO_INCREMENT ,
    nome_cliente VARCHAR(200) NULL ,
    data_entrega DATE NULL , 
    nome_recebedor VARCHAR(200) NULL , 
    nota_fiscal VARCHAR(200) NULL , 
    conhecimento_aereo VARCHAR(200) NULL , 
    conhecimento_rodoviario VARCHAR(200) NULL , 
    peso FLOAT, 
    qtd_volume VARCHAR(200) NULL , 
    valor_a_receber FLOAT, 
    valor_pago FLOAT, 
    cidade VARCHAR(200) NULL , 
    estado VARCHAR(2) NULL , 
    PRIMARY KEY (id (11))
) ENGINE = MyISAM;