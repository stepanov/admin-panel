<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class = "list-unstyled">
                    <li v-for="q in questionnares.data" :key="q.id">
                        <div class="row pb-2">
                            <div class="col-md-2">
                                <img class="rounded-circle" :src="getAvatar(q.avatar)" width="60px" />
                            </div>
                            <div class="col-md-6">
                                <router-link :to="{name: 'userView', params: {id: q.id, avatar: q.avatar, name: q.name}}">{{ q.name }}</router-link>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                questionnares: []
            }
        },
        methods: {
            getAvatar(img) {
                return "/storage/images/" + img
            }
        },
        created() {
            this.axios
                .get(`${process.env.MIX_API_URL}/${process.env.MIX_API_QUESTIONNARES_URI}`)
                .then(response => {
                    this.questionnares = response.data
                    console.log('questionnares: ', this.questionnares.data)
                })
        }
    }
</script>
