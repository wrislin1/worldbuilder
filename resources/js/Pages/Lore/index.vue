<template>
    <h1>Lore</h1>
    <hr/>
    <ul>
        <li v-for="lore in lores">
            <span>{{lore.title}}</span>
        </li>
    </ul>
</template>

<script>
export default {
    name: "index",
    props: ['lores'],
}
</script>

<style scoped>

</style>
