<template>
<h1>Worlds</h1>
 <hr/>
    <ol class="gradient-list">
        <li v-for="world in worlds">
            <span>{{world.name}}</span>
        </li>
    </ol>
</template>

<script>
export default {
    name: "index",
    props: ['worlds'],
}
</script>

<style scoped>

</style>
