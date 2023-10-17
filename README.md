
# API de Gerenciamento de Campeonato de Futsal

Esta é uma API desenvolvida em Laravel para gerenciar um campeonato de futsal. Ela oferece recursos para cadastrar, editar e listar jogadores, times, partidas, classificação dos times no campeonato e autenticação na API.

## Requisitos da API

A API oferece os seguintes recursos:

1. **Jogadores**
   - Cadastrar, editar e listar jogadores
   - Campos: Nome, Número da camiseta

2. **Times**
   - Cadastrar, editar e listar times
   - Adicionar ou excluir jogadores do time
   - Campos: Nome do time

3. **Partidas**
   - Cadastrar e editar as partidas
   - Campos: Data, Horário início, Horário término, Times, Placar

4. **Classificação dos Times**
   - Listar a classificação dos times no campeonato
   - Campos: Time, Pontos, Quantidade de gols

5. **Autenticação na API**

## Ferramentas Utilizadas

- Laravel
- PHP
- MySQL

## Configuração e Uso

1. Clone este repositório em sua máquina:

   ```
   git clone https://github.com/xIgorLisboa/Next/)
   cd seu-repositorio
   ```

2. Instale as dependências do projeto:

   ```
   composer install
   ```

3. Crie um arquivo `.env` a partir do arquivo `.env.example` e configure as variáveis de ambiente, incluindo a configuração do banco de dados.

4. Gere uma chave de aplicativo:

   ```
   php artisan key:generate
   ```

5. Execute as migrações do banco de dados para criar as tabelas:

   ```
   php artisan migrate
   ```

6. Inicie o servidor de desenvolvimento:

   ```
   php artisan serve
   ```

A API estará disponível em `http://localhost:8000`.

## Rotas da API

- `localhost:8000/jogadores/novo`: Rotas para cadastrar jogadores.
- `localhost:8000/jogadores/ver/(id)`: Rota para consultar jogadores.
- `localhost:8000/jogadores/editar/(id)`: Rota para editar jogadores.
- `localhost:8000/jogadores/excluir/(id)`: Rota para excluir jogadores.
- `localhost:8000/times/novo`: Rotas para cadastrar times.
- `localhost:8000/times/ver/(id)`: Rota para consultar times.
- `localhost:8000/times/editar/(id)`: Rota para editar times.
- `localhost:8000/times/excluir/(id)`: Rota para excluir times.
- `localhost:8000/partidas/novo`: Rotas para cadastrar partidas.
- `localhost:8000/partidas/ver/(id)`: Rota para consultar partidas.
- `localhost:8000/partidas/editar/(id)`: Rota para editar partidas.
- `localhost:8000/partidas/excluir/(id)`: Rota para excluir partidas.

## Autenticação

A autenticação na API pode ser implementada usando o Laravel Passport. Consulte a seção "Autentique sua API" para obter mais informações sobre como autenticar as solicitações.

## Exemplos de Solicitações

Você pode usar ferramentas como o Postman ou o Insomnia para testar a API. Consulte a seção "Como Testar no Insomnia" para obter instruções sobre como testar as rotas da API.

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir problemas ou enviar solicitações pull.
