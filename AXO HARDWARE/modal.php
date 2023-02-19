<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header" >
        <h3 class="text-center" style="text-align:center;">Send Product Enquiry</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
        <div class="container">
          <form method="post"  action="https://formspree.io/f/xrgvpqpe"  method="POST">
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <label>Product Name</label>
                <input type="text"  class="form-control" id="userData" name="product_name"writeonly>

                <label> Name</label>
                <input type="text"  class="form-control" id="userData" name="name" required>

                <label>Email</label>
                <input type="text" name="email" class="form-control"  required>

                <label>Mobile No.</label>
                <input type="text" name="number" class="form-control" required>

                <label>Message</label>
                <textarea name="message" class="w-100" style="height: 80px; width:41%;font-size:16px; border-color: rgb(221, 218, 218); border-radius: 6px;margin-top: 20px;"  style="border-color: rgb(211, 209, 209); border-radius: 4px;"></textarea>

                <div class="modal-footer">
                   
                  <button type="submit" class="btn-sm">Send</button>
                </div>
              </div>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>

<!--another model-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 130px;">
      <div class="modal-header">
        <h3 class="text-center" style="text-align:center;">Send Product Enquiry</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
        <div class="container">
          <form method="post" action="enquiry.php">
            <div class="row">
              <div class="col-sm-12 col-md-12">
                

                <label> Name</label>
                <input type="text"  class="form-control" id="userData" name="name" required>

                <label>Email</label>
                <input type="text" name="email" class="form-control"  required>

                <label>Mobile No.</label>
                <input type="text" name="number" class="form-control" required>

                <label>Message</label>
                <textarea name="message" class="w-100" style="height: 80px; width:41%;font-size:16px; border-color: rgb(221, 218, 218); border-radius: 6px; margin-top: 20px;"  style="border-color: rgb(211, 209, 209); border-radius: 4px;"></textarea>

                <div class="modal-footer">
                   
                  <button type="submit" class="btn-sm">Send</button>
                </div>
              </div>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>


<!--another model-->