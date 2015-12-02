<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-05-12
 * Time: 3:48 PM
 */
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vision EHR System is a software designed for recording Eye health issues in kids.
    Software required for Mobile Eye Clinic (MEC) project run by Canadian Council of the Blind ">
    <meta name="Keywords" content="MEC, CCB, Canadian Council of the Blind, Mobile Eye Clinic">
    <meta name="author" content="Canadian Council of the blind">

    <title>MEC | Vision EHR System | Canadian Council of the Blind | Lions Club</title>


    <!-- Bootstrap Core CSS -->
    <link href="../../Local/Resources/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../Local/dist/css/sb-admin-2.css" rel="stylesheet">
    <!--Consent form css-->
    <link href="../../Local/dist/css/consent_form_style.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../../Local/Resources/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script src="../../Local/Resources/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<form action="consent_form.php" method="get" name="formConsentForm">
    <div class="consentForm">
        <img src="../../Local/dist/img/eye%20logo.png" class="top-left-img">
        <img src="../../Local/dist/img/Lions_logo.png" class="top-right-img">
        <div class="top-center-title">
            <h1>PARENTAL CONSENT FORM FOR MEC</h1><br/>
            <sub>MOBILE EYE CLINIC (MEC)</sub><br/>
            <h3>At Location: <?php echo "Add Location"  ?></h3><br/>
        </div>
        <table class="tblContent" border="1">
            <tr>
                <td>TO:</td>
                <td>PARENTS/GUARDIANS</td>
            </tr>
            <tr>
                <td>FROM:</td>
                <td>Canadian Council of the Blind (CCB) – The VOICE OF THE BLIND™ in Canada
                    Founded in 1944 by blind war veterans
                </td>
            </tr>
            <tr>
                <td>
                    RE:
                </td>
                <td>
                    PARENTAL CONSENT FOR MEC
                </td>
            </tr>
        </table><br/>
        <p>
            <b>MEC</b> is a Mobile Eye Clinic program which brings an optometrist to schools to perform comprehensive eye exams for children. As an initiative of the Canadian Council of the Blind (founded in 1944 by blind war veterans in World War II), and in conjunction with local Lions clubs, the program will be offered at <?php /*Add location name */ ?> for students who have not had an eye exam in the last 12 months.
        </p>
        <p>All children need regular comprehensive eye examinations to determine if they have healthy eyes and vision. Often, children are not able to recognize that they have a vision problem. Statistics show that 1 in 4 children between the ages of five and nine have not had their eyes examined by an optometrist despite the fact that annual eye examinations are covered by OHIP for children 19 years of age and under.</p>
        <p class="noteBox">Please note that all <b>children are eligible</b> for an eye exam <b>as long as they have not received an eye exam with an optometrist in the last 12 months.</b></p>
        <p>If you would like your child to participate in MEC please complete the form on the next page.
        <p>An eye examination will be conducted by a licensed optometrist and will include an assessment of the following:</p>
        <ul>
            <li>Visual acuity (determining the size of detail the child can see);</li>
            <li>Eye coordination (eye alignment, movement, tracking, depth perception);</li>
            <li>Refraction (determining nearsightedness, farsightedness, and astigmatism using lenses);</li>
            <li>Eye health (using light and magnification to obtain a view of the internal structures of the eye, as well as assessing colour vision and pupil reflexes).</li>
        </ul>
        <p>You will receive a letter from the optometrist within one week of the clinic indicating whether the results of the eye exam were normal or if a vision-related problem was identified. Parents of all participants will receive a follow-up call and/or email from MEC.</p>
        <hr/>
        <p style="text-align: center;">If you have any questions, please contact the Canadian Council of the Blind at 613-567-0311 and ask for Monica or E-mail mreategui@ccbnational.net <br/>
            <!--Change button to submit and redirect with location info-->
           <br/><a href="student_info.php" class="btn btn-primary btn-lg"><i class="fa fa-edit"></i> Fill the form</a></p>

        <div class="bottom-center-img">
            <img src="../../Local/dist/img/OTF.png">
            <img src="../../Local/dist/img/SIO.png"><br/>
        </div>
    </div>
</form>
</body>
</html>