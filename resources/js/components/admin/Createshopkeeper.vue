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
                  </div>
    </div>
     <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">E-Mail Id</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" v-model="shopkeeper.emailid" id="emailid" >
                  </div>
    </div>
      <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Mobile No</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" v-model="shopkeeper.mobileno" id="mobileno" >
                  </div>
    </div>
     <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" v-model="shopkeeper.username" id="username" >
                  </div>
    </div>
     <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" v-model="shopkeeper.password" id="password" >
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
      }
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
          .catch(function (resp) {
                        console.log(resp);
                        //alert("Could not create your company");
                    });
    }
  }

}
</script>

<style>

</style>
