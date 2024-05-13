<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Form</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="full-form">
        <form action="backend/function.php" method="post">
            <div id="questionnaire">
                <div class="container">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="Logo">
                    </div>
                    <h3 class="text-center font-weight-bold" style="color: #8D4946;">Veterans inc. Digital Intake sheet
                    </h3>
                    <h6 class="text-center font-weight-bold" style="color: #8D4946;">Veterans Project Digital Intake
                        Questionnaire
                    </h6>
                    <div style="width:60%; margin: 0px auto;">
                        <p class="mt-5 text-center" style="color: #8D4946;"><i> Your
                                responses will help us better understand your needs and how we can support you. Please
                                fill out the following information:</i>
                        </p>
                    </div>
                    <div class="form-row mt-5">
                        <div class="form-group col-md-6">
                            <label for="fullname">First Name</label>
                            <input type="text" id="fullname" name="first_name" class="form-control"
                                placeholder="Enter First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="middleinitial">Middle Initial</label>
                            <input type="text" id="middleinitial" name="middle_initial" class="form-control"
                                placeholder="Enter Middle Initial">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="last_name" class="form-control"
                                placeholder="Enter Last Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cellphone">Cell Phone Number</label>
                            <input type="text" id="cellphone" name="cell_phone" class="form-control"
                                placeholder="Enter Cell Phone Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control"
                                placeholder="Enter Address">
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="homeless">I am a homeless veteran or at risk of becoming
                                    homeless.</label>
                                <select class="form-control" id="homeless" name="homeless">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>
                            <div id="homelessDetails" class="hidden">
                                <div class="form-group">
                                    <label>Please select the option that best describes you:</label>
                                    <select class="form-control" id="homelessOption" name="your_description">
                                        <option value="actively_seeking">Veteran actively seeking employment</option>
                                        <option value="service_provider">Veteran service provider assisting a veteran
                                            seeking employment
                                        </option>
                                        <option value="dvop_worker">Disabled Veterans' Outreach Program (DVOP) worker
                                            assisting a veteran seeking employment
                                        </option>
                                        <option value="family_member">Family member of a veteran</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div id="otherDetails" class="form-group hidden">
                                    <label for="otherInput">Please specify:</label>
                                    <input type="text" class="form-control" id="otherInput" name="other_details"
                                        placeholder="Enter details">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="homeless">Are you a homeless veteran?</label>
                                <select class="form-control" id="homeless_1" name="homeless2">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>
                            <div id="homelessDetails_1" class="hidden">
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="sex">Sex:</label>
                                        <input type="text" id="sex" name="sex" class="form-control"
                                            placeholder="Enter Sex">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="age">Age:</label>
                                        <input type="text" id="age" name="age" class="form-control"
                                            placeholder="Enter Age">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="race">Race:</label>
                                        <input type="text" id="race" name="race" class="form-control"
                                            placeholder="Enter Race">
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="hear_about_us">How did you hear about us?</label>
                            <select class="form-control" id="hear_about_us" name="hear_about_us">
                                <option value="social_media">Social Media</option>
                                <option value="friend_referral">Friend Referral</option>
                                <option value="online_search">Online Search</option>
                                <option value="event">Event</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="county_residence">County of Residence:</label>
                            <input type="text" class="form-control" id="county_residence" name="county_residence"
                                placeholder="Enter County Name">
                        </div>
                        <div class="col-md-6 mt-3 form-group">
                            <label>Are you willing to work 25 hours or more per week?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="work_hours" id="work_hours_yes"
                                    value="yes">
                                <label class="form-check-label" for="work_hours_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="work_hours" id="work_hours_no"
                                    value="no">
                                <label class="form-check-label" for="work_hours_no">No</label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3 form-group">
                            <label>Are you currently going back to school or obtaining
                                certification?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="school_certification"
                                    id="school_certification_yes" value="yes">
                                <label class="form-check-label" for="school_certification_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="school_certification"
                                    id="school_certification_no" value="no">
                                <label class="form-check-label" for="school_certification_no">No</label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5 form-group">
                            <label>How did you learn about our services? (Select all that apply)</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="learn_about_services[]"
                                    id="presentation" value="Veterans Inc Community presentation">
                                <label class="form-check-label" for="presentation">Veterans Inc Community
                                    presentation</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="learn_about_services[]" id="event"
                                    value="Veteran UNC Community Event">
                                <label class="form-check-label" for="event">Veteran UNC Community Event</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="learn_about_services[]"
                                    id="social_media" value="Social Media">
                                <label class="form-check-label" for="social_media">Social Media</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="learn_about_services[]" id="flyer"
                                    value="Flyer">
                                <label class="form-check-label" for="flyer">Flyer</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="learn_about_services[]"
                                    id="referral" value="Referral from someone">
                                <label class="form-check-label" for="referral">Referral from someone (please specify
                                    source):</label>
                                <input type="text" class="form-control" id="referral_source" name="referral_source"
                                    placeholder="Enter source">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="learn_about_services[]"
                                    id="partner_org" value="Another Veterans Inc Partner Organization">
                                <label class="form-check-label" for="partner_org">Another Veterans Inc Partner
                                    Organization</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center w-100">
                        <button type="button" id="questionnaire_btn" class="btn btn-outline-dark">NEXT</button>
                    </div>
                </div>
            </div>
            <div id="form1">
                <div class="container">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="Logo">
                    </div>
                    <h2 class="heading"> <i>Profile Information</i></h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fullname">Full Legal Name-Last:</label>
                            <input type="text" id="fullname" name="full_legal_last_name" class="form-control"
                                placeholder="Enter Your full legal name-last:">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">MI:</label>
                            <input type="text" id="lastname" class="form-control" name="mi" placeholder="Enter your MI">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">First:</label>
                            <input type="text" id="lastname" class="form-control" name="first"
                                placeholder="Enter First">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" id="dob" class="form-control" name="dob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email_address">Email Address:</label>
                            <input type="number" id="email_address" class="form-control" name="email_address"
                                placeholder="Enter Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Phone:</label>
                            <input type="number" id="lastname" class="form-control" name="phone"
                                placeholder="Enter Phone:">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Address:</label>
                            <input type="number" id="lastname" class="form-control" name="address"
                                placeholder="Address (if homeless use ZIP code only)">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Social Security #:</label>
                            <input type="text" id="lastname" class="form-control" name="social_security"
                                placeholder="Enter Social Security #">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">CoC Location:</label>
                            <input type="text" id="lastname" class="form-control" name="coc_location"
                                placeholder="Enter CoC Location">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Continuum of Care Code # (HUD-assigned):</label>
                            <input type="text" id="lastname" class="form-control" name="continuum_care_code"
                                placeholder="Enter Continuum of Care Code # (HUD-assigned)">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Referral Source</label>
                            <input type="text" id="lastname" class="form-control" name="referral_source"
                                placeholder="Enter Referral Source">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">VA Medical Center Station # closeset to CM's office</label>
                            <input type="text" id="lastname" class="form-control" name="va_station"
                                placeholder="Enter VA Medical Center Station # closeset to CM's office">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-3 form-group ">
                            <label>Gender:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="gender" type="radio" id="male" value="M">
                                <label class="form-check-label" for="male">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="gender" type="radio" id="female" value="F">
                                <label class="form-check-label" for="female">F</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="gender" type="radio" id="female"
                                    value="Trans M/F">
                                <label class="form-check-label" for="female">Trans M/F</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="gender" type="radio" id="female"
                                    value="Trans F/M">
                                <label class="form-check-label" for="female">Trans F/M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="gender" type="radio" id="female"
                                    value="Non-Conforming">
                                <label class="form-check-label" for="female">Non-Conforming</label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3 form-group">
                            <label class="checkbox-label">Ethnicity:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="ethnicity" type="radio" id="race3"
                                    value="Hispanic">
                                <label class="form-check-label" for="race3">Hispanic</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="ethnicity" type="radio" id="race4"
                                    value="Non-Hispanic">
                                <label class="form-check-label" for="race4">Non-Hispanic</label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3 form-group">
                            <label class="checkbox-label">Primary Race:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="primary_race" type="radio" id="race1"
                                    value="White">
                                <label class="form-check-label" for="race1">White</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="primary_race" type="radio" id="race2"
                                    value="Black/African American">
                                <label class="form-check-label" for="race2">Black/African American</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="primary_race" type="radio" id="race2"
                                    value="Asian">
                                <label class="form-check-label" for="race2">Asian</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="primary_race" type="radio" id="race2"
                                    value="American Indian / Alaskan Islander">
                                <label class="form-check-label" for="race2">American Indian / Alaskan Islander</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="primary_race" type="radio" id="race2"
                                    value="Native Hawaiian / Pacific Islander">
                                <label class="form-check-label" for="race2">Native Hawaiian / Pacific Islander</label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3 form-group">
                            <label class="checkbox-label">Secondary Race:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="secondary_race" type="radio" id="race3"
                                    value="White">
                                <label class="form-check-label" for="race3">White</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="secondary_race" type="radio" id="race4"
                                    value="Black/African American">
                                <label class="form-check-label" for="race4">Black/African American</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="secondary_race" type="radio" id="race2"
                                    value="Asian">
                                <label class="form-check-label" for="race2">Asian</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="secondary_race" type="radio" id="race2"
                                    value="American Indian / Alaskan Islander">
                                <label class="form-check-label" for="race2">American Indian / Alaskan Islander</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="secondary_race" type="radio" id="race2"
                                    value="Native Hawaiian / Pacific Islander">
                                <label class="form-check-label" for="race2">Native Hawaiian / Pacific Islander</label>
                            </div>
                        </div>
                    </div>
                    <hr class="hr_style">
                    <h2 class="heading mt-5"><i>Military Information</i> </h2>
                    <div class="form-row mt-5">
                        <div class="form-group col-md-6">
                            <label for="fullname">Branch of Service :</label>
                            <input type="text" id="fullname" class="form-control" name="branch_service"
                                placeholder="Enter Your Branch of Service :">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname">Service Date From to </label>
                            <input type="number" id="fullname" class="form-control" name="service_date"
                                placeholder="Enter Your Service Date From dd/mm/yyyy to dd/mm/yyyy">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname">Military MOS :</label>
                            <input type="text" id="fullname" class="form-control" name="military_mos"
                                placeholder="Enter Your Military MOS : ">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname">Type of Injury (If any):</label>
                            <input type="text" id="fullname" class="form-control" name="injury"
                                placeholder="Enter Your Type of Injur (If any): ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-3 form-group ">
                            <label>Military Status :</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="military_status" type="radio" id="male"
                                    value="Active Duty">
                                <label class="form-check-label" for="male">Active Duty</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="military_status" type="radio" id="male"
                                    value="Veteran">
                                <label class="form-check-label" for="male">Veteran</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="military_status" type="radio" id="male"
                                    value="Reserve Component">
                                <label class="form-check-label" for="male">Reserve Component</label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 form-group ">
                            <label>Rank:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="rank" type="radio" id="male" value="Enlisted">
                                <label class="form-check-label" for="male">Enlisted</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="rank" type="radio" id="male" value="Officer">
                                <label class="form-check-label" for="male">Officer</label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 form-group ">
                            <label>Combat:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="combat" type="radio" id="male" value="Yes">
                                <label class="form-check-label" for="male">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="combat" type="radio" id="male" value="No">
                                <label class="form-check-label" for="male">No</label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 form-group ">
                            <label>Servcie connected Disability:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="service_connected_disability" type="radio"
                                    id="male" value="Yes">
                                <label class="form-check-label" for="male">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="service_connected_disability" type="radio"
                                    id="male" value="No">
                                <label class="form-check-label" for="male">No</label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 form-group ">
                            <label>Discharge:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="discharge" type="radio" id="male"
                                    value="Honorable">
                                <label class="form-check-label" for="male">Honorable</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="discharge" type="radio" id="male" value="General">
                                <label class="form-check-label" for="male">General</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="discharge" type="radio" id="male" value="OTH">
                                <label class="form-check-label" for="male">OTH</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="discharge" type="radio" id="male"
                                    value="Bad Conduct">
                                <label class="form-check-label" for="male">Bad Conduct</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="discharge" type="radio" id="male"
                                    value="Dishonorable">
                                <label class="form-check-label" for="male">Dishonorable</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="discharge" type="radio" id="male" value="Other">
                                <label class="form-check-label" for="male">Other</label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 form-group ">
                            <label>Theater of Operations:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="theater_operations" type="radio" id="male"
                                    value="Iraq (Operation New Dawn)">
                                <label class="form-check-label" for="male">Iraq (Operation New Dawn)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="theater_operations" type="radio" id="male"
                                    value="Iraq (Op. Iraqi Freedom)">
                                <label class="form-check-label" for="male">Iraq (Op. Iraqi Freedom)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="theater_operations" type="radio" id="male"
                                    value="Afghanistan (Op. Enduring Freedom)">
                                <label class="form-check-label" for="male">Afghanistan (Op. Enduring Freedom)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="theater_operations" type="radio" id="male"
                                    value="Persian Gulf (Op. Desert Storm)">
                                <label class="form-check-label" for="male">Persian Gulf (Op. Desert Storm)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="theater_operations" type="radio" id="male"
                                    value="Vietnam">
                                <label class="form-check-label" for="male">Vietnam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="theater_operations" type="radio" id="male"
                                    value="Korea">
                                <label class="form-check-label" for="male">Korea</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="theater_operations" type="radio" id="male"
                                    value="WWII">
                                <label class="form-check-label" for="male">WWII</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="theater_operations" type="radio" id="male"
                                    value="Other">
                                <label class="form-check-label" for="male">Other</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="theater_operations" type="radio" id="male"
                                    value="No to all">
                                <label class="form-check-label" for="male">No to all</label>
                            </div>
                        </div>
                    </div>
                    <hr class="hr_style">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fullname">Prepared by:</label>
                            <input type="text" id="fullname" class="form-control" name="prepared_by"
                                placeholder="Prepared by :">
                        </div>
                        <div class="col-md-4 mt-3 form-group ">
                            <label>Household Status:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="household_status" type="radio" id="male"
                                    value="Client-Only">
                                <label class="form-check-label" for="male">Client-Only</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="household_status" type="radio" id="male"
                                    value="Client with Others in Household">
                                <label class="form-check-label" for="male">Client with Others in Household</label>
                            </div>
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary btn-submit">Submit</button> -->
                </div>
                <div class="container custom-container">
                    <h4 class="custom-heading"> <u>CALL OF DUTY ENDOWMENT <br>VETERAN PROFILES RELEASE </u></h4>
                    <p class="custom-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                        bibendum nisi id
                        ligula fermentum, sit amet eleifend neque vestibulum Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Vivamus bibendum nisi id
                        ligula fermentum, sit amet eleifend neque vestibulum Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Vivamus bibendum nisi id
                        ligula fermentum, sit amet eleifend neque vestibulum Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Vivamus bibendum nisi id
                        ligula fermentum, sit amet eleifend neque vestibulum Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Vivamus bibendum nisi id
                        ligula fermentum, sit amet eleifend neque vestibulum Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Vivamus bibendum nisi id
                        ligula fermentum, sit amet eleifend neque vestibulum
                    </p>
                    <div class="form-group col-md-4">
                        <input type="text" id="fullname" class="form-control custom-input" name="cod_signature"
                            placeholder="">
                        <label for="fullname mt-5">Signature :</label>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" id="fullname" class="form-control custom-input" name="cod_printed_name"
                            placeholder="">
                        <label for="fullname mt-5">Printed Name :</label>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="number" id="fullname" class="form-control custom-input" name="cod_date"
                            placeholder="">
                        <label for="fullname mt-5"> Date:</label>
                    </div>
                </div>
                <div class="container">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="Logo">
                    </div>
                    <h2 class="heading"> <u>HYPER File Checklist</u></h2>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <input type="text" id="fullname" class="form-control custom-input" name="hfc_veteran"
                                placeholder="">
                            <label for="fullname mt-5">Veteran :</label>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" id="fullname" class="form-control custom-input" name="hfc_case_manager"
                                placeholder="">
                            <label for="fullname mt-5">Case Manager:</label>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="number" id="fullname" class="form-control custom-input" name="hfc_enrol_date"
                                placeholder="">
                            <label for="fullname mt-5"> Enrollnment Date:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-3 form-group ">
                            <h5> <u>HVRP Program:</u></h5>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="male"
                                    value="AFA Tracking Sheet">
                                <label class="form-check-label custom-radio-label" for="male">AFA Tracking Sheet</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="female" value="Universal Services
                              Application">
                                <label class="form-check-label custom-radio-label" for="female">Universal Services
                                    Application</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="trans-male-female"
                                    value="DD214">
                                <label class="form-check-label custom-radio-label" for="trans-male-female">DD214</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="trans-female-male"
                                    value="Signed Release">
                                <label class="form-check-label custom-radio-label" for="trans-female-male">Signed
                                    Release</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="non-conforming"
                                    value="Document Checklist">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Document
                                    Checklist</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="non-conforming"
                                    value="Homeless Verification">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Homeless
                                    Verification</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="non-conforming"
                                    value="Participation Agreement">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Participation
                                    Agreement</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="non-conforming"
                                    value="Andividual Employment Plan">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Andividual
                                    Employment
                                    Plan</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="non-conforming"
                                    value="AJC Form">
                                <label class="form-check-label custom-radio-label" for="non-conforming">AJC Form</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="non-conforming"
                                    value="Employment History">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Employment
                                    History</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="non-conforming"
                                    value="Extra Data Form">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Extra Data
                                    Form</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="non-conforming"
                                    value="HVRP Referral Form">
                                <label class="form-check-label custom-radio-label" for="non-conforming">HVRP Referral
                                    Form</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="non-conforming"
                                    value="SSVF Referral Form">
                                <label class="form-check-label custom-radio-label" for="non-conforming">SSVF Referral
                                    Form</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program" type="radio" id="non-conforming"
                                    value="Resume">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Resume</label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 form-group">
                            <h5> <u>CODE Program:</u></h5>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program" type="radio" id="male"
                                    value="Universal Services Application">
                                <label class="form-check-label custom-radio-label" for="male">Universal Services
                                    Application</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program" type="radio" id="female"
                                    value="DD214 or Squares">
                                <label class="form-check-label custom-radio-label" for="female"> DD214 or Squares
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program" type="radio" id="Signed Release"
                                    value="trans-male-female">
                                <label class="form-check-label custom-radio-label" for="trans-male-female">Signed
                                    Release</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program" type="radio" id="CODE Release Form"
                                    value="trans-female-male">
                                <label class="form-check-label custom-radio-label" for="trans-female-male">CODE Release
                                    Form</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program" type="radio"
                                    id="Homeless Verification" value="non-conforming">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Homeless
                                    Verification</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program" type="radio"
                                    id="Participation Agreement" value="non-conforming">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Participation
                                    Agreement</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program" type="radio" id="male"
                                    value="Employment Verification">
                                <label class="form-check-label custom-radio-label" for="male">Employment
                                    Verification</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program" type="radio" id="female"
                                    value=" CODE Success Story">
                                <label class="form-check-label custom-radio-label" for="female"> CODE Success Story
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 form-group">
                            <h5> <u>Arthur Blank Program</u></h5>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="arthur_blank_program" type="radio" id="male"
                                    value="Universal Services Application">
                                <label class="form-check-label custom-radio-label" for="male">Universal Services
                                    Application</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="arthur_blank_program" type="radio" id="female"
                                    value=" DD214 or Squares.">
                                <label class="form-check-label custom-radio-label" for="female"> DD214 or Squares.
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="arthur_blank_program" type="radio"
                                    id=" Signed Release" value="trans-male-female">
                                <label class="form-check-label custom-radio-label" for="trans-male-female"> Signed
                                    Release</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="arthur_blank_program" type="radio"
                                    id=" Arthur Blank Form" value="trans-female-male">
                                <label class="form-check-label custom-radio-label" for="trans-female-male"> Arthur Blank
                                    Form</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="arthur_blank_program" type="radio"
                                    id="Homeless Verification" value="non-conforming">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Homeless
                                    Verification</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="arthur_blank_program" type="radio"
                                    id="Participation Agreement" value="non-conforming">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Participation
                                    Agreement</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="arthur_blank_program" type="radio" id="male"
                                    value="Employment Verification">
                                <label class="form-check-label custom-radio-label" for="male">Employment
                                    Verification</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="arthur_blank_program" type="radio" id="female"
                                    value="  o Veteran Thank you to AB">
                                <label class="form-check-label custom-radio-label" for="female">
                                    o Veteran Thank you to AB
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 form-group">
                            <label> <u>HVRP Program:</u></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program_2" type="radio" id="male"
                                    value="Employment Verification Follow Up">
                                <label class="form-check-label custom-radio-label" for="male">Employment Verification
                                    Follow
                                    Up</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program_2" type="radio" id="female"
                                    value="Individualized Employment Plan (IEP)">
                                <label class="form-check-label custom-radio-label" for="female">Individualized
                                    Employment Plan
                                    (IEP)
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program_2" type="radio"
                                    id="Employment Verification Form" value="Employment Verification Form">
                                <label class="form-check-label custom-radio-label" for="trans-male-female">Employment
                                    Verification Form</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program_2" type="radio"
                                    id="Training Verification Form" value="Training Verification Form">
                                <label class="form-check-label custom-radio-label" for="trans-female-male">Training
                                    Verification
                                    Form</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program_2" type="radio"
                                    id="Training Certificates" value="Training Certificates">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Training
                                    Certificates</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program_2" type="radio"
                                    id="Amazon Approval w/items" value="Amazon Approval w/items">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Amazon Approval
                                    w/
                                    items</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program_2" type="radio" id="female"
                                    value="Amazon Receipt of Goods">
                                <label class="form-check-label custom-radio-label" for="female">Amazon Receipt of Goods
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program_2" type="radio" id="Misc. Purchases"
                                    value="Misc.
                              Purchases">
                                <label class="form-check-label custom-radio-label" for="trans-male-female">Misc.
                                    Purchases</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program_2" type="radio"
                                    id="Misc. Receipt of Goods" value="Misc. Receipt of
                              Goods">
                                <label class="form-check-label custom-radio-label" for="trans-female-male">Misc. Receipt
                                    of
                                    Goods</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="hvrp_program_2" type="radio"
                                    id="HVRP Purchase Requests" value="HVRP Purchase
                              Requests">
                                <label class="form-check-label custom-radio-label" for="non-conforming">HVRP Purchase
                                    Requests</label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 form-group">
                            <label> <u>CODE Program</u></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program_2" type="radio" id="male"
                                    value="TFA Tracking Sheet">
                                <label class="form-check-label custom-radio-label" for="male">TFA Tracking Sheet</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program_2" type="radio" id="female"
                                    value=" Amazon Approval w/ items">
                                <label class="form-check-label custom-radio-label" for="female"> Amazon Approval w/
                                    items
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program_2" type="radio" id="Amazon Receipt of
                              Goods" value="Amazon Receipt of Goods">
                                <label class="form-check-label custom-radio-label" for="trans-male-female">Amazon
                                    Receipt of
                                    Goods</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program_2" type="radio" id="Misc.
                              Purchases" value="Misc.Purchases">
                                <label class="form-check-label custom-radio-label" for="trans-female-male">Misc.
                                    Purchases</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program_2" type="radio" id="Misc. Receipt of
                              Goods" value="Misc. Receipt of Goods">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Misc. Receipt of
                                    Goods</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="code_program_2" type="radio" id="CODE Purchase
                              Requests" value="CODE Purchase Requests">
                                <label class="form-check-label custom-radio-label" for="non-conforming">CODE Purchase
                                    Requests</label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 form-group">
                            <label> <u>Arthur Blank Program</u></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="arthur_blank_program_2" id="male"
                                    value="TFA Tracking Sheet">
                                <label class="form-check-label custom-radio-label" for="male">TFA Tracking Sheet</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="arthur_blank_program_2" id="female"
                                    value="Amazon Approval w/ items.">
                                <label class="form-check-label custom-radio-label" for="female"> Amazon Approval w/
                                    items.
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="arthur_blank_program_2"
                                    id="Amazon Receipt of Goods" value="Amazon Receipt of Goods">
                                <label class="form-check-label custom-radio-label" for="trans-male-female">Amazon
                                    Receipt of
                                    Goods</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="arthur_blank_program_2"
                                    id="trans-female-male" value="trans-female-male">
                                <label class="form-check-label custom-radio-label"
                                    for="trans-female-male">trans-female-male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="arthur_blank_program_2"
                                    id="non-conforming" value="Misc. Purchases">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Misc.
                                    Purchases</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="arthur_blank_program_2"
                                    id="non-conforming" value="Mise. Receipt of Goods">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Mise. Receipt of
                                    Goods</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="arthur_blank_program_2" id="male"
                                    value=" AB Purchase Requests.">
                                <label class="form-check-label custom-radio-label" for="male"> AB Purchase
                                    Requests.</label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 form-group">
                            <label> <u>Program Enrolled:</u></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cod_program_enrolled" id="male"
                                    value="HVRP">
                                <label class="form-check-label custom-radio-label" for="male">HVRP</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cod_program_enrolled" id="female"
                                    value="HVRP ONLY">
                                <label class="form-check-label custom-radio-label" for="female">HVRP ONLY
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cod_program_enrolled" id="CODE"
                                    value="CODE">
                                <label class="form-check-label custom-radio-label" for="trans-male-female">CODE</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cod_program_enrolled" id="CODE ONLY"
                                    value="CODE ONLY">
                                <label class="form-check-label custom-radio-label" for="trans-female-male">CODE
                                    ONLY</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cod_program_enrolled"
                                    id="non-conforming" value="Arthur Blank">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Arthur
                                    Blank</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cod_program_enrolled"
                                    id="non-conforming" value="Arthur Blank">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Arthur
                                    Blank</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cod_program_enrolled" id="male"
                                    value="ONLY">
                                <label class="form-check-label custom-radio-label" for="male">ONLY</label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 form-group">
                            <label> <u>Verification:</u></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cod_verification	" id="male"
                                    value="All Forms are Signed and Dated">
                                <label class="form-check-label custom-radio-label" for="male">All Forms are Signed and
                                    Dated</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cod_verification	" id="female"
                                    value=" S-Drive Matches Hard File">
                                <label class="form-check-label custom-radio-label" for="female">
                                    S-Drive Matches Hard File
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cod_verification"
                                    id="Hard File is in Correct Order" value="Hard File is in Correct Order">
                                <label class="form-check-label custom-radio-label" for="non-conforming">Hard File is in
                                    Correct
                                    Order</label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 form-group">
                            <label> <u>Case Notes:</u></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cod_case_notes" id="male"
                                    value="HVRP CN Current">
                                <label class="form-check-label custom-radio-label" for="male">HVRP CN Current</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cod_case_notes" id="female"
                                    value="CODE CN Current">
                                <label class="form-check-label custom-radio-label" for="female">
                                    CODE CN Current
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cod_case_notes"
                                    id="trans-male-female" value="Arthur Blank CN Current">
                                <label class="form-check-label custom-radio-label" for="trans-male-female">
                                    Arthur Blank CN Current
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-4 mt-5">
                            <input type="text" id="fullname" name="file_reviewed_by" class="form-control custom-input"
                                placeholder="">
                            <label for="fullname mt-5">File Reviewed by:</label>
                        </div>
                        <div class="form-group col-md-4 mt-5">
                            <input type="text" id="fullname" name="file_reviewed_date" class="form-control custom-input"
                                placeholder="">
                            <label for="fullname mt-5">File Reviewed Date:</label>
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary btn-submit">Submit</button> -->
                </div>
                <!-- fifth page starts -->
                <div class="consent container">
                    <h1 class="head_info text-center">Confidential Information</h1>
                    <h1 class="consent_info text-center">Consent for the Release of Confidential Information</h1>
                    <p class="consent_para1">I,<input type="text" id="date" name="consent_blanks[]">with a date of birth
                        <input type="text" id="social" name="consent_blanks[]">and
                        a Social Security Number of:<input type="text" id="authorization" name="consent_blanks[]">give
                        authorization to any necessary
                        persona/organiztions to give my information to Veterans Inc.so that they can better understand
                        my condition
                        and help my obtain employment and/or other: <input type="text" id="last_blank"
                            name="consent_blanks[]">
                    </p>
                    <p class="consent_para2 mt-5">I understand that i have the option to opt out of releasing certain
                        information.By
                        checking the boxes below,i understand that i giving permission for the selected information to
                        sent by
                        Veterns Inc,to included giving permission for the Veterns Inc.Staff to assist myself with the
                        job Americans
                        job centers and obtaining my DD214:
                    </p>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" value="Employment" id="defaultCheck1"
                                        name="consent_employment">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Employment
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio"
                                        value="National Archieves/DD214 Recovery" id="defaultCheck1"
                                        name="consent_national">
                                    <label class="form-check-label" for="defaultCheck1">
                                        National Archieves/DD214 Recovery
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Other" id="defaultCheck1"
                                        name="consent_other">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Other: <input type="text" id="consent_other">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="consent_para3">
                        <p class="consent_para3_para">I also understand that:</p>
                        <li>If i want to revoke permission of Veterans Inc.to get this information i need to give
                            request written
                            request to Veterans Inc.staff.
                        </li>
                        <li>The authorization im giving shall continue as long as im receiving services at Veterans
                            Inc.or upto 1
                            year after ending services
                        </li>
                    </div>
                    <p class="consent_para4">I also release,discharge and exonerate Veterans Inc,and any person
                        funsihing my
                        Confidential any and all liability that might arise out of funishing.or inspecting these
                        documents . Finally
                        i also authorize Veterans Inc.staff and volunteers to release any of information to the
                        appropriate agents
                        in the event of a medical emergency.
                    </p>
                    <div class="row mt-5">
                        <div class="form-group col-md-8">
                            <label for="applicantsignature mt-5">Veterans Signature</label>
                            <input type="text" id="applicantsignature" class="form-control custom-input"
                                name="consent_veteran_signature" placeholder="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="fullname mt-5">Date</label>
                            <input type="text" id="date" class="form-control custom-input" name="consent_date"
                                placeholder="">
                        </div>
                    </div>
                </div>
                <!-- fifth page ends -->
                <!-- sixth page starts -->
                <div class="veterans container">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="Logo">
                    </div>
                    <p class="veterans_para">I hereby acknowledged that i have received a copy of the following
                        doucments and that
                        they were reviewed with me at the time of that intake for participation of Veteras Inc.Universla
                        Services
                        Program adminsitrated by Veterans Inc.and its identified subcontractors.
                    </p>
                    <div class="col-md-12 offset-1 d-flex justify-content-center">
                        <div class="col-md-6 mt-5 mb-5 custom-font-size">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="Fair and Equal Services Acknowledgement" id="defaultCheck1"
                                    name="consent_blanks_2[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Fair and Equal Services Acknowledgement
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Participant Rights"
                                    id="defaultCheck1" name="consent_blanks_2[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Participant Rights
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Griedvance Procedures"
                                    id="defaultCheck1" name="consent_blanks_2[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Griedvance Procedures
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="Warning and Early Termination Policy" id="defaultCheck1"
                                    name="consent_blanks_2[]">
                                <label class="form-check-label" for="defaultCheck1">
                                    Warning and Early Termination Policy
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="form-group col-md-8">
                            <label for="applicantsignature mt-5">Signature of Veteran</label>
                            <input type="text" id="applicantsignature" class="form-control custom-input" placeholder=""
                                name="consent_veteran_signature_2">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="fullname mt-5">Date</label>
                            <input type="text" id="date" class="form-control custom-input" placeholder=""
                                name="consent_date_2">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="form-group col-md-8">
                            <label for="applicantsignature mt-5">Veterans Inc.Case Manager</label>
                            <input type="text" id="applicantsignature" class="form-control custom-input" placeholder=""
                                name="consent_veteran_inc_case_signature">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="fullname mt-5">Date</label>
                            <input type="text" id="date" class="form-control custom-input" placeholder=""
                                name="consent_date_3">
                        </div>
                    </div>
                </div>
                <!-- sixth page ends  -->
                <!-- seventh page starts  -->
                <div class="container">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="Logo">
                    </div>
                    <h2 class="heading"> <i>HOMELESS VERIFICATION / SELF VERIFICATION</i></h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="applicantname">Applicant Name:</label>
                            <input type="text" id="applicantname" class="form-control"
                                placeholder="Enter Your full name:" name="hvsv_applicant_name">
                        </div>
                        <div class="form-group col-md-12 border-bottom-2">
                            <p for="instructions">Instructions: This form is to certify, via a third party, that the
                                above named applicant is currently “literally homeless" as defined
                                by program description. The third party completing this form must check one box below,
                                provide a description, and sign and date
                                this form. Clients may complete this self-certification if third party documentation
                                (i.e., written or oral verification) cannot be
                                obtained from an appropriate third party. Applicants may self-certify their current
                                “literally homeless” status per one of the
                                categories below and as defined by program description. Staff should review this form
                                with applicants and assist in completing,
                                as needed. Applicanis must sign and date this form.
                            </p>
                        </div>
                        <h4>
                            <i>I certify that (check only one):</i></h2>
                            <div class="col-md-12 mt-3 form-group">
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox" id="certify1" value="certify1"
                                        name="hvsv_checkbox_value">
                                    <label class="form-check-label" for="certify1">A person who lacks a fixed, regular,
                                        and adequate nighttime residence; an individual who will
                                        imminently lose his or her housing, has no subsequent residence identified,
                                        and/or who lacks the
                                        resources or support network needed to obtain other permanent housing, or victim
                                        of domestic violence.
                                        HVRP = Homeless, SSVF = Prevention</label>
                                </div>
                                <div class="form-check form-check-inline mt-3 border-bottom-3">
                                    <label class="form-check-label" for="certify1_description">Description of Veteran
                                        Situaion:</label><br><br>
                                    <textarea class="custom-text-area mb-4" name="hvsv_description"></textarea>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" id="certify2" value="certify2"
                                        name="hvsv_checkbox_value">
                                    <label class="form-check-label" for="certify2">I (we) am living in a car, park,
                                        abandoned building, bus/train station, airport, camping ground,
                                        or other place not designed for or ordinarily used as a regular sleeping
                                        accommodation.</label>
                                </div>
                                <div class="form-check form-check-inline mt-3 border-bottom-3">
                                    <label class="form-check-label" for="certify2_description">Description of Where You
                                        Are Staying:</label><br><br>
                                    <textarea class="custom-text-area mb-4" name="hvsv_description"></textarea>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" id="certify3" value="certify3"
                                        name="hvsv_checkbox_value">
                                    <label class="form-check-label" for="certify3">I (we) am staying in an emergency
                                        shelter OR a transitional housing program for people who
                                        are homeless OR a hotel or motel that is paid for by a charity or government
                                        program.</label>
                                </div>
                                <div class="form-check form-check-inline mt-3 border-bottom-3">
                                    <label class="form-check-label" for="certify3_input1">Shelter, Transitional Housing
                                        or Hotel/Motel Name:</label><br><br>
                                    <input type="text" id="certify3_input1" class="form-control mb-3"
                                        name="hvsv_description">
                                    <label class="form-check-label" for="certify3_input2">Location:</label><br><br>
                                    <input type="text" id="certify3_input2" class="form-control mb-3"
                                        name="hvsv_description">
                                    <label class="form-check-label" for="certify3_input3">If Hotel/Motel: Name of
                                        Charity/Program Paying for Stay:</label><br><br>
                                    <input type="text" id="certify3_input3" class="form-control mb-4"
                                        name="hvsv_description">
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" id="certify4" value="certify4"
                                        name="hvsv_checkbox_value">
                                    <label class="form-check-label" for="certify4">Exiting an institution where | have
                                        been staying for 90 days or less AND | stayed in an
                                        emergency shelter OR a place not designed for or ordinarily used as a regular
                                        sleeping
                                        accommodation immediately prior to entering that institution.</label>
                                </div>
                                <div class="form-check form-check-inline mt-3 border-bottom-3">
                                    <label class="form-check-label" for="certify4_input1">Name of
                                        Institution:</label><br><br>
                                    <input type="text" id="certify4_input1" class="form-control mb-3"
                                        name="hvsv_description">
                                    <label class="form-check-label" for="certify4_input2">Location:</label><br><br>
                                    <input type="text" id="certify4_input2" class="form-control mb-3"
                                        name="hvsv_description">
                                    <label class="form-check-label" for="certify4_input3">Date of
                                        Admission:</label><br><br>
                                    <input type="text" id="certify4_input3" class="form-control mb-3"
                                        name="hvsv_description">
                                    <label class="form-check-label" for="certify4_input4">Description of Unsheltered
                                        Location:</label><br><br>
                                    <textarea class="custom-text-area mb-4" name="hvsv_description"></textarea>
                                    <label class="form-check-label" for="certify4_input5">Authorized Agency
                                        Representative Signature:</label><br><br>
                                    <input type="text" id="certify4_input5" class="form-control mb-3"
                                        name="hvsv_description">
                                    <label class="form-check-label" for="certify4_input6">Date:</label><br><br>
                                    <input type="date" id="certify4_input6" class="form-control mb-4"
                                        name="hvsv_description">
                                </div>
                                <div class="row mt-5">
                                    <div class="form-group col-md-8">
                                        <label for="applicantsignature mt-5">Applicant Signature :</label>
                                        <input type="text" id="applicantsignature" class="form-control custom-input"
                                            placeholder="" name="hvsv_applicant_signature">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="fullname mt-5">Date:</label>
                                        <input type="text" id="date" class="form-control custom-input" placeholder=""
                                            name="hvsv_applicant_date">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="container">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="Logo">
                    </div>
                    <h3 class="text-center mb-3">Participant Agreement and Right to Terminate</h3>
                    <div class="col-md-12">
                        <p>As a participant within the Veterans Inc. Program, | understand that participation is
                            completely voluntary for me
                            and/or my household.
                        </p>
                        <p>I understand that the services provided by this program are time-limited and are not meant to
                            be permanent or
                            long-term assistance. | also understand that in order to receive or maintain assistance |
                            must adhere to
                            specific program requirements.
                        </p>
                        <p><b>Program Requirements:</b></p>
                        <ol>
                            <li>Working collaboratively with Veterans Inc. staff and applicable service providers.</li>
                            <li>Actively participate in the development and successful outcome of my Individual Service
                                Plan(s);
                            </li>
                            <li>Participating in stabilization services following my placement in permanent housing (if
                                applicable);
                            </li>
                            <li>Notifying my Case Manager within 72 business hours of any changes to my household income
                                or
                                housing status (if applicable);
                            </li>
                            <li>Developing and adhering to a monthly household budget, if needed.</li>
                        </ol>
                        <p><b>Early Program Termination:</b></p>
                        <ol>
                            <li>You may be terminated early from the Veterans Inc. Program for not following program
                                requirements;
                            </li>
                            <li>Providing false or misleading information;</li>
                            <li>Not complying with staff requests for information;</li>
                            <li>Engaging in unlawful activity, threats, violence, acts of terrorism, or any other
                                behavior that poses
                                a threat to agency personnel, agency affiliated organizations, and groups or
                                contractors.
                            </li>
                        </ol>
                        <p><b>Program Completion:</b></p>
                        <p>You will be dismissed from Veterans Inc. Services Programs on the Date of Completion; which
                            will be the date
                            in which the requested supportive services are completed and no longer needed.
                        </p>
                        <p><b>* </b>All participant households will receive mailed written confirmation and justified
                            reason(s). Copy of termination
                            and/or completion Setter will be kept on record and placed within participant file.
                        </p>
                        <div class="row mt-5">
                            <div class="form-group col-md-8">
                                <label for="applicantsignature mt-5">Participant Name (Print)</label>
                                <input type="text" id="applicantsignature" class="form-control custom-input"
                                    placeholder="" name="pa_name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fullname mt-5">(Signature)</label>
                                <input type="text" id="date" class="form-control custom-input" placeholder=""
                                    name="pa_signature_1">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="form-group col-md-8">
                                <label for="applicantsignature mt-5">Case Manager Name (Print)</label>
                                <input type="text" id="applicantsignature" class="form-control custom-input"
                                    placeholder="" name="pa_case_manager_name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fullname mt-5">(Signature)</label>
                                <input type="text" id="date" class="form-control custom-input" placeholder=""
                                    name="pa_signature_2">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="fullname mt-5">Date:</label>
                            <input type="text" id="date" class="form-control custom-input" placeholder=""
                                name="pa_date">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="Logo">
                    </div>
                    <h2 class="heading"> <i>Individual Employnment Plan </i></h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fullname">Client Name</label>
                            <input type="text" id="fullname" class="form-control" placeholder="Enter Your Client Name"
                                name="iep_client_name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Registered @ CC:</label>
                            <input type="text" id="lastname" class="form-control"
                                placeholder="Enter your Registered @ CC" name="iep_registered@cc">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">DVOP</label>
                            <input type="text" id="lastname" class="form-control" placeholder="Enter DVOP"
                                name="iep_dvop">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">JOB Seeker #</label>
                            <input type="text" id="lastname" class="form-control" placeholder="Enter JOB Seeker #"
                                name="iep_job_seeker">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Transportation?:</label>
                            <input type="text" id="lastname" class="form-control" placeholder="Car/ Bus/ Walk"
                                name="iep_transportation">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Licenses: Drivers Lic.?</label>
                            <input type="text" id="lastname" class="form-control"
                                placeholder="Class D / CDL A,B, / 7D (School Van)" name="iep_licenses">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Looking For:</label>
                            <input type="number" id="lastname" class="form-control" placeholder="FT/PT Hrs"
                                name="iep_looking_for">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Do You Have a Resume?</label>
                            <input type="text" id="lastname" class="form-control" placeholder="Yes / No / Sort of"
                                name="iep_resume">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Restrictions</label>
                            <textarea class="text-area-individual" id=""
                                placeholder="(i.e. No overnights/ On bus route/ No heavy lifting)"
                                name="iep_restrictions"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Job Title/ Titles</label>
                            <textarea class="text-area-individual" id=""
                                placeholder="(i.e. Secretary / HR Generalist / B2B Sales person / Diesel Mechanic / Executive Chef)"
                                name="iep_job_titles"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Skills In This Field</label>
                            <textarea class="text-area-individual" id=""
                                placeholder="(i.e. Years of Exp. / State Lic. / Certifications / Software / General knowledge)"
                                name="iep_skills"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Short Term Goal:</label>
                            <textarea class="text-area-individual" id="" placeholder="Short Term Goal:"
                                name="iep_short_term_goal"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Long Term Goal:</label>
                            <textarea class="text-area-individual" id="" placeholder="Short Term Goal:"
                                name="iep_long_term_goal"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Any Training Required</label>
                            <textarea class="text-area-individual" id="" placeholder="Any Training Required"
                                name="iep_training"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3 form-group ">
                            <label>Desired Industry (Select From List):</label><br>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="male" value="male"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="male">Administration (Office Work)</label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Construction </label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Defense</label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Education</label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Entertainment </label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Financial Food </label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Healthcare </label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Hospitality </label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Insurance </label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Manufacturing </label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Mechanical </label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Pharmaceutical </label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Retail </label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Sales </label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Security</label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Social Work</label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Software (IT)</label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Transportation (Driving)</label>
                            </div>
                            <div class="form-check form-check-inline-individual-employnment">
                                <input class="form-check-input" type="checkbox" id="female" value="female"
                                    name="iep_desired_industry[]">
                                <label class="form-check-label" for="female">Other</label>
                            </div>
                        </div>
                        <div class="text-center w-100">
                            <button type="button" id="form1_btn" class="btn btn-outline-dark">NEXT</button>
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary btn-submit">Submit</button> -->
                </div>
            </div>
            <div id="form2">
                <div class="container">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="Logo">
                    </div>
                    <h2 class="heading"> <i>Purchase Request Form</i></h2>
                    <div class="row">
                        <div class="col-md-12 mt-3 form-group ">
                            <label>Purchase Request Form:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="purchase_request[]" type="checkbox" id="male"
                                    value="Check Request">
                                <label class="form-check-label" for="male">Check Request</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="purchase_request[]" type="checkbox" id="female"
                                    value="URGENT* Needed within 24 Hours">
                                <label class="form-check-label" for="female">URGENT* Needed within 24 Hours</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="purchase_request[]" type="checkbox" id="female"
                                    value="Petty Cash Reques">
                                <label class="form-check-label" for="female">Petty Cash Reques</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="purchase_request[]" type="checkbox" id="female"
                                    value="Hand Deliver to:">
                                <label class="form-check-label" for="female">Hand Deliver to:</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="purchase_request[]" type="checkbox" id="female"
                                    value="Credit Card Purchase Request">
                                <label class="form-check-label" for="female">Credit Card Purchase Request</label>
                            </div>
                        </div>
                    </div>
                    <h4 class="mt-5 text-center">A quote must be attached to this form</h4>
                    <h5 class=" text-center">Please complete the following:</h5>
                    <div class="form-row mt-5">
                        <div class="form-group col-md-6">
                            <label for="fullname">Amount</label>
                            <input type="number" id="fullname" name="amount" class="form-control"
                                placeholder="Enter Your Amout">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Vendor Name</label>
                            <input type="text" id="lastname" name="vendor_name" class="form-control"
                                placeholder="Enter Vendor Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Address</label>
                            <input type="text" id="lastname" name="address" class="form-control"
                                placeholder="Enter Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Description of purchase/items/services</label>
                            <input type="text" id="lastname" name="description_purchases" class="form-control"
                                placeholder="Enter Description of purchase/items/services">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Name of the Grant or Program</label>
                            <input type="text" id="lastname" name="name_grant_program" class="form-control"
                                placeholder="Enter Name of the Grant or Program">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Requester Name</label>
                            <input type="text" id="lastname" name="requester_name" class="form-control"
                                placeholder="Enter Requester Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">ApproverName:</label>
                            <input type="text" id="lastname" name="approver_name" class="form-control"
                                placeholder="Enter ApproverName:">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Date of Request</label>
                            <input type="number" id="lastname" name="date_request" class="form-control"
                                placeholder="Enter Date of Request">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Date of Approval</label>
                            <input type="number" id="lastname" name="date_approval" class="form-control"
                                placeholder="Enter Date of Approval ">
                        </div>
                        <div class="col-md-6">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" id="fullname" name="requester_signature"
                                class="form-control custom-input" placeholder="">
                            <label for="fullname mt-5">Requester Signature :</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" id="fullname" name="approver_signature" class="form-control custom-input"
                                placeholder="">
                            <label for="fullname mt-5">Approver Signature :</label>
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary btn-submit">Submit</button> -->
                    <p>Email Completed form to <a href="mailto:purchasing@veteransinc.org"
                            class="email_purchasing">purchasing@veteransinc.org</a>. All requests will be processed <br>
                        weekly on
                        Wednesdays, unless the request is URGENT. Please see the description above.
                    </p>
                </div>
                <div class="container">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="Logo">
                    </div>
                    <div class="form-row mt-5">
                        <div class="form-group col-md-12">
                            <label for="lastname">Acknowledge</label>
                            <textarea class="text-area-individual" name="acknowledge" id=""
                                placeholder="| have received the following goods"></textarea>
                        </div>
                        <div class="form-group col-md-4 mt-3">
                            <input type="text" id="fullname" name="veterans_name" class="form-control custom-input"
                                placeholder="">
                            <label for="fullname mt-5">Veterans Name:</label>
                        </div>
                        <div class="form-group col-md-4 mt-3">
                            <input type="text" id="fullname" name="veterans_signature" class="form-control custom-input"
                                placeholder="">
                            <label for="fullname mt-5">Veterans Signature :</label>
                        </div>
                        <div class="form-group col-md-4 mt-3">
                            <input type="number" id="fullname" name="date" class="form-control custom-input"
                                placeholder="">
                            <label for="fullname mt-5">Date :</label>
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary btn-submit">Submit</button> -->
                </div>
                <div class="container">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="Logo">
                    </div>
                    <h2 class="heading"> <i>Serving Veterans aud Thr Familiy Across America</i></h2>
                    <h4 class="mt-5 text-center">Employment Verification</h4>
                    <div class="form-row mt-5">
                        <div class="form-group col-md-6">
                            <label for="fullname">Name</label>
                            <input type="number" id="fullname" name="ev_name" class="form-control"
                                placeholder="Enter Your Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Social Security Number</label>
                            <input type="number" id="lastname" name="ev_ss_number" class="form-control"
                                placeholder="Enter Social Security Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Address</label>
                            <input type="text" id="lastname" name="ev_address" class="form-control"
                                placeholder="Enter Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Phone Number</label>
                            <input type="number" id="lastname" name="ev_phone_number" class="form-control"
                                placeholder="Enter Phone Number">
                        </div>
                        <h4 class="mt-5 mb-5 text-center col-md-12">Employment Verification</h4>
                        <div class="form-group col-md-6">
                            <label for="fullname">Name of Employer</label>
                            <input type="text" id="fullname" name="ev_employer_name" class="form-control"
                                placeholder="Enter Your Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname">Start Date</label>
                            <input type="number" id="fullname" name="ev_start_date" class="form-control"
                                placeholder="Enter Start Date">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname">Address</label>
                            <input type="text" id="fullname" name="ev_date" class="form-control"
                                placeholder="Enter Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname">Phone Number</label>
                            <input type="number" id="fullname" name="ev_phone_number_2" class="form-control"
                                placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname">Contact Person</label>
                            <input type="number" id="fullname" name="ev_contact_person" class="form-control"
                                placeholder="Enter Contact Person">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname">Title</label>
                            <input type="text" id="fullname" name="ev_title" class="form-control"
                                placeholder="Enter Title ">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname"> Client's Job Title</label>
                            <input type="text" id="fullname" name="ev_clients_job_title" class="form-control"
                                placeholder="Enter Client's Job Title">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname"> HRS per week</label>
                            <input type="text" id="fullname" name="ev_hrs_week" class="form-control"
                                placeholder="Enter HRS per week">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname"> Wage</label>
                            <input type="text" id="fullname" name="ev_wage" class="form-control"
                                placeholder="Enter Wage">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname"> Veterans Inc. Provided: Tools, Uniform, Supplies</label>
                            <input type="text" id="fullname" name="ev_veterans_provided" class="form-control"
                                placeholder="Enter Veterans Inc. Provided: Tools, Uniform, Supplies">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname"> Date Placement Confirmed</label>
                            <input type="number" id="fullname" name="ev_date_placement" class="form-control"
                                placeholder="Enter  Date Placement Confirmed">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname"> Submitted By</label>
                            <input type="number" id="fullname" name="ev_submitted_by" class="form-control"
                                placeholder="Enter  Submited By">
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary btn-submit">Submit</button> -->
                </div>
                <div class="container">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="Logo">
                    </div>
                    <h2 class="heading"> <i>Serving Veterans aud Thr Familiy Across America</i></h2>
                    <h4 class="mt-5 text-center"><u>AJC Enrollnment Form</u></h4>
                    <div class="form-row mt-5">
                        <div class="form-group col-md-6">
                            <label for="fullname">Veterant Name</label>
                            <input type="text" id="fullname" name="ajc_veterans_name" class="form-control"
                                placeholder="Enter Your Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Veteran Address</label>
                            <input type="text" id="lastname" name="ajc_veterans_address" class="form-control"
                                placeholder="Enter Veteran Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" id="dob" name="ajc_dob" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dob">Date of Service:</label>
                            <input type="date" id="dob" name="ajc_dos" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Email</label>
                            <input type="text" id="lastname" name="ajc_email" class="form-control"
                                placeholder="Enter Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Phone Number</label>
                            <input type="number" id="lastname" name="ajc_phone_number" class="form-control"
                                placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Client</label>
                            <input type="text" id="lastname" name="ajc_client" class="form-control"
                                placeholder="Enter Client Only or Client with Family">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">DVOP Name</label>
                            <input type="text" id="lastname" name="ajc_dvop_name" class="form-control"
                                placeholder="Enter DVOP Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">DVOP Telephone #:</label>
                            <input type="number" id="lastname" name="ajc_telephone" class="form-control"
                                placeholder="Enter DVOP Telephone #:">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Date Of Enrollnment:</label>
                            <input type="date" id="lastname" name="ajc_doe" class="form-control"
                                placeholder="Enter Date Of Enrollnment:">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">JobSeeker ID Number:</label>
                            <input type="number" id="lastname" name="ajc_jobseeker_id" class="form-control"
                                placeholder="Enter JobSeeker ID Number: ">
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary btn-submit">Submit</button> -->
                </div>
                <div class="container">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="Logo">
                    </div>
                    <h2 class="report_heading"> <i>Extra Data for report</i></h2>
                    <h4 class="veterans_client">Client name: <input type="text" name="extra_data_client_name"
                            id="field"></h4>
                    <h4 class="veterans_client">Client enrolled in job center?
                        <input class="form-check-input form-check-input-sm" name="extra_data_client_enolled[]"
                            type="radio" value="Yes?" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            Yes?
                        </label>
                        <input class="form-check-input form-check-input-sm" name="extra_data_client_enolled[]"
                            type="radio" value="No?" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            No?
                        </label>
                    </h4>
                    <h4 class="date_enroll">Date enrolled <input type="text" name="extra_data_date_name" id="field">
                    </h4>
                    <h4 class="ivtp">IVTP(Incarceraetd Veterans Transition Program)Eligible?
                        <input class="form-check-input form-check-input-sm" name="extra_data_ivtp[]" type="radio"
                            value="Yes?" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            Yes?
                        </label>
                        <input class="form-check-input form-check-input-sm" name="extra_data_ivtp[]" type="radio"
                            value="No?" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            No?
                        </label>
                    </h4>
                    <h4 class="ivtp">Episodic Homeless-12 months of homeless(Chronically Homeless)?
                        <input class="form-check-input form-check-input-sm" name="extra_data_episodic[]" type="radio"
                            value="Yes?" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            Yes?
                        </label>
                        <input class="form-check-input form-check-input-sm" name="extra_data_episodic[]" type="radio"
                            value="No?" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            No?
                        </label>
                    </h4>
                    <h4 class="ivtp">Were work attire,rools,or equipment provided?
                        <input class="form-check-input form-check-input-sm" name="extra_data_work[]" type="radio"
                            value="Yes?" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            Yes?
                        </label>
                        <input class="form-check-input form-check-input-sm" name="extra_data_work[]" type="radio"
                            value="No?" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            No?
                        </label>
                        If yes date: <input type="text" id="field">
                    </h4>
                    <h3 class="client_programs mt-4">Client Co-enrolled in other grant programs (check those that
                        apply):
                    </h3>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_client_coenrolled[]"
                            type="checkbox" value="SSVF" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            SSVF
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_client_coenrolled[]"
                            type="checkbox" value="GPD" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            GPD
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_client_coenrolled[]"
                            type="checkbox" value="HUD/VASH" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            HUD/VASH
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_client_coenrolled[]"
                            type="checkbox" value="HPRP" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            HPRP
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_client_coenrolled[]"
                            type="checkbox" value="FEMA" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            FEMA
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_client_coenrolled[]"
                            type="checkbox" value="NAHASDA" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            NAHASDA
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h3 class="client_programs mt-4">Referral made for other services(If appropriate):</h3>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_referral[]" type="checkbox"
                            value="SSVF" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            SSVF
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_referral[]" type="checkbox"
                            value="GPD" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            GPD
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_referral[]" type="checkbox"
                            value="HUD/VASH" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            HUD/VASH
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_referral[]" type="checkbox"
                            value="HPRP" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            HPRP
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_referral[]" type="checkbox"
                            value="FEMA" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            FEMA
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_referral[]" type="checkbox"
                            value="NAHASDA" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            NAHASDA
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h3 class="client_programs mt-4">Trainings:</h3>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_trainings[]"
                            type="checkbox" value="On the job" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            On the job
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_trainings[]"
                            type="checkbox" value="Technical" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            Technical
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_trainings[]"
                            type="checkbox" value="Enterpreneurial" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            Enterpreneurial
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_trainings[]"
                            type="checkbox" value="Customized" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            Customized
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <h5 class="co_programs mt-2">
                        <input class="form-check-input form-check-input-sm" name="extra_data_trainings[]"
                            type="checkbox" value="Other" id="defaultCheck1">
                        <label class="form-check-label labelll" for="defaultCheck1">
                            Other
                        </label>
                        <input type="text" id="field">
                    </h5>
                    <div class="text-center w-100">
                        <button type="submit" id="form2_btn" class="btn btn-outline-dark">SUBMIT</button>
                    </div>
                </div>
            </div>
    </div>
    <!-- seventh page ends  -->
    </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            // Functionality for the "Are you a homeless veteran?" question
            $("#homeless").change(function () {
                if ($(this).val() === "yes") {
                    $("#homelessDetails").removeClass("hidden");
                } else {
                    $("#homelessDetails").addClass("hidden");
                }
            });

            // Functionality for the additional details dropdown in the homeless veteran section
            $("#homelessOption").change(function () {
                if ($(this).val() === "other") {
                    $("#otherDetails").removeClass("hidden");
                } else {
                    $("#otherDetails").addClass("hidden");
                }
            });

            // Functionality for switching between questionnaire and form1
            $("#questionnaire_btn").click(function () {
                $("#questionnaire").hide();
                $("#form1").show();
            });

            // Functionality for switching between form1 and form2
            $("#form1_btn").click(function () {
                $("#form1").hide();
                $("#form2").show();
            });

            // Functionality for the "Are you a homeless veteran?" question in form2
            $("#homeless_1").change(function () {
                if ($(this).val() === "yes") {
                    $("#homelessDetails_1").removeClass("hidden");
                } else {
                    $("#homelessDetails_1").addClass("hidden");
                }
            });
        });
    </script>

</body>

</html>