<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 justify-content-center">
                <img class="rounded" :src="getAvatar(questionnare.avatar)" />
            </div>
            <div class="col-md-8">
                <h2>{{ questionnare.name }}</h2>
                <p>INFO</p>
                <dl>
                    <dt>Birth date</dt>
                    <dd>{{ questionnare.date_of_birth }}</dd>
                    <dt>Email</dt>
                    <dd>{{ questionnare.email }}</dd>
                    <dt>Phone</dt>
                    <dd>{{ questionnare.phone }}</dd>
                </dl>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-4">
                <button @click="approveQuestionnare(questionnare.id)" class="btn btn-success btn-lg btn-block"><i class="fas fa-check"></i> Accept</button>
                <button @click="rejectQuestionnare(questionnare.id)" class="btn btn-danger btn-lg btn-block"><i class="fas fa-times"></i>Reject</button>
                <button @click="deleteQuestionnare(questionnare.id)" class="btn btn-secondary btn-lg btn-block"><i class="fas fa-ban"></i>Delete</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                questionnare: {}
            }
        },
        methods: {
            getAvatar(img) {
                return "/storage/images/" + img
            },
            approveQuestionnare(id) {
                this.axios
                    .put(`${process.env.MIX_API_URL}/${process.env.MIX_API_QUESTIONNARES_URI}/${id}`, {
                        "action":"accepted"
                    })
                    .then(response => {
                        console.log('Approve response: ', response)
                        if (response.status === 200) {
                            this.$router.push({ path: '/users' })
                        }
                    })
                    .catch(error => {
                        console.error('Cannot approve questionnare: ', error)
                    })
            },
            rejectQuestionnare(id) {
                this.axios
                    .put(`${process.env.MIX_API_URL}/${process.env.MIX_API_QUESTIONNARES_URI}/${id}`, {
                        "action":"rejected"
                    })
                    .then(response => {
                        console.log('Reject response: ', response)
                        if (response.status === 200) {
                            this.$router.push({ path: '/users' })
                        }
                    })
                    .catch(error => {
                        console.error('Cannot reject questionnare: ', error)
                        if (response.status === 200) {
                            this.$router.push({ path: '/users' })
                        }
                    })
            },
            deleteQuestionnare(id) {
                this.axios
                    .delete(`${process.env.MIX_API_URL}/${process.env.MIX_API_QUESTIONNARES_URI}/${id}`)
                    .then(response => {
                        console.log('Delete response: ', response)
                    })
                    .catch(error => {
                        console.error('Cannot delete questionnare: ', error)
                    })
            }
        },
        created() {
            this.axios
                .get(`${process.env.MIX_API_URL}/${process.env.MIX_API_QUESTIONNARES_URI}/${this.$route.params.id}`)
                .then(response => {
                    this.questionnare = response.data.data
                    console.log('q: ', this.questionnare)
                })
                .catch(error => {
                    console.error('Cannot get questionare by ID: ', error)
                })
        }
    }
</script>
