<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles margin-0">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Enter Product Information</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Product</li>
            </ol>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

<div class="card padding-20 margin-20">
    <div class="card-body">
        <form id="ProductEntry" class="form pt-3">
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="form-label">Product Name</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-pencil-alt"></i></span>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Product Name" aria-label="Username" aria-describedby="basic-addon11">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Product Size</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-ruler-pencil"></i></span>
                        <input type="text" name="size" id="size" class="form-control" placeholder="Size" aria-label="Username" aria-describedby="basic-addon11">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Product Type</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class="ti-layers-alt"></i></span>
                        <input type="text" name="type" id="type" class="form-control" placeholder="Type" aria-label="license" aria-describedby="basic-addon11">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="form-label">Details</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11"><i class=" ti-clipboard"></i></span>
                        <input type="text" name="details" id="details" class="form-control" placeholder="Product Details" aria-label="license" aria-describedby="basic-addon11">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label class="form-label">Activity</label>
                    <select id="activity" name="activity" class="form-control form-select">
                        <option value="A">Active</option>
                        <option value="I">Inactive</option>
                    </select>

                </div>
                <div class="form-group col-md-3">
                    <label class="form-label">Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon11">৳</span>
                        <input type="number" name="price" id="price" class="form-control" placeholder="Price" aria-label="license" aria-describedby="basic-addon11">
                    </div>
                </div>
                
            </div>

            <button type="button" onclick="entryProduct()" class="btn btn-success me-2 text-white float-end">Enter</button>
            <!-- Button trigger modal -->
           
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ProductPageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content top-margin-20">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">USER ENTRY</h5>
                <button type="button" onclick="closeProductPageModal()" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body center-element">
                <img src="assets/images/additional/success.gif">
                <h4>Product Added Sucessfully</h4>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="closeProductPageModal()" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>