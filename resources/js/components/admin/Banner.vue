<template>
<div>
<section class="content-header">
            <h1>
                Manage Banners
               
            </h1>
            <br>
            
</section> 
<div class="col-md-6">
  <form class="form-horizontal">
    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Upload Banner</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputPassword3" >
                  </div>
    </div>
     <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                   <select>
                   <option value="Active">Active</option>
                   <option value="Not Active">Not Active</option>
                   </select>
                  </div>
    </div>
    
     <div class="col-md-6">
               
                <button type="button" class="btn btn-info pull-right">Submit</button>
     </div>
  </form>
</div>
</div>
</template>
    


<script>
export default {

}
</script>

<style>

</style>
