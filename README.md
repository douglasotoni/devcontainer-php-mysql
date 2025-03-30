# 🐳 Projeto PHP com DevContainer

Este projeto utiliza **Docker** e **DevContainers** para criar um ambiente de desenvolvimento consistente e isolado.

---

## ✅ Pré-requisitos

Antes de começar, certifique-se de ter o seguinte instalado em sua máquina:

- [Docker](https://www.docker.com/)  
- [Visual Studio Code](https://code.visualstudio.com/)
- A extensão **Remote - Containers** no VSCode (`ms-vscode-remote.remote-containers`)

---

## ▶️ Como iniciar o ambiente de desenvolvimento

1. **Abra o VSCode na raiz do projeto**
2. Pressione `F1` (ou `Ctrl+Shift+P`)
3. Digite e selecione:  
4. Aguarde a criação do ambiente (o VSCode vai montar o container e abrir o projeto dentro dele)
5. Para acessar o site, garanta que todos os containers estão rodando e que a porta 80 esteja liberada para uso
6. Digite http://localhost no brownser para abrir o site.
7. Foi incluido a configuração / alias de exemplo no nginx, para que o site também seja acessivel no endereço http://localhost/cep

---

## 🐞 Depuração PHP

Se quiser depurar o PHP com Xdebug:

1. Certifique-se de que a extensão **PHP Debug** (`felixfbecker.php-debug`) está instalada no VSCode
2. Coloque breakpoints no seu código
3. Vá na aba de **depuração** (`Ctrl+Shift+D`) e inicie o modo `Listen for Xdebug`
4. Acesse `http://localhost` no navegador — o VSCode vai parar nos breakpoints

---

## 🛢️ Acessando o MySQL

O container MySQL já estará em execução junto com o ambiente. Para acessá-lo:

### ▶️ Via terminal (dentro do container):

```bash
mysql -h mysql -u root -p
# Será solicitado a senha definida no docker-compose ou devcontainer
```

### Neste devcontainer foi incluido um database de exemplo, segue dados abaixo:
```bash
host: localhost #para uso externo ao container, acessivel com um MySQL Workbench por exemplo
host: mysql     #para uso dentro do container php, nos arquivos do site
porta: 3306
usuario: mysql
senha: mysql
banco: novo_cep
```
---

## 💡 Observações

- Toda a configuração do container está no arquivo `.devcontainer/devcontainer.json`
- O servidor web roda automaticamente assim que o container sobe
