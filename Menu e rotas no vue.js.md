# Como usar as Rotas no Vue.js com link active

No menu.vue
```
<template>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <router-link to="/" class="nav-link" active-class="active">home</router-link>
      </li>
      <li class="nav-item">
        <router-link to="/notificados" class="nav-link" active-class="active">page 1</router-link>
      </li>
      <li class="nav-item">
        <router-link to="/faltando-doses" class="nav-link" active-class="active">page 2</router-link>
      </li>
      <li class="nav-item">
        <router-link to="/sem-doses" class="nav-link" active-class="active">page 2</router-link>
      </li>
    </ul>
  </template>
  
```

E dentro do arquivo rotas.js

```

// importar paginas do router 
import home from "./view/pages/home.vue";
import page1 from "./view/pages/page-1.vue";
import page2 from "./view/pages/page-2.vue";
import page3 from "./view/pages/page-3.vue";
import NotFound from './view/errors/404.vue';

// Criar instância do roteamento
const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: home },
        { path: '/page1', component: page1 },
        { path: '/page2', component: page2 },
        { path: '/page3', component: page3 },

        // roteamento para quando a pagina não foi encontrada:
        { path: '/:catchAll(.*)', component: NotFound },
    ],
});
```
