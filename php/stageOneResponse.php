<?php
require_once 'config.php';
require_once 'db.php';
$db = connect(DB_SERVER, USER, PASSWORD, DB_NAME);
session_start();

$adminData = selectRecords($db);
foreach ($adminData as $val) {
    $_SESSION['completion'] = $val['completion'];
}
if ($_POST['stage'] === "1") {
    updateCompletion($db, $_POST['uid'], $_POST['complete']);

    $stagetwo = '';
    $stagetwo .= "<form class=\"needs-validation\" id=\"stagetwo\"   novalidate>";
    $stagetwo .= "<input type=\"hidden\" name=\"stage\" value=\"2\">";
    $stagetwo .= "<input type=\"hidden\" name=\"complete\" value=\"50\">";
    $stagetwo .= "<input type=\"hidden\" name=\"uid\" value=<?php echo \$uuid; ?>";
    $stagetwo .= "<h6 class=\"heading-small text-muted mb-2\"></h6>";
    $stagetwo .= "<div class=\"pl-lg-4 pl-sm-4 pl-xs-4\">";
    $stagetwo .= "<div class=\"row\">";
    $stagetwo .= "<div class=\"col-lg-12\">";
    $stagetwo .= "<div class=\"form-group\">";
    $stagetwo .= "<label class=\"form-control-label text-dark\" for=\"input-nhif\">NHIF NUMBER</label>";
    $stagetwo .= "<input type=\"text\" id=\"input-nhif\" class=\"form-control text-dark\" placeholder=\"NHIF Number\">";
    $stagetwo .= "<div class=\"invalid-feedback\">";
    $stagetwo .= "Please enter your NHIF number";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "<h6 class=\"heading-small text-dark mb-2\">Have you ever been in an in-patient hospital or nursing home?.If so when and for what complaints? </h6>";
    $stagetwo .= "<div class=\"pl-lg-4\">";
    $stagetwo .= "<div class=\"row mb-3\">";
    $stagetwo .= "<div class=\"col-lg-12\">";
    $stagetwo .= "<div class=\"custom-control custom-radio custom-control-inline\">";
    $stagetwo .= "<input type=\"radio\" id=\"input-in-patient1\" name=\"in_patient\" class=\"custom-control-input\">";
    $stagetwo .= "<label class=\"custom-control-label text-center\" for=\"input-in-patient1\">Yes</label>";
    $stagetwo .= "<br>";
    $stagetwo .= "<div class=\"invalid-feedback\">";
    $stagetwo .= "Field cannot be empty";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "<div class=\"custom-control custom-radio custom-control-inline\">";
    $stagetwo .= "<input type=\"radio\" id=\"input-in-patient2\" name=\"in_patient\" class=\"custom-control-input\">";
    $stagetwo .= "<label class=\"custom-control-label\" for=\"input-in-patient2\">No</label>";
    $stagetwo .= "<br>";
    $stagetwo .= "<div class=\"invalid-feedback\"> Field cannot be empty </div>
                    </div>
                </div>
            </div>";
    $stagetwo .= "<div class=\"row\">
                <div class=\"col-lg-12 \">";
    $stagetwo .= "<textarea name=\"in_patient_date\" rows=\"2\" class=\"form-control text-dark\"></textarea> </div>";
    $stagetwo .= "
            </div>
        </div>";
    $stagetwo .= "<h6 class=\"heading-small text-dark mb-3\">Have you been immunized against the following diseases</h6>";
    $stagetwo .= "<div class=\"pl-lg-4\">";
    $stagetwo .= "<div class=\"custom-control custom-checkbox\">";
    $stagetwo .= "<input type=\"checkbox\" class=\"custom-control-input \" id=\"input_im1\" name=\"im_smallpox\">";
    $stagetwo .= "<label class=\"custom-control-label text-dark \" for=\"input_im1\">Smallpox</label>";
    $stagetwo .= "</div>";
    $stagetwo .= "<div class=\"row\">";
    $stagetwo .= "<div class=\"col-lg-2\">";
    $stagetwo .= "<div class=\"form-group\">";
    $stagetwo .= "<input type=\"number\" id=\"input-day\" name=\"dc_day\" class=\"form-control text-dark\" placeholder=\"Day\">";
    $stagetwo .= "<div class=\"invalid-feedback\">";
    $stagetwo .= "Field cannot be empty";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "<div class=\"col-lg-2\">";
    $stagetwo .= "<div class=\"form-group\">";
    $stagetwo .= "<input type=\"number\" id=\"input-month\" name=\"dc_month\" class=\"form-control text-dark\" placeholder=\"Month\">";
    $stagetwo .= "<div class=\"invalid-feedback\">";
    $stagetwo .= " Field cannot be empty";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "<div class=\"col-lg-2\">";
    $stagetwo .= "<div class=\"form-group\">";
    $stagetwo .= " <input type=\"number\" id=\"input-year\" name=\"dc_year\" class=\"form-control text-dark\" placeholder=\"Year\">";
    $stagetwo .= "<div class=\"invalid-feedback\">";
    $stagetwo .= "Field cannot be empty";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "<div class=\"custom-control custom-checkbox\">";
    $stagetwo .= "<input type=\"checkbox\" class=\"custom-control-input \" id=\"input_im2\" name=\"im_tetanus\">";
    $stagetwo .= "<label class=\"custom-control-label text-dark \" for=\"input_im2\">Tetanus</label>";
    $stagetwo .= "</div>";
    $stagetwo .= "<div class=\"row\">";
    $stagetwo .= "<div class=\"col-lg-2\">";
    $stagetwo .= "<div class=\"form-group\">";
    $stagetwo .= "<input type=\"number\" id=\"input-day\" name=\"dc_day\" class=\"form-control text-dark\" placeholder=\"Day\">";
    $stagetwo .= "<div class=\"invalid-feedback\">";
    $stagetwo .= "Field cannot be empty";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "<div class=\"col-lg-2\">";
    $stagetwo .= "<div class=\"form-group\">";
    $stagetwo .= "<input type=\"number\" id=\"input-month\" name=\"dc_month\" class=\"form-control text-dark\" placeholder=\"Month\">";
    $stagetwo .= "<div class=\"invalid-feedback\">";
    $stagetwo .= " Field cannot be empty";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "<div class=\"col-lg-2\">";
    $stagetwo .= "<div class=\"form-group\">";
    $stagetwo .= " <input type=\"number\" id=\"input-year\" name=\"dc_year\" class=\"form-control text-dark\" placeholder=\"Year\">";
    $stagetwo .= "<div class=\"invalid-feedback\">";
    $stagetwo .= "Field cannot be empty";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "</div>";
    $stagetwo .= "<div class=\"modal-footer\">";
    // $stagetwo .= "<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>";
    // $stagetwo .= "<button type=\"submit\" class=\"btn btn-primary\"  onclick=<?php echo \"replaceStageTwo(\" . \$val['ID'] . \");\">Next</button>";
    $stagetwo .= " </div>";
    $stagetwo .= "</form>";

    echo json_encode($stagetwo);
}