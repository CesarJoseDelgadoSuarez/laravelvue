<template>
    <div class="dashBody h-100">
        <div id="cabeceraDashboard" class="row-span-1 flex items-center justify-start border-b-4">
            <h1 class="text-xl font-sans ms-3">Panel de Control</h1>
        </div>
        <div class="grid grid-cols-4 gap-4 max-h-80 p-4">
            <dashboardItem v-for="item in dashboardItems" :icon=item.icon :name=item.name :bgColor=item.bgColor
                :link=item.link></dashboardItem>
        </div>


    </div>
</template>

<script>
import dashboardItem from '../components/dashboardItem.vue';
export default {
    components: {
        dashboardItem,
    },
    data() {
        return {
            dashboardItems: [
                {
                    icon: "cubes",
                    name: "Existencias",
                    bgColor: "red",
                    link: "/items"
                },
                {
                    icon: "cubes",
                    name: "Existencias",
                    bgColor: "sky",
                    link: "/items"
                },
                {
                    icon: "cubes",
                    name: "Existencias",
                    bgColor: "orange",
                    link: "/items"
                },
                {
                    icon: "cubes",
                    name: "Existencias",
                    bgColor: "lime",
                    link: "/items"
                },
                {
                    icon: "cubes",
                    name: "Existencias",
                    bgColor: "emerald",
                    link: "/items"
                },
                {
                    icon: "cubes",
                    name: "Existencias",
                    bgColor: "cyan",
                    link: "/items"
                },
            ]
        }
    },
}
</script>

<style scoped>
.dashBody {
    display: grid;
    grid-template-rows: 1fr 10fr;
}
</style>
