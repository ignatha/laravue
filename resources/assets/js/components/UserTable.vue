<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(models,index) in model">
                                <td>{{index}}</td>
                                <td>{{models.name}}</td>
                                <td>{{models.email}}</td>
                                <td>aksi</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        data () {
          return {
            model: {}
          }
        },
        created: function() {
            this.fetchUsers()
        },
        methods:{
            fetchUsers(){
                var vm = this
                axios.get('/api/users').then(res => {
                    Vue.set(vm.$data,'model',res.data)
                })
            }
        }
    }
</script>
