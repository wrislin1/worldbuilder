<template>
    <div>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create World
            </h2>
        </template>
        <template #main>
        <form @submit.prevent="submit">
            <label for="world_name">Name Your World:</label><br/>
            <input class="form-control" style="width: 25%" id="world_name" v-model="form.name" /><br/>
            <label for="world_description">Describe your world:</label><br/>
            <textarea class="form-control" id="world_description" v-model="form.description" ></textarea><br/>
            <button class="btn btn-primary" type="submit">Submit</button><br/>
        </form>
        </template>
    </app-layout>
    </div>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
export default {
    name: "create",
    components: {
        AppLayout,
    },
    setup () {
        const form = reactive({
            name: null,
            description: null,
        })

        function submit() {
            Inertia.post('/worlds', form,{onSuccess: (response) => {console.log(response)}});
        }

        return { form, submit }
    }
}
</script>

<style scoped>

</style>
