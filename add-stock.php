<?php
session_start();
if (!isset($_SESSION['staffPass'])) {
    header("location:login.php");
}
include("components.php");
myHead("Staff");
?>

<head>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php

    require('conn.php');
    topBar();
    sideBar();
    ?>
    <div id="layoutSidenav_content">
        <main class="container-fluid">
            <div class="container-fluid px-4">
                <h2 class="m-3">Fill the form to add Stock</h2>
                <div class="container py-4">
                    <div class="row" style="background-color: #fff;">
                        <div class="col-md-12 form_sec_outer_task border ">
                            <div class="row">
                                <div class="col-md-12 bg-light p-2 mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="frm_section_n">Add Stock</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="show_alert"></div>
                            <div class="container">
                                <div class="row">
                                    <h6 class="col-md-3">Select Category</h6><br>
                                    <h6 class="col-md-3">Select item</h6><br>
                                    <h6 class="col-md-2">Quantity</h6><br>
                                    <h6 class="col-md-2">Price</h6><br>
                                </div>
                            </div>
                            <form method="POST" class="needs-validation" id="add_form" novalidate>
                                <div class="col-md-12 p-0">
                                    <div class="col-md-12 form_field_outer p-0">
                                        <div class="row form_field_outer_row">
                                            <div class="form-group col-md-3">
                                                <select class="custom-select" name="sCategory[]" id="sCategory1" onchange="myFun(this.value,1)" required>
                                                    <option value="">--Select--</option>
                                                    <option value="a4">A4</option>
                                                    <option value="a3">A3</option>
                                                    <option value="cushions">Cushions</option>
                                                    <option value="envelope">Envelope</option>
                                                    <option value="files">Files</option>
                                                    <option value="glossy_a4">Glossy-A4</option>
                                                    <option value="glossy_a3">Glossy-A3</option>
                                                    <option value="key_chain">Kye-Chains</option>
                                                    <option value="mugs">Mugs</option>
                                                    <option value="pvc">PVC</option>
                                                    <option value="sheets">Sheets</option>
                                                    <option value="stamp_paper">Stamp-Paper</option>
                                                    <option value="others">Others</option>
                                                </select>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <select class="custom-select" name="sItem[]" id="sItem1" required>
                                                    <option value="">--Select--</option>
                                                </select>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <input type="text" class="form-control" id="quan1" name="sQuantity[]" placeholder="Quantity" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <input type="number" class="form-control" id="num1" placeholder="Price" name="sPrice[]" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group col-md-2 add_del_btn_outer">
                                                <button type="button" class="btn_round add_new_frm_field_btn" title="Copy or clone this row">
                                                    <i class="fas fa-copy"></i>
                                                </button>

                                                <button type="button" class="btn_round remove_node_btn_frm_field" disabled>
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row ml-0 bg-light mt-3 border py-3">
                            <div class="col-md-12">
                                <button type="submit" onclick="validate()" name="sumbit" class="btn btn-primary py-2" id="add_btn"><i class="fas fa-plus"></i> Add Stock</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php
        footer();
        ?>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("body").on("click", ".add_new_frm_field_btn", function() {
                console.log("clicked");
                var index = $(".form_field_outer").find(".form_field_outer_row").length + 1;
                $(".form_field_outer").append(`
                            <div class="row form_field_outer_row append_item">
                                            <div class="form-group col-md-3">
                                                <select class="custom-select" name="sCategory[]" id="sCategory${index}" onchange="myFun(this.value,${index})">
                                                    <option value="">--Select--</option>
                                                    <option value="a4">A4</option>
                                                    <option value="a3">A3</option>
                                                    <option value="cushions">Cushions</option>
                                                    <option value="envelope">Envelope</option>
                                                    <option value="files">Files</option>
                                                    <option value="glossy_a4">Glossy-A4</option>
                                                    <option value="glossy_a3">Glossy-A3</option>
                                                    <option value="key_chain">Kye-Chains</option>
                                                    <option value="mugs">Mugs</option>
                                                    <option value="pvc">PVC</option>
                                                    <option value="sheets">Sheets</option>
                                                    <option value="stamp_paper">Stamp-Paper</option>
                                                    <option value="others">Others</option>
                                                </select>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <select class="custom-select" name="sItem[]" id="sItem${index}">
                                                    <option value="">--Select--</option>
                                                </select>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <input type="text" class="form-control" id="quan${index}" placeholder="Quantity" name="sQuantity[]">
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <input type="number" class="form-control" id="num${index}" placeholder="Price" name="sPrice[]">
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group col-md-2 add_del_btn_outer">
                                            <button type="button" class="btn_round add_new_frm_field_btn" title="Copy or clone this row">
                                                    <i class="fas fa-copy"></i>
                                                </button>

                                                <button type="button" class="btn_round remove_node_btn_frm_field" disabled>
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
        `);

                $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false);
                $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);
            });
        });


        ///======Clone method
        $(document).ready(function() {
            $("body").on("click", ".add_node_btn_frm_field", function(e) {
                var index = $(e.target).closest(".form_field_outer").find(".form_field_outer_row").length + 1;
                var cloned_el = $(e.target).closest(".form_field_outer_row").clone(true);

                $(e.target).closest(".form_field_outer").last().append(cloned_el).find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false);

                $(e.target).closest(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);


                //change id
                // $(e.target).closest(".form_field_outer").find(".form_field_outer_row").last().find("input[type='text']").attr("id", "mobileb_no_" + index);

                // $(e.target).closest(".form_field_outer").find(".form_field_outer_row").last().find("select").attr("id", "no_type_" + index);

                // console.log(cloned_el);
                //count++;
            });
        });


        $(document).ready(function() {
            //===== delete the form fieed row
            $("body").on("click", ".remove_node_btn_frm_field", function() {
                $(this).closest(".form_field_outer_row").remove();
                console.log("success");
            });
        });

        // ajax requiest to insert all form 
        $("#add_form").submit(function(e) {
            e.preventDefault();
            // $("#add_btn").val('Adding...');
            $.ajax({
                url: 'action.php',
                method: 'post',
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
                    // $("#add_btn").val('Add Stock');
                    $("#add_form")[0].reset();
                    $(".append_item").remove();
                    $("#show_alert").html(`${response}`);

                }
            });
        });
    </script>

    <script>

        // ajax get request for dynamic depend select box
        function myFun(data, index) {
            console.log(data);
            var req = new XMLHttpRequest();
            req.open('GET', "res.php?dataValue=" + data, true);
            req.send();

            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {

                    document.getElementById('sItem' + index).innerHTML += req.responseText;
                }
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>