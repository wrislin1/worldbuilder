<template>
    <h1>{{character.name}}</h1>
    <hr/>
    <span>{{character.bio}}</span>
</template>

<script>
export default {
    name: "show",
    props:['character'],
}
</script>

<style scoped>

</style>
