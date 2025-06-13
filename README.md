# Sistema de Gerenciamento de Artigos

Sistema para gerenciar artigos (ex.: blog, catálogo de produtos), permitindo a inclusão, edição, exclusão e listagem de artigos.

![Tela de listagem](https://drive.google.com/uc?export=view&id=12zBA1mMChaxms__DMetZkJo5ePL8dC-V)


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

### No Windows PowerShell:

    copy .env.example .env


3 - Crie o banco de dados no MySQL (caso ainda não exista):

Entre no MySQL no terminal:

    mysql -u root -p
    
E rode o comando para criar o banco:

    CREATE DATABASE nome_do_banco;
    EXIT
    
Substitua nome_do_banco pelo nome que você vai usar no .env.

4- Configure o arquivo .env com os dados do seu banco de dados:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome_do_banco
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha

5 - Gere a chave da aplicação:
    
    php artisan key:generate
    
6 - Rode as migrações para criar as tabelas no banco:

    php artisan migrate

7- Inicie o servidor de desenvolvimento:

    php artisan serve

## 🌐 Acesso
Frontend: http://localhost:8000

API: http://localhost:8000/api/articles


-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

### ⚡ Instalando e configurando o MySQL (caso ainda não tenha)

Se você ainda não tiver o MySQL instalado e configurado na sua máquina, siga os passos abaixo:

#### 1️⃣ Instalar o MySQL Server

    sudo apt install mysql-server -y
    sudo mysql_secure_installation

#### 2️⃣ Criar usuário e banco no MySQL
Entre no MySQL:
    
    sudo mysql -u root -p
    
E no console do MySQL, execute:

    -- Criar usuário para desenvolvimento
    CREATE USER 'dev'@'localhost' IDENTIFIED BY 'senha123';
    GRANT ALL PRIVILEGES ON *.* TO 'dev'@'localhost';
    FLUSH PRIVILEGES;
    
    -- Criar banco de dados
    CREATE DATABASE nome_do_banco;
    EXIT
#### 3️⃣ Configure o arquivo .env do projeto
No seu arquivo .env, ajuste os dados do banco:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome_do_banco
    DB_USERNAME=dev
    DB_PASSWORD=senha123

