<template>
    <div>
        <h3 class="text-center">All Cats</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>image_url</th>
                <th>breed</th>
                <th>age</th>
                <th>color</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="cat in cats" :key="cat.id">
                <td>{{ cat.id }}</td>
                <td>{{ cat.image_url }}</td>
                <td>{{ cat.breed }}</td>
                <td>{{ cat.age }}</td>
                <td>{{ cat.color }}</td>
                <td>{{ cat.created_at }}</td>
                <td>{{ cat.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: cat.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteCat(cat.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                Cats: []
            }
        },
        created() {
            this.axios
                .get('https://cats.localdev/api/cats')
                .then(response => {
                    this.Cats = response.data;
                });
        },
        methods: {
            deleteCat(id) {
                this.axios
                    .delete(`https://cats.localdev/api/cat/delete/${id}`)
                    .then(response => {
                        let i = this.Cats.map(item => item.id).indexOf(id); // find index of your object
                        this.Cats.splice(i, 1)
                    });
            }
        }
    }
</script>