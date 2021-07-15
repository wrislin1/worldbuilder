<template>
    <h1>Characters</h1>
    <hr/>
    <ul>
        <li v-for="character in characters">
            <span>{{character.name}}</span>
        </li>
    </ul>
</template>

<script>
export default {
    name: "index",
    props: ['characters'],
}
</script>

<style scoped>

</style>
