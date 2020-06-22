<template>
    <div>
        <h3 class="text-center">Edit Book</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateCat">
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
        created() {
            this.axios
                .get(`https://cats.localdev/api/cat/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.cat = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateCat() {
                this.axios
                    .post(`https://cats.localdev/api/cat/update/${this.$route.params.id}`, this.cat)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>