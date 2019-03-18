<template>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Lastname</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Location</th>
            <th scope="col">State</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="value in data">
                <th scope="row">{{value.id}}</th>
                <td>{{value.name}}</td>
                <td>{{value.lastname}}</td>
                <td>{{value.phone}}</td>
                <td>{{value.email}}</td>
                <td>{{value.image}}</td>
                <td>{{value.category}}</td>
                <td>{{value.description}}</td>
                <td>{{value.location}}</td>
                <td>{{value.state}}</td>
                <!--<td><a href="{{'/edit-incidence?id='.$value->id}}"><button>Edit</button></a><a href="{{'/show?id='.$value->id}}"><button>Show</button></a>-->
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        mounted() {
            this.getData()
        },
        data(){
            return{
                data: []
            }
        },
        methods:{
            getData(){
                var urlData = "home";
                axios.get(urlData).then(response=>{
                    this.data = response.data
                });
            }
        }

    }
</script>
