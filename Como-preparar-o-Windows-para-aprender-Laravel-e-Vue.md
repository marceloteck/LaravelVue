<div align="center">
  
[Voltar ao git principal](https://github.com/marceloteck/LaravelVue/tree/main) 

</div>


# Preparando o Windows para Desenvolver com Laravel e Vue.js


## # Instalação do Laragon no Windows

O Laragon é uma ferramenta poderosa para desenvolvimento PHP no Windows, permitindo que você configure facilmente um ambiente de desenvolvimento local. Neste tutorial, vamos mostrar como baixar e instalar o Laragon e também como instalar componentes adicionais para utilização do Laravel e Vue.js.

## Passo 1: Baixar o Laragon

1. Acesse o site oficial do Laragon: [https://laragon.org/](https://laragon.org/)

2. Clique no botão de download para obter o instalador mais recente do Laragon.

* Você pode baixar também a versão atual Jul/2023 [aqui](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe) (_Link direto_)

> O Laragon Full (64 bits) já vem instalado os componentes : <br> Apache 2.4, Nginx, MySQL 8, PHP 8, Redis, Memcached, Node.js 18, npm, git


## Passo 2: Instalar o Laragon

1. Execute o arquivo de instalação do Laragon que você baixou.
2. Siga as instruções do assistente de instalação para configurar o Laragon no seu sistema.
3. Selecione os componentes que deseja instalar, como PHP, Apache, MySQL e Node.js. Certifique-se de que as versões mais recentes estejam selecionadas para compatibilidade com o Laravel e Vue.js.
4. Escolha o diretório de instalação e conclua o processo de instalação.


## Passo 3: Configurar o Laragon para usar Laravel e Vue.js


### **Vamos ficar de olho na versão do php que vem instalado com o Laragon**
<br>

 A coluna ```Versão``` Corresponde a versão do laravel compativel com a versão do PHP que se encontra na coluna ```PHP(*)```. Então, antes de instalar o Laravel, verifique qual a versão é compativel com seu PHP.

_Essa tabela pode ser acessada na documentação do Laravel no item [**Release Notes**](https://laravel.com/docs/10.x/releases). Vai lá conferir!_


| Versão | PHP (*)    | Lançamento             | Correções de Bugs até | Correções de Segurança até |
|--------|------------|------------------------|-----------------------|----------------------------|
| 8      | 7.3 - 8.1  | 8 de setembro de 2020  | 26 de julho de 2022   | 24 de janeiro de 2023     |
| 9      | 8.0 - 8.2  | 8 de fevereiro de 2022 | 8 de agosto de 2023   | 6 de fevereiro de 2024    |
| 10     | 8.1 - 8.2  | 14 de fevereiro de 2023| 6 de agosto de 2024   | 4 de fevereiro de 2025    |
| 11     | 8.2        | Q1 2024                | 5 de agosto de 2025   | 3 de fevereiro de 2026    |


> Pra Facilitar nossa vida de programador, criei um git, para que possamos instalar o php compativel como laravel 10, diretamente pelo terminal.

Basta abrir o terminal na pasta ```{laragon}/bin/php``` e execultar o seguinte código.

>Dica para iniciantes: <br>
Clique na barra de enderço dentro da pasta "php" e digite "cmd", o terminal nativo do windows irar abrir, é só continuar seguindo os passos a seguir.

```
git clone https://github.com/marceloteck/php-8.1.10-Win32-vs16-x64.git
```
<br>

### # Baixar de forma Manual

Você pode baixar a versão do php mais recente, no site do [**PHP.net**](https://www.php.net/downloads) em Downloads.

Depois que tiver baixado o PHP mais recente, ou a sua escolha, vc deve extrair seu conteudo. 
Copie a pasta extraida. E vá até a  pasta que ```instalou o laragon```, e siga esse diretório: ```{laragon}/bin/php```. 
E cole ali a pasta baixada. Ex: ```php-8.1.10-Win32-vs16-x64```


![laragon/bin](https://raw.githubusercontent.com/marceloteck/LaravelVue/main/image/pasta-bin-laragon.PNG)

<br>

Depois que o php já estiver sido baixado e colado na pasta corretamente ```{laragon}/bin/php```. <br>

Você deve abrir o programa do laragon, e clicando no ```botão direito```, irar abrir o menu, clique em ```PHP```, depois em ```version```(...) e escolha o nome do arquivo que vc acabou de baixar. ex: ```php-8.1.10-Win32-vs16-x64```

![laragon/bin](https://raw.githubusercontent.com/marceloteck/LaravelVue/main/image/laragon-php.png)


Agora, o Laragon está pronto para ser usado com o Laravel e Vue.js!

Lembre-se de que você pode usar o Laragon para criar projetos Laravel facilmente. Basta clicar com o botão direito no ícone do Laragon na bandeja do sistema, selecionar **"Quick app"** e escolher a opção correspondente ao Laravel.

Pronto! Agora você tem o Laragon instalado em seu PC e está pronto para desenvolver aplicativos incríveis com Laravel e Vue.js. Divirta-se explorando todas as funcionalidades dessas poderosas ferramentas!
<br>

# # Bonus
Quer aprender como vincular o laravel com vue.js?
[clique aqui](https://github.com/marceloteck/Instalar-Laravel10-e-Vue3-Passo-a-Passo/tree/main) e acesso outro tutorial, onde explicamos como fazer essa configuração.
Bons estudos!