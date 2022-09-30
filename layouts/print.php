<?php
//session_start();
require_once('user_role.php');
require_once('class/main.php');
$obj = new Model;

?>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
<div class="col-md-12">
    <button class="btn btn-primary" onclick="p_invoice()">Print</button>
</div>
                <div class="col-md-12 card mt-5 mx-auto" id="print_invoice">
                    <h5 class="card-header">INVOICE</h5>
                    <!-- <p style="float:right;"><a href="view.php">Back to list</a></p> -->
                    <div class="card-body">
                        <div class="invoice_info">
                            <div class="text-center">
                                <h2>Company Name</h2>
                                <h5>Address: Name of Customer</h5>
                                <h5>Phone: 05411201</h5>
                            </div>
                         
                            <div class="customer" style="display: flex;justify-content: center;gap:20px;">
                                <span>Customer: mynul </span>
                                <span>Phone: 0178754 </span>
                            </div>
                            <div class="mt-3" style="display: flex;justify-content: center;gap:20px;">
                                <h6>Total: 5000</h6>
                                <h6>Paid: 5000</h6>
                                <h6>Dues: 5000</h6>
                            </div>
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quentity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>one</td>
                                        <td>two</td>
                                        <td>three</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>





<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    function p_invoice(){
       
        window.print('#print_invoice');
    }
</script>

<?php require_once('footer.php'); ?>