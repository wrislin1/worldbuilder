<template>
    <div>
        <app-layout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Create Lore
                </h2>
            </template>
            <template #main>
                <form @submit.prevent="submit">
                    <label for="world_name">Name</label><br/>
                    <input class="form-control" id="world_name" v-model="form.title" /><br/>
                    <label for="world_description">Text:</label><br/>
                    <textarea class="form-control" id="world_description" v-model="form.text" ></textarea><br/>
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
            title: null,
            text: null,
        })

        function submit() {
            Inertia.post('/lores', form,{onSuccess: (response) => {console.log(response)}});
        }

        return { form, submit }
    }
}
</script>

<style scoped>

</style>
