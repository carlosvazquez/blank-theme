# Japi Theme
> Este es el tema utilizado en [japi] (https://japi.shop/).
>
> ** Para más detalles sobre el desarrollo del tema, lee nuestra [Documentación del tema] (https://github.com/Shoperti-Themes/japi) **.


### Instalando Node

Es indispensable contar con NodeJs instalado. Para saber si cuenta con él, vaya a su terminal y escriba <code>node -v</code> y podrá ver algo así <code>v6.9.1</code> si ya lo tiene instalado. En caso contrario vaya a la página de [Node] (https://nodejs.org/download/) 

1. Navegue hasta la raíz de este proyecto de tema descargado
2. Ejecute `npm install`.

Npm examinará [package.json] (package.json) e instalará automáticamente las dependencias locales necesarias que se encuentren allí.

** ¿Qué es `npm`? Npm significa [node packaged modules] (http://npmjs.org/) y es una forma de administrar dependencias de desarrollo a través de NodeJs.

## Comandos y funcionalidades

Existen 2 comandos para desarrollo y producción:

```
npm run start

npm run serve
```

```npm run start``` servirá para publicar tus archivos html, estilos y scripts en la carpeta **public** y así construir tu sitio sin funcionalidades de Twig. Incluye un servidor http para ver el sitio usando la ruta http://localhost:9000

```npm run start``` generará una carpeta 'theme' dentro de 'dist' que te servirá para probar tu plantilla en ambiente local, los archivos serán ```.twig``` 

Estas tareas toman el código fuente del tema y empaquetan en un zip para ser instalado.




## Estructura final

```
theme
├── 1.0.0
|   ├── assets
│   │   ├── app.js.twig
│   │   ├── apple-touch-icon-114.png
│   │   ├── apple-touch-icon-144.png
│   │   ├── blur-password.jpg
│   │   ├── favicon.ico
│   │   └── styles.css.twig
│   │   
│   ├── config
│   │   ├── data.json
│   │   └── schema.json
│   │
│   ├── layouts
│   │   └── layout.twig
│   │
│   ├── pages
│   │   └── customers
│   │   │   ├── account.twig
│   │   │   ├── activate.twig
│   │   │   ├── login.twig
│   │   │   ├── order.twig
│   │   │   ├── recover.twig
│   │   │   ├── register.twig
│   │   │   └── reset.twig
│   │   │
│   │   ├── blog.twig
│   │   ├── cart.twig
│   │   ├── category.twig
│   │   ├── collection.twig
│   │   ├── collections.twig
│   │   ├── error404.twig
│   │   ├── home.twig
│   │   ├── maintenance.twig
│   │   ├── page.contact.twig
│   │   ├── page.twig
│   │   ├── password.twig
│   │   ├── post.twig
│   │   ├── product.twig
│   │   ├── products.twig
│   │   └── search.twig
│   │
│   ├── partials
│   │   └── ...
│   │
│   ├── screeshots
│   │
│   ├── .editorconfig
│   ├── .gitignore
│   ├── findreplace.js
│   ├── LICENSE
│   ├── README.md
│   ├── removefiles.js
│   ├── theme.png
│   ├── webpack.config.js
│   └── webpack.production.config.js

```

## Copyright

&copy; Copyright Shoperti 2017 - Ver [TÉRMINOS Y CONDICIONES](https://www.shoperti.com/terminos-y-condiciones) para más detalles.