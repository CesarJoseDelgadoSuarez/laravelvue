<template>
    <barraLateral ></barraLateral>
    <router-view class="flex-1"></router-view>
</template>

<script setup>
import barraLateral from './components/menuLateral.vue'

</script>
<style>

#mainContent{
    flex-grow: 1;
}
body{
    min-width: 100%;
    min-height: 100%;
}
</style>
