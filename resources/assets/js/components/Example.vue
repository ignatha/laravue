<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <button class="btn btn-success" @click="AddForm">Add</button>
                        </div>
                    </div>
                   <div class="panel panel-default" v-for="(employee,index) in employees">
                        <div class="panel-heading"><span class="float-right" style="cursor:pointer" @click="DeleteForm(index)">x</span></div>
                        <div class="panel-body" >
                            <span class="panel-title">Form ke {{index}}</span>
                            <form>
                              <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" v-model="employee.email" aria-describedby="emailHelp" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" v-model="employee.password" placeholder="Password">
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
    export default {
        data () {
          return {
            employees: [{
                email:'',
                password:''
            }],
          }
        },
        methods:{
            AddForm(){
                this.employees.push({
                    email:'',
                    password:''
                })
            },
            DeleteForm(index){
                this.employees.splice(index,1)
            }
        }
    }
</script>
