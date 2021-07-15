<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <template #main>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
            <div class="card">
            <jet-nav-link :href="route('worlds.index')">
                <div class="card-body">
                    <img :src="img+'/earth.png'" style="width: 100px;height:100px;">
                </div>
            </jet-nav-link>
            </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" >
                        <jet-nav-link :href="route('characters.index')">
                            <div class="card-body">
                                <img :src="img+'/man.png'" style="width: 100px;height:100px;">
                            </div>
                        </jet-nav-link>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" >
                        <jet-nav-link :href="route('lores.index')">
                            <div class="card-body">
                                <img :src="img+'/scroll.png'" style="width: 100px;height:100px;">
                            </div>
                        </jet-nav-link>
                    </div>
                </div>
        </div>

        </div>
        </template>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'
    import JetNavLink from '@/Jetstream/NavLink'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'

    export default {
        props: ['img'],
        components: {
            AppLayout,
            Welcome,
            JetResponsiveNavLink,
            JetNavLink,
        },
        mounted() {
            console.log(this.img);
        }
    }
</script>
