<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul>
                    <li v-for="q in questionnares.data" :key="q.id">
                        <a :href="`/users/view/${q.id}`">{{ q.name }}</a>
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
                questionnares: [],
                apiUrl: process.env.MIX_API_URL,
                questionnaresUri: process.env.MIX_API_QUESTIONNARE_URI
            }
        },
        created() {
            this.axios
                .get(`${process.env.MIX_API_URL}/${process.env.MIX_API_QUESTIONNARE_URI}`)
                .then(response => {
                    this.questionnares = response.data
                    console.log('questionnares: ', this.questionnares.data)
                })
        }
    }
</script>
