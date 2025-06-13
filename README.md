# Sistema de Gerenciamento de Artigos

Sistema para gerenciar artigos (ex.: blog, catálogo de produtos), permitindo a inclusão, edição, exclusão e listagem de artigos.

## 📌 Descrição do Projeto

Este é um sistema web desenvolvido em **PHP/Laravel** com banco de dados **MySQL**. O objetivo é oferecer um painel simples para o gerenciamento de artigos, podendo ser usado em blogs, catálogos ou qualquer sistema que necessite controlar registros de artigos.

## ⚙️ Funcionalidades

- ✅ Cadastro de novos artigos  
- ✅ Edição de artigos existentes  
- ✅ Exclusão de artigos  
- ✅ Listagem de artigos em formato de tabela  

## 🛠️ Ferramentas utilizadas

- **PHP** 
- **Laravel** 
- **MySQL** 
- **Composer** 
- **Bootstrap** 
- **Blade** 

## 🐧 Instalação no Linux Mint
### Pré-requisitos

No terminal, execute:
sudo apt update

sudo apt install php php-mysql php-xml php-curl php-zip composer mysql-server

## 📥 Baixar o projeto
git clone https://github.com/ArielleSousa/sistema-artigos.git

cd sistema-artigos

## 🚀 Como rodar o projeto
1 - Instale as dependências do projeto:

    composer install

2 - Copie o arquivo de configuração de ambiente:

    cp .env.example .env

3 -  Configure o arquivo .env com os dados do seu banco de dados:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome_do_banco
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha

4 - Gere a chave da aplicação:
    
    php artisan key:generate
    
5 - Rode as migrações para criar as tabelas no banco:

    php artisan migrate

6- Inicie o servidor de desenvolvimento:

    php artisan serve


