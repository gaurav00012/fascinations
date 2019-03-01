<template>
<div>
<section class="content-header">
            <h1>
                Manage Banners
               
            </h1>
            <br>
            
</section> 
<div class="col-md-6">
  <form class="form-horizontal" @submit="formSubmit" enctype="multipart/form-data">
    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Upload Banner</label>

                  <div class="col-sm-10">
                    <input type="file" v-on:change="onFileChange" class="form-control" id="inputPassword3" >
                  </div>
    </div>
    
     <!-- <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                   <select>
                   <option value="Active">Active</option>
                   <option value="Not Active">Not Active</option>
                   </select>
                  </div>
    </div> -->
    
     <div class="col-md-6">
               
                <button class="btn btn-info pull-right">Submit</button>
     </div>
  </form>
</div>
</div>
</template>
    


<script>
import swal from 'sweetalert';
export default {
  data(){
    return{
      image:''
    }
  },
  methods:{
     onFileChange(e) {
              console.log(e.target.files[0]);
                this.image = e.target.files[0];
            },
      formSubmit(e) {
        
                e.preventDefault();
                let currentObj = this;
 
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
 
                let formData = new FormData();
                formData.append('image', this.image);
 
                axios.post('/api/uploadbanner', formData, config)
                .then(function (response) {
                    currentObj.success = response.data.success;
                    swal("Banner uploaded successfully", "", "success");
                      this.image = {};
                })
                .catch(function (error) {
                    currentObj.output = error;
                  
                });
            }      
      // createImage(file) {
      //     let reader = new FileReader();
      //     let vm = this;
      //     reader.onload = (e) => {
      //         vm.image = e.target.result;
      //     };
      //      reader.readAsDataURL(file);
      // },
      //   upload(){
      //     alert("hey this is alert");
      //           axios.post('/api/uploadbanner',{image: this.image}).then(response => {

      //           });
      //       }
  }

}
</script>

<style>

</style>
