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

vamos criar a pasta *```view```* e a pasta ```components```
<br>

Agora na dentro da pasta ```resources/js/view``` vamos criar a pasta ```pages``` e a pasta ```errors```
