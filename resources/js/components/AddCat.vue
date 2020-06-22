<template>
    <div>
        <h3 class="text-center">Add Cat</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addCat">
                    <div class="form-group">
                        <label>Url</label>
                        <input type="text" class="form-control" v-model="cat.url">
                    </div>
                    <div class="form-group">
                        <label>breed</label>
                        <input type="text" class="form-control" v-model="cat.breed">
                    </div>
                    <div class="form-group">
                        <label>age</label>
                        <input type="text" class="form-control" v-model="cat.age">
                    </div>
                    <div class="form-group">
                        <label>color</label>
                        <input type="text" class="form-control" v-model="cat.color">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Cat</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                cat: {}
            }
        },
        methods: {
            addCat() {

                this.axios
                    .post('https://cats.localdev/api/cat/add', this.cat)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        },
    }
</script>