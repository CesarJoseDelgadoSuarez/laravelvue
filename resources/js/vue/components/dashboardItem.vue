<template>
    <RouterLink class="grid grid-cols-2" :to=link>
        <div :class=bgIcon>
            <font-awesome-icon :icon="['fas', 'cubes']" size="2xl" />
        </div>
        <div :class=bgText>
            {{ name }}
        </div>
    </RouterLink>
</template>

<script>
import { RouterLink } from 'vue-router';

export default {
    props: {
        icon: {
            type: String,
            required: true
        },
        name: {
            type: String,
            required: true
        },
        link: {
            type: String,
            required: true
        },
        bgColor: {
            type: String,
            required: true
        },
    },
    data() {
        return {
            bgIcon: "flex justify-center items-center bg-",
            bgText: "flex justify-center items-center bg-"
        };
    },
    beforeCreate() {
        console.log(this.bgColor);
        this.bgIcon += this.bgColor.trim() + "-700";
        this.bgText += this.bgColor.trim() + "-600";
    },
    components: { RouterLink }
}
</script>

<style>
#dashboardItemContainer {
    display: grid;
    grid-template-columns: 2fr 3fr;
}
</style>
