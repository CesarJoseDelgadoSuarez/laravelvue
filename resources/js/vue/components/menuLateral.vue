<template>
    <div class="min-w-[15%] border-r-4 border-e-gray-400">
        <img src="../../../img/almacen.jpeg" alt="Logo" id="LogoBL" class="mx-auto mt-8">
        <ul class="mt-10">
            <li class="border-t-2 border-gray-400 p-2"><router-link to="/dashboard" class="flex justify-center">
                    Dashboard
                    <svg class="ml-3" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z" />
                    </svg>
                </router-link></li>
            <li class="border-t-2 p-2 border-gray-400"><router-link to="/" class="flex justify-center">
                    Clientes
                    <svg class="ml-3 mt-1" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <path
                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                    </svg>
                </router-link></li>
            <li class="border-y-2 p-2 border-gray-400"><router-link to="/" class="flex justify-center">
                    Proveedores
                    <svg class="ml-3 mt-1" xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 640 512">
                        <path
                            d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                    </svg>
                </router-link></li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'barraLateral'
}
</script>

<style>
#LogoBL {
    max-width: 10rem;
}
</style>
