
<template>
<div>
<section class="content-header">
            <h1>
                Create Coupon
               
            </h1>
            
</section> 
<div class="col-md-6">
  <center>
    <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">From Date</label>

                  <div class="col-sm-10">
                      <input type="date" class="form-control" v-model='coupon.from_date' data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" id="datepicker">
                  </div>
                </div>
                <small v-if="errors.from_date">{{errors.from_date}}</small>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">To Date</label>

                  <div class="col-sm-10">
                     <input type="date" class="form-control"  v-model='coupon.to_date' data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" id="datepicker">
                  </div>
                </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Coupon Code</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"  v-model='coupon.coupon_code' id="inputPassword3" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Coupon Type</label>

                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control"  v-model='coupon.coupon_type' id="inputPassword3" > -->
                     <select class="form-control" v-model="coupon.coupon_type">
                     <option value="FIXED"> FIXED</option>
                     <option value="PERCENTAGE"> PERCENTAGE </option>
                     </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Coupon Value</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control"  v-model.number='coupon.coupon_value' id="inputPassword3" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Coupon Minimum Amount</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control"  v-model.number='coupon.coupon_min_value' id="inputPassword3">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Coupon Maximum Amount</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control"  v-model.number='coupon.coupon_max_value' id="inputPassword3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Coupon Limit</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control"  v-model.number='coupon.coupon_limit' id="inputPassword3" >
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Coupon For</label>

                  <div class="col-sm-10">
                   <select class="form-control" v-model="coupon.coupon_for">
                     <option value="total"> Total</option>
                     <option value="product"> Product </option>
                     </select>
                  </div>
                </div>
                 <div class="form-group" v-if="coupon.coupon_for == 'product'">
                  <label for="inputPassword3" class="col-sm-2 control-label">Product Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"  v-model.number='coupon.product_name' id="inputPassword3" >
                  </div>
                </div>
                <div class="form-group" v-if="coupon.coupon_for == 'product'">
                  <label for="inputPassword3" class="col-sm-2 control-label">Product link</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"  v-model.number='coupon.product_link' id="inputPassword3" >
                  </div>
                </div> 
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Comment</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"  v-model='coupon.comments' id="inputPassword3" >
                  </div>
                </div>
                 
              </div>
              <!-- /.box-body -->
              <div class="col-md-6">
               
                <button type="button" v-on:click='savecoupon' class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form></center>

    
</div>
</div>
</template>


<script>
export default {
  data(){
    return{
      coupon:{
        from_date :'',
        to_date : '',
        coupon_code : '',
        coupon_type : '',
        coupon_min_value : '',
        coupon_max_value : '',
        coupon_limit: '',
        coupon_for:'',
        product_name: '',
        product_link: '',
        comments: '',


      },
      errors:{

      }
    }
  },
    methods:{
      savecoupon(){

        axios.post('/api/createcoupon',this.coupon).then((respononse)=> console.log(response))
        .catch((error)=> console.log(respononse.data.error))
      }
    }
}
</script>

<style>
</style>
