<template>
<div>
<section class="content-header">
            <h1>
                Create Store Admin
               
            </h1>
            <br>
            
</section> 
<div class="col-md-6">
  <form class="form-horizontal">
    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Store Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" v-model="shopkeeper.storename" id="storename" >
                     <div v-if="errors && errors.storename" class="text-danger">{{errors.storename[0]}}</div>
                  </div>
    </div>
     <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">E-Mail Id</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" v-model="shopkeeper.emailid" id="emailid" >
                    <div v-if="errors && errors.emailid" class="text-danger">{{errors.emailid[0]}}</div>
                  </div>
    </div>
      <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Mobile No</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" v-model="shopkeeper.mobileno" id="mobileno" >
                     <div v-if="errors && errors.mobileno" class="text-danger">{{errors.mobileno[0]}}</div>
                  </div>
    </div>
     <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" v-model="shopkeeper.username" id="username" >
                    <div v-if="errors && errors.username" class="text-danger">{{errors.username[0]}}</div>
                  </div>
    </div>
     <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" v-model="shopkeeper.password" id="password" >
                    <div v-if="errors && errors.password" class="text-danger">{{errors.password[0]}}</div>
                  </div>
    </div>
     <div class="col-md-6">
               
                <button type="button" @click="click" class="btn btn-info pull-right">Submit</button>
     </div>
  </form>
</div>
</div>
</template>
    


<script>
export default {

  data(){
    return{
      shopkeeper:{
        storename: '',
        emailid: '',
        mobileno: '',
        username: '',
        password: '',
      },
      errors:{},
    }

  },

  methods:{
    click(){
    let shopdetail = this.shopkeeper;
    console.log(shopdetail);
    axios.post('/api/createshopkeeper',shopdetail)
          .then(function(resp){
            console.log(resp);
          })
          .catch(error => {
            if(error.response.status === 422){
             // swal ( "Oops" ,  "Something went wrong!" ,  "error" )
              this.errors = error.response.data.errors || {};
            }
          });
    }
  }

}
</script>

<style>

</style>
