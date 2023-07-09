# Criando projeto Laravel 10 + Vue 3 (Passo a Passo)

### Instalando o Laravel mais recente

```
 composer create-project laravel/laravel nameProjectExample 
 ```
<br>

### Ou vc pode instalar dessa forma

```
composer global require laravel/installer
``` 
 
```
laravel new nameProjectExample
``` 
<br>

### Depois vc vai entrar na pasta de seu projeto
Você deve colocar o nome da pasta escolhida

```
cd nameProjectExample
```
<br>

## Agora vamos para o próximo passo
Executamos o seguinte:
```
npm install
```
<br>

## Instalando o Vue.js
Agora vamos instalar o vue mais recente
```
npm install vue@next
```

Depois do Vue.js instalado vamos instalar também o Vue Router:

```
npm install vue-router@4
```
<br>
E por último instalamos o plugin do vitejs

```
npm install @vitejs/plugin-vue
```

<br>

PRONTO! <br>
Agora que fizemos todas as intalações, vamos para para o nosso editor fazer as configurações, e logo veremos funcionar o Laravel e o Vue ao mesmo tempo.

<br><br>

## CONFIGURANDO NOSSO PROJETO

No arquivo vite.config.js, vamos deixar da seguinte forma:

```
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),


    ],
});
```
<br>
O arquivo vite.config.js está localizado no caminho raiz do projeto:<br>
{ nameProjectExample } / vite.config.js
<br>
<br>

### Agora vamos criar nossas pastas e aquivos.vue

Todas as pastas e arquivos serão criados dentro do diretorio:
``` 
{ nameProjectExample } / resources/js
``` 
<br>

vamos criar a pasta *```view```* e a pasta *```components```*
<br>

Agora na dentro da pasta *```resources/js/view```* vamos criar a pasta *```pages```* e a pasta *```errors```*

> Depois das pastas  criadas, vamos aos arquivos, (Apenas como exemplo para testar os códigos).

na pasta ```resources/js/view/pages``` vamos criar os aquivos:
<br>

```
login.vue
home.vue
cadastro.vue
```
Na pasta ```resources/js/view/errors``` vamos criar o arquivo:

```
404.vue
```
<br>

Agora na pasta ```components``` vamos criar o arquivo: 

```
menudir.vue
```
## **#Aviso**

Todos os arquivos ```.vue``` precisam ter essa estrutura:

```
<template>
    <div>
        <h1>Conteudo do Arquivo</h1>
    </div>
</template>

<script>
    /* Script */
</script>

<style scoped>
    /* css */
</style>
```
se não tiver a TAG ```template``` vai dar erro no vue.js, e não irar funcionar.

## Configurando nosso app.js
Agora que criamos nosso diretório vamos terminar de fazer nossas configurações e finalmente começar a desenvolver nossa aplicação com o laravel e o vue.
<br>
<br>

No diretório ```resources/js/app.js``` deve ficar assim:

> Já está sendo inportado o vue.js e o vue router

>Observe que nossas configurações de roteamento e componentes estão acontecendo aqui dentro

```
import './bootstrap';

// importando o vue.js
import { createApp } from 'vue/dist/vue.esm-bundler';

// importando o vue router
import { createRouter, createWebHistory } from 'vue-router/dist/vue-router.esm-bundler.js';

// Importar componentes (menu para o roteamento)
import menudir from "./components/menudir.vue";

// importar paginas do router (Páginas de exemplo)
import login from "./view/pages/login.vue";
import home from "./view/pages/home.vue";
import cadastro from "./view/pages/cadastro.vue";
import NotFound from './view/errors/404.vue';

// Criar instância do roteamento
const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: home },
        { path: '/login', component: login },
        { path: '/cadastro', component: cadastro },

        // roteamento para quando a pagina não foi encontrada:
        { path: '/:catchAll(.*)', component: NotFound },
    ],
});

// Criar instância do aplicativo
const app = createApp({});

// Registrar os componentes
app.component('menudir', menudir); // <menudir />

// Usar o roteamento
app.use(router);

// Montar o aplicativo
app.mount("#app");
```

No arquivo: <br>  ```resources/js/view/pages/components/menudir.vue```
 vamos fazer assim:

 ```
 <template>
    <div>
        <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" ><router-link to="/">home</router-link></a>
                </li>
                <li class="nav-item">
                <a class="nav-link"><router-link to="/login">login</router-link></a>
                </li>
                <li class="nav-item">
                <a class="nav-link "><router-link to="/cadastro">cadastro</router-link></a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
       <router-view></router-view>
    </div>
</template>
 ```
não esqueça de usar o **CDN** abaixo entre as tags  ```<head></head> ``` no arquivo: index.blade.php

  ```
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  ```

### Vamos voltar agora para o Laravel
Na página index.blade.php, fica assim:

 ```
 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vue + laravel</title>
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <menudir /> <!-- Ref: app.component('menudir', menudir); -->
    </div>
</body>
</html>
 ```
 <br>

E por utimo vamos configurar nossa Rota do laravel para enviar as solicitaçõs para o vue fazer o roteamento das páginas:
<br>

Vamos editar o aquivo:  ``` resources/routes/web.php ```
<br>

O PHP funciona de cima para baixa, então qualquer rota a cima do 
``` /{any} ``` vai execultar primeiro.

```
use Illuminate\Support\Facades\Route;

// outras rotas independentes
Route::get('/test', function () {
    return view('teste');
});


// sempre deixar a rota por último
    // onde a mágica acontece
    // ele vai mandar todas as url para o vue
Route::get('/{any}', function () {
    return view('index');
})->where('any', '^(?!api).*$');

```