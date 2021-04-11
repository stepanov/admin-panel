<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class = "list-unstyled">
                    <li v-for="log in logs.data" :key="log.id">
                        <div class="row pb-2">
                            <div class="col-md-6">

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
                logs: []
            }
        },
        created() {
            this.axios
                .get(`${process.env.MIX_API_URL}/${process.env.MIX_API_LOGS_URI}`)
                .then(response => {
                    this.logs = response.data
                    console.log('logs: ', this.logs.data)
                })
        }
    }
</script>
