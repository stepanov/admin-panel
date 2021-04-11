<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <img class="rounded" :src="'/storage/images/{{ avatar }}'" />
            </div>
            <div class="col-md-8">
                <h2>{{ name }}</h2>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            avatar: String,
            name: String,
            id: String,
        }
    }
</script>
