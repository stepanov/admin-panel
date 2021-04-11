<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

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
