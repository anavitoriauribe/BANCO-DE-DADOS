# Aula - Relacionamento de tabelas

## Ideia principal
- **Clientes**: quem compra;
- **Pedidos**: aquilo que foi vendido.
- Cada pedido, guarda o *número do cliente* (id), não o seu nome.
- O **JOIN** junta duas tabelas para mostrar o nome do cliente do lado do seu pedido.

## Diagrama
```mermaid
erDiagram
    CLIENTES ||--o{PEDIDOS : faz

    CLIENTES{
        int id PK
        varchar nome 
    }

    PEDIDOS{
        int id PK
        varchar produto
        int id_cliente
        FK
    }
```
- `||--o{` -> 1 para muitos (one to many). O cliente poderá ter vários pedidos
- **PK**: O número que identifica cada cliente e cada pedido.
- **FK**: (Chave estrangeira) o número que irá apontar para a outra tabela

## Passo a passo 

1- Criamos a tebela clientes>

```sql
CREATE TABLE clientes(
    id SERIAL PRIMARY KEY,
    nome VARCHAR (100)
);
```

2- criamos a tabela de pedidos, criando a chave estrangeira>

```sql
CREATE TABLE pedidos(
    id SERIAL PRIMARY KEY,
    produto VARCHAR(100),
    id_cliente INT REFERENCES clientes(id)
);
```

3- inserimos os clientes (Daniel nao irá compar nada na cantina)>

```sql
INSERT INTO clientes (nome) VALUES ('Caio'),
('Carla'),
('Daniel')
```

4-Inserimos os produto para nossos clientes>
```sql
INSERT INTO pedidos(produto,id_cliente) VALUES 
('Pão de queijo',2),
('Café expresso',2),
('Almoço',1)
```

5- Comando INNER JOIN>

```sql
SELECT clientes.nome , pedidos.produto
FROM pedidos 
INNER JOIN clientes ON pedidos.id_cliente = clientes.id;
```
-O Daniel não aparece pois não possui pedido nenhum.

6- utilizando o comando LEFT JOIN>
```sql
SELECT clientes.nome,pedidos.produto
FROM clientes
LEFT JOIN pedidos ON clientes.id = pedidos.id_cliente;
```
o LEFT: mpostra tudo da tebela da esquerda (basicamente, é a tabela após o FROM).