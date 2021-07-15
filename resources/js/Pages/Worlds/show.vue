<template>
<h1>{{world.name}}</h1>
<hr/>
<span>{{world.description}}</span>
</template>

<script>
export default {
    name: "show",
    props:['world'],
}
</script>

<style scoped>

</style>
