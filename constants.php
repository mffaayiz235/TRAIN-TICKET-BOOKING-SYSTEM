<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

if (!class_exists('PHPMailer\PHPMailer\Exception')) {

  // require_once('PHPMailer_5.2.2/class.phpmailer.php');
  require_once 'PHPMailer/src/Exception.php';
  require_once 'PHPMailer/src/PHPMailer.php';
  require_once 'PHPMailer/src/SMTP.php';
} else {
  die("HArd");
}


include_once 'config.php';

define("SITE_NAME", $title);
date_default_timezone_set("Africa/Lagos");
$date = date('D, d-M-Y h:i:s A');
;
$date_small = date('d-M-Y');
;
//INSERT YOUR OWN PAYSTACK API KEYS
$paystack = "sk_test_c429f06edba192cb9fd411cc5701084ef176d780"; //Do not change this! Redirect URL http://localhost/train/pro/verify.php
if (!function_exists('connect')) {

  function connect()
  {
    $con = new mysqli("localhost", "root", "", "otrsphp");
    if (!$con)
      die("Database is being upgraded!");
    return $con;
  }
}


function sendMail($to, $subject, $msg)
{ //error_reporting(E_ALL);
  global $title;
  //die("<script>alert('".$_SERVER['PHP_SELF']."')</script>");
  // require 'vendor/autoload.php';
  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = "fromcodemail@mail.com"; // SMTP username
    $mail->Password = "0000001XYZZ"; // SMTP password
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to
    //Recipients
    $from_name = 'E-TICKET SYSTEM ';
    $mail->setFrom($mail->Username, $from_name);
    $mail->addAddress($to); // Name is optional
    $mail->addReplyTo("simbi@mail.com", "Name Name");
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Our Response</title>
      <style type="text/css">
      body {margin: 0; padding: 0; min-width: 100%!important;}
      img {height: auto;}
      .content {width: 100%; max-width: 600px;}
      .header {padding: 40px 30px 20px 30px;}
      .innerpadding {padding: 30px 30px 30px 30px;}
      .borderbottom {border-bottom: 1px solid #f2eeed;}
      .subhead {font-size: 15px; color: #ffffff; font-family: sans-serif; letter-spacing: 10px;}
      .h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;}
      .h1 {font-size: 33px; line-height: 38px; font-weight: bold;}
      .h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;}
      .bodycopy {font-size: 16px; line-height: 22px;}
      .button {text-align: center; font-size: 18px; font-family: sans-serif; font-weight: bold; padding: 0 30px 0 30px;}
      .button a {color: #ffffff; text-decoration: none;}
      .footer {padding: 20px 30px 15px 30px;}
      .footercopy {font-family: sans-serif; font-size: 14px; color: #ffffff;}
      .footercopy a {color: #ffffff; text-decoration: underline;}

      @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
      body[yahoo] .hide {display: none!important;}
      body[yahoo] .buttonwrapper {background-color: transparent!important;}
      body[yahoo] .button {padding: 0px!important;}
      body[yahoo] .button a {background-color: #e05443; padding: 15px 15px 13px!important;}
      body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #2f3942; border-radius: 5px; text-decoration: none!important; font-weight: bold;}
      }

      /*@media only screen and (min-device-width: 601px) {
        .content {width: 600px !important;}
        .col425 {width: 425px!important;}
        .col380 {width: 380px!important;}
        }*/

      </style>
    </head>

    <body yahoo bgcolor="#f6f8f1">
    <table width="100%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td>
        <!--[if (gte mso 9)|(IE)]>
          <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td>
        <![endif]-->
        <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td bgcolor="#c7d8a7" class="header">
              <table width="70" align="left" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="70" style="padding: 0 20px 20px 0;">
                    <img class="fix" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaLaZeHpWXMfJd9YmNyfcugjsjCUiyh_-PpQ&usqp=CAU" width="70" height="90" border="0" alt="" />
                  </td>
                </tr>
              </table>
              <!--[if (gte mso 9)|(IE)]>
                <table width="425" align="left" cellpadding="0" cellspacing="0" border="0">
                  <tr>
                    <td>
              <![endif]-->
              <table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 425px;">
                <tr>
                  <td height="70">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="h2" style="padding: 0 0 0 3px;">
                          E-TICKET SYSTEM
                        </td>
                      </tr>
                      <tr>
                        <td class="h3" style="padding: 5px 0 0 0;">
                          URGENT NOTIFICATION
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <!--[if (gte mso 9)|(IE)]>
                    </td>
                  </tr>
              </table>
              <![endif]-->
            </td>
          </tr>
          <tr>
            <td class="innerpadding borderbottom">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="h2">
                   Howdy, How are you doing?
                  </td>
                </tr>
                <tr>
                  <td class="bodycopy">
                    You have an urgent message</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td class="innerpadding borderbottom">
              <table width="115" align="left" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="115" style="padding: 0 20px 20px 0;">
                    <img class="fix" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/article1.png" width="60" height="60" border="0" alt="" />
                  </td>
                </tr>
              </table>
              <!--[if (gte mso 9)|(IE)]>
                <table width="380" align="left" cellpadding="0" cellspacing="0" border="0">
                  <tr>
                    <td>
              <![endif]-->
              <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 380px;">
                <tr>
                  <td>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="bodycopy" align="justify">
                          ' . $msg . '
                        </td>
                      </tr>
                      <tr>
                        <td style="padding: 20px 0 0 0;">
                          <table class="buttonwrapper" bgcolor="#e05443" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td class="button" height="45">
                                <a href="' . $_SERVER["HTTP_HOST"] . '">Visit Us!</a>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <!--[if (gte mso 9)|(IE)]>
                    </td>
                  </tr>
              </table>
              <![endif]-->
            </td>
          </tr>

          <tr>
            <td class="innerpadding bodycopy">
            If you would like to reach out to us, talk to us any time via the feedback in your account.<br/>Thank You!
            </td>
          </tr>
          <tr>
            <td class="footer" bgcolor="#44525f">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" class="footercopy">
                  ' . $title . '<br/>

                  </td>
                </tr>
                <tr>
                  <td align="center" style="padding: 20px 0 0 0;">

                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
              </td>
            </tr>
        </table>
        <![endif]-->
        </td>
      </tr>
    </table>
    </body>
    </html>

    ';
    $mail->SMTPOptions = array(
      'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      )
    );
    $mail->AltBody = $msg;

    $mail->send();
    return 1;
  } catch (Exception $e) {
    // var_dump($e);
    // exit;
    // return 0;
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    return 0;
  }
  return 0;
}




function genSeat($id, $type, $number)
{
  $conn = connect();
  $type_seat = $conn->query("SELECT train.first_seat as first, train.second_seat as second FROM schedule INNER JOIN train ON train.id = schedule.train_id WHERE schedule.id = '$id'")->fetch_assoc();
  $me = $type_seat[$type];
  $query = $conn->query("SELECT SUM(no) AS no FROM booked WHERE schedule_id = '$id' AND class = '$type'")->fetch_assoc();
  $no = $query['no'];
  if ($no == null)
    $no = 1;
  else
    $no++;
  //Multiple Seats or Not
  if ($number == 1) {
    while (strlen($no) != strlen($me)) {
      $no = "0" . $no;
    }
    return strtoupper(substr($type, 0, 1)) . "$no";
  } else {
    $start = $no;
    $end = $no + ($number - 1);
    while (strlen($start) != strlen($me)) {
      $start = "0" . $start;
    }
    while (strlen($end) != strlen($me)) {
      $end = "0" . $end;
    }
    $append = strtoupper(substr($type, 0, 1));

    return $append . $start . " - " . $append . $end;
  }
}


function genCode($id, $user, $class)
{
  $conn = connect();
  $query = $conn->query("SELECT SUM(no) AS no FROM booked WHERE schedule_id = '$id'")->fetch_assoc();
  $no = $query['no'];
  if ($no == null)
    $no = 1;
  else
    $no++;
  $number = "";
  switch (strlen($id)) {
    case 1:
      $number = "00";
      break;
    case 2:
      $number = "0";
      break;
    default:
      $number = "0";
      break;
  }
  $code = date('Y') . "/$number" . $id . "/" . $no . mt_rand(1, 882);
  return $code;
}

function login($username, $password)
{
  $password = md5($password);
  $q = connect()->query("SELECT * FROM passenger WHERE email = '$username' AND password = '$password' AND status = '1' ")->num_rows;
  if ($q == 1)
    return 1;
  return 0;
}

function adminLogin($username, $password)
{
  $q = connect()->query("SELECT * FROM users WHERE username = '$username' AND password = '$password' ")->num_rows;
  if ($q == 1)
    return 1;
  return 0;
}

function getIndividualName($id, $conn = null)
{
  $conn = connect();
  $q = $conn->query("SELECT * FROM passenger WHERE id = '$id'")->fetch_assoc();
  return $q['name'];
}

function uploadFile($file)
{

  $loc = genRand() . "." . strtolower(pathinfo(@$_FILES[$file]['name'], PATHINFO_EXTENSION));
  $valid_extension = array("jpg", "png", "jpeg");
  //Check for valid file size
  if (($_FILES[$file]['size'] && !in_array(strtolower(pathinfo(@$_FILES[$file]['name'], PATHINFO_EXTENSION)), $valid_extension)) || ($_FILES[$file]['size'] && $_FILES[$file]['error']) > 0) {
    return -1;
  }
  $upload = move_uploaded_file(@$_FILES[$file]['tmp_name'], "uploads/" . $loc);
  if ($upload) {
    chmod("uploads/" . $loc, 0777);
    return $loc;
  } else {
    return -1;
  }
}

function genRand()
{
  return md5(mt_rand(1, 3456789) . date('dmyhmis'));
}

function getImage($id, $conn)
{
  $row = $conn->query("SELECT loc FROM passenger WHERE id = '$id'")->fetch_assoc();
  if (strlen($row['loc']) < 10)
    return "images/trainlg.png";
  else
    return "uploads/" . $row['loc'];
}

function formatDate($date)
{
  return date('d-m-Y', strtotime($date));
}

function getRoutePath($id)
{
  $val = connect()->query("SELECT * FROM route WHERE id = '$id'")->fetch_assoc();
  return $val['start'] . " to " . $val['stop'];
}

function formatTime($time)
{
  $time = explode(":", $time);
  if ($time[0] > 12) {
    $string = ($time[0] - 12) . ":" . $time[1] . " PM";
  } else {
    $string = ($time[0]) . ":" . $time[1] . " AM";
  }
  return $string;
}

function getToday()
{
  return date('d-m-Y');
}

function getTime()
{
  return date('H:i');
}

function querySchedule($type)
{
  $today = getToday();
  $conn = connect();
  $row = 0;
  if ($type == 'future') {
    $row = $conn->query("SELECT * FROM `schedule` WHERE STR_TO_DATE(`date`,'%d-%m-%Y') >= STR_TO_DATE('$today','%d-%m-%Y')");
  } else {
    $row = $conn->query("SELECT * FROM `schedule` WHERE STR_TO_DATE(`date`,'%d-%m-%Y') <= STR_TO_DATE('$today','%d-%m-%Y')");
  }
  return $row;
}

function getRouteFromSchedule($id)
{
  $q = connect()->query("SELECT route_id as id FROM schedule WHERE id = '$id'")->fetch_assoc();
  return getRoutePath($q['id']);
}

function getFee($id, $type = 'second')
{
  if ($type == 'second') {
    $type = 'second_fee';
  } else {
    $type = 'first_fee';
  }
  $q = connect()->query("SELECT $type FROM schedule WHERE id = '$id'")->fetch_assoc();
  return $q[$type];
}

function getTotalBookByType($id)
{

  $con = connect()->query("SELECT SUM(no) as no FROM `booked` WHERE schedule_id = '$id' AND class = 'second'")->fetch_assoc();
  $con2 = connect()->query("SELECT SUM(no) as no FROM `booked` WHERE schedule_id = '$id' AND class = 'first'")->fetch_assoc();
  $no = $con['no'];
  $no2 = $con2['no'];
  $num = $no == null ? 0 : $con['no'];
  $num2 = $no2 == null ? 0 : $con2['no'];
  $qu = connect()->query("SELECT train.first_seat as first, train.second_seat as second FROM schedule INNER JOIN train ON train.id = schedule.train_id WHERE schedule.id = '$id'")->fetch_assoc();
  $first = $qu['first'];
  $second = $qu['second'];
  $first = intval($first);
  $second = intval($second);
  $num = intval($num);
  $num2 = intval($num2);
  return array("first" => $first, "second" => $second, "first_booked" => $num, "second_booked" => $num2);
}

function isScheduleActive($id)
{
  $today = getToday();
  $con = connect();
  $conn = $con->query("SELECT * FROM `schedule` WHERE STR_TO_DATE(`date`,'%d-%m-%Y') >= STR_TO_DATE('$today','%d-%m-%Y') AND `id` = '$id'");
  if ($conn->num_rows == 1) {
    $row = $conn->fetch_assoc();
    $time = getTime();
    $schedule_date = $row['date'];
    $schedule_time = $row['time'];
    if ($schedule_date == $today) {
      if (strtotime($schedule_time) <= strtotime($time))
        return false;
    }
    return true;
  }
  return false;
}

function getTrainName($id)
{
  $val = connect()->query("SELECT name FROM train WHERE id = '$id'")->fetch_assoc();
  return $val['name'];
}
function alert($msg)
{
  echo "<script>alert('$msg')</script>";
}

function load($link)
{
  echo "<script>window.location = ('$link')</script>";
}


function printClearance($id)
{
  ob_start();
  $con = connect();
  $me = $_SESSION['user_id'];
  $getCount = (connect()->query("SELECT schedule.id as schedule_id, passenger.name as fullname, passenger.email as email, passenger.phone as phone, passenger.loc as loc, payment.amount as amount, payment.ref as ref, payment.date as payment_date, schedule.train_id as train_id, booked.code as code, booked.no as no, booked.class as class, booked.seat as seat, schedule.date as date, schedule.time as time FROM booked INNER JOIN schedule on booked.schedule_id = schedule.id INNER JOIN payment ON payment.id = booked.payment_id INNER JOIN passenger ON passenger.id = booked.user_id WHERE booked.id = '$id'"));
  if ($getCount->num_rows != 1)
    die("Denied");
  $row = $getCount->fetch_assoc();
  $passenger_name = substr($fullname = ($row['fullname']), 0, 15);
  $name = $fullname;
  $phone = $row['phone'];
  $email = $row['email'];
  $timeframe = '<tr><th style="text-align:center"><b>Project Phase</b></th><th style="text-align:center"><b>Date Accepted</b></th></tr>';
  $date = $row['date'];
  $time = formatTime($row['time']);
  $uniqueCode = $row['code'];
  $route = getRouteFromSchedule($row['schedule_id']);
  $date = date("D d, M Y", strtotime($date));

  $barcode = "$fullname Ticket For $route - $date by $time. Ticket ID : $uniqueCode";
  $barcodeOutput = generateQR($id, $barcode);
  $loc = $row['loc'];
  $seat = $row['seat'];
  $train = getTrainName($row['train_id']);
  $class = $row['class'];
  $payment_date = $row['payment_date'];
  $amount = $row['amount'];
  $file_name = preg_replace('/[^a-z0-9]+/', '-', strtolower($passenger_name)) . ".pdf";
  require_once 'PDF/tcpdf_config_alt.php';

  // Include the main TCPDF library (search the library on the following directories).
  $tcpdf_include_dirs = array(
    realpath('PDF/tcpdf.php'),
    '/usr/share/php/tcpdf/tcpdf.php',
    '/usr/share/tcpdf/tcpdf.php',
    '/usr/share/php-tcpdf/tcpdf.php',
    '/var/www/tcpdf/tcpdf.php',
    '/var/www/html/tcpdf/tcpdf.php',
    '/usr/local/apache2/htdocs/tcpdf/tcpdf.php',
  );
  foreach ($tcpdf_include_dirs as $tcpdf_include_path) {
    if (@file_exists($tcpdf_include_path)) {
      require_once $tcpdf_include_path;
      break;
    }
  }

  class MYPDF extends TCPDF
  {
    //Page header
    public function Header()
    {
      // // get the current page break margin
      // $bMargin = $this->getBreakMargin();
      // // get current auto-page-break mode
      // $auto_page_break = $this->AutoPageBreak;
      // // disable auto-page-break
      // $this->SetAutoPageBreak(false, 0);
      // set bacground image
      // $img_file = K_PATH_IMAGES . "watermark.jpg";
      // die($img_file);
      // $this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
      // $this->SetAlpha(0.5);

      // // restore auto-page-break status
      // $this->SetAutoPageBreak($auto_page_break, $bMargin);
      // // set the starting point for the page content
      // $this->setPageMark();
    }
  }
  $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
  // $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, $pageLayout, true, 'UTF-8', false);
  // set document information
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor($fullname);
  $pdf->SetTitle($fullname . " Ticket");
  $pdf->SetSubject(SITE_NAME);
  $pdf->SetKeywords("Train Booking System, Rail, Rails, Railway, Booking, Project, System, Website, Portal ");


  // set default monospaced font
  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

  // set margins
  $pdf->SetMargins(PDF_MARGIN_LEFT, 7, PDF_MARGIN_RIGHT);
  // $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
  // $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

  // set auto page breaks
  $pdf->SetAutoPageBreak(true, 5);

  // set image scale factor
  $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

  // set some language-dependent strings (optional)
  if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once dirname(__FILE__) . '/lang/eng.php';
    $pdf->setLanguageArray($l);
  }

  // ---------------------------------------------------------

  // set default font subsetting mode
  $pdf->setFontSubsetting(true);

  // Set font
  // dejavusans is a UTF-8 Unicode font, if you only need to
  // print standard ASCII chars, you can use core fonts like
  // helvetica or times to reduce file size.
  $pdf->SetFont('dejavusans', '', 14, '', true);

  // Add a page
  // This method has several options, check the source code documentation for more information.
  $pdf->AddPage();
  $src = $barcodeOutput;
  // set text shadow effect
  $pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));
  // Set some content to print
  $html = <<<EOD
<style>
table th{font-weight:italic}
</style>
<h1 style="text-align:center"><img src="images/trainlg.png" width="100" height="100"/><br/>ONLINE TICKET RESERVATION SYSTEM<br/> TRAIN TICKET</h1> <div style="text-align:right; font-family:courier;font-weight:bold"><font size="+6">Ticket N<u>o</u>: $uniqueCode </font></div>
<table width="100%" border="1">
<tr><th colspan="2" style="text-align:center"><b>Personal Data</b></th></tr>
<tr><th><b>Full Name:</b></th><td>$fullname</td></tr>
<tr><th><b>Email:</b></th><td>$email</td></tr>
<tr><th><b>Contact:</b></th><td>$phone</td></tr>
<tr><td colspan="2" style="text-align:center"><b>Trip Detail</b></td></tr>
<tr><th><b>Route:</b></th><td>$route</td></tr>
<tr><th><b>Train:</b></th><td>$train</td></tr>
<tr><th><b>Class:</b></th><td>$class Class</td></tr>
<tr><th><b>Seat Number:</b></th><td>$seat</td></tr>
<tr><th><b>Date:</b></th><td>$date</td></tr>
<tr><th><b>Time:</b></th><td>$time</td></tr>
<tr><th colspan="2"  style="text-align:center"><b>Payment</b></th></tr>
<tr><th><b>Amount:</b></th><td>$ Rp. amount</td></tr>
<tr><th><b>Payment Date:</b></th><td>$payment_date</td></tr>


</table>

EOD;

  // @unlink($barcodeOutput);
  $html .= <<<EOD
<table width="100%">
<tr><td colspan="2"><p>&nbsp;</p></td></tr>
<tr><td colspan="2" style="text-align:center"><font size="-3"><i><em><strong>CAUTION: </strong></em> Any person who (1) Falsifies any of the data on this ticket or (2) uses a falsified ticket as true, Knowing it to be false is liable to prosecution. </i></font></td></tr>
<tr><td colspan="2" style="text-align:center"><font size="-3"><i><em><strong>NOTE: </strong></em> Be an hour early for all neccessary proceedings! </i></font></td></tr>
    
    <tr>
    
    <td style="text-align:left">
<img weight="180" height="180" src="uploads/$loc"></td>
    <td style="text-align:right">
    <img weight="180" height="180" src="$src"></td></tr></table>
EOD;
  // die($html);
  // Print text using writeHTMLCell()
  $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
  // ---------------------------------------------------------

  // Close and output PDF document
  // This method has several options, check the source code documentation for more information.
  $pdf->Output($file_name, 'D');
  @unlink($src);
}

function generateQR($id, $data)
{
  $imgname = intval($id) . ".png";
  // === Create qrcode image
  include 'phpqrcode/qrlib.php';
  QRcode::png($data, $imgname, QR_ECLEVEL_L, 11.45, false);

  // === Adding image to qrcode
  $QR = imagecreatefrompng($imgname);

  imagefilter($QR, IMG_FILTER_COLORIZE, 41, 255, 111); //     rgb(197, 167, 95) || rgb(27, 78, 25) || rgb(41, 22, 111) || rgb(15, 81, 22)
  imagealphablending($QR, false);

  // === Change image color
  $im = imagecreatefrompng($imgname);
  //This changes the color
  $r = 41;
  $g = 22;
  $b = 111;
  for ($x = 0; $x < imagesx($im); ++$x) {
    for ($y = 0; $y < imagesy($im); ++$y) {
      //imagefilter($im, IMG_FILTER_COLORIZE, 0, 255, 0); //This changes the color
      $index = imagecolorat($im, $x, $y);
      $c = imagecolorsforindex($im, $index);
      if (($c['red'] < 100) && ($c['green'] < 100) && ($c['blue'] < 100)) { // dark colors
        // here we use the new color, but the original alpha channel
        $colorB = imagecolorallocatealpha($im, 0x12, 0x2E, 0x31, $c['alpha']);
        imagesetpixel($im, $x, $y, $colorB);
      }
    }
  }

  imagepng($im, $imgname);
  imagedestroy($im);

  // === Convert Image to base64
  $type = pathinfo($imgname, PATHINFO_EXTENSION);
  $data = file_get_contents($imgname);
  $imgbase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
  chmod($imgname, 0777);

  // === Show image
  // $html = <<<EOD
  // <img src="$imgbase64" style="position:relative;display:block;width:200px;height:200px;margin:auto;">
  // EOD;

  // return array($imgname,$imgbase64);
  return $imgname;
}

function sum($id, $type = null)
{
  $conn = connect();
  if ($type == null) {
    $row = $conn->query("SELECT SUM(amount) as amount FROM `payment` INNER JOIN booked ON booked.payment_id = payment.id AND booked.schedule_id = payment.schedule_id WHERE payment.schedule_id = '$id'")->fetch_assoc();
  } else {
    $row = $conn->query("SELECT SUM(amount) as amount FROM `payment` INNER JOIN booked ON booked.payment_id = payment.id AND booked.schedule_id = payment.schedule_id WHERE payment.schedule_id = '$id' AND booked.class = '$type'")->fetch_assoc();
  }
  return $row['amount'] == null ? 0 : $row['amount'];
}





function printReport($id)
{
  ob_start();
  $con = connect();
  $getCount = (connect()->query("SELECT schedule.date as date, schedule.time as time, schedule.train_id as train, schedule.route_id as route, booked.seat as seat, passenger.name as fullname, booked.code as code, booked.class as class FROM booked INNER JOIN schedule ON schedule.id = booked.schedule_id INNER JOIN passenger ON passenger.id = booked.user_id WHERE booked.schedule_id = '$id' ORDER BY class "));

  $output = "<style>
    .a {
        text-align:left;
        width: 10%;
    }
    .b{
        width: 20%
    }.c{
    width:30%;
    }
    table {
        border: 1px solid green;
        border-collapse: collapse;
        width: 100%;
        white-space: nowrap;
      }
      
   
          table th.shrink {
        white-space: nowrap
      }
      th{
        font-weight:bolder;

      }
      .shrink {
        white-space: nowrap;
        width: 40%;

      }
      
      table td.expand {
        width: 99%
      }
 
    </style>";
  $sn = 0;
  $schedule = getRouteFromSchedule($id);
  if ($getCount->num_rows < 1) {
    echo "<script>alert('No passenger yet for this schedule!');window.location='admin.php?page=report'</script>";
    exit;
  }
  while ($row = $getCount->fetch_assoc()) {
    $date = $row['date'];
    $time = $row['time'];
    $train = getTrainName($row['train']);
    $route = getRouteFromSchedule($id);
    $time = formatTime($time);
    $sn++;
    $output .= '<tr><td class="a">' . $sn . '</td><td class="c">' . substr(ucwords(strtolower($row['fullname'])), 0, 15) . '</td><td class="shrink">' . $row['code'] . ' (' . ucwords(strtolower($row['class'])) . ')</td><td class="b">' . (strtoupper($row['seat'])) . '</td></tr>';
  }
  $start = '<table class="table" width="100%" border="1"><tr><th class="a">SN</th><th  class="c">Full Name</th><th  class="shrink">Code/Class</th><th  class="b">Seat No</th></tr>';
  $end = '</table>';
  $result = $start . $output . $end;
  // die($result);
  $file_name = preg_replace('/[^a-z0-9]+/', '-', strtolower('train_booking')) . ".pdf";
  require_once 'PDF/tcpdf_config_alt.php';

  // Include the main TCPDF library (search the library on the following directories).
  $tcpdf_include_dirs = array(
    realpath('PDF/tcpdf.php'),
    '/usr/share/php/tcpdf/tcpdf.php',
    '/usr/share/tcpdf/tcpdf.php',
    '/usr/share/php-tcpdf/tcpdf.php',
    '/var/www/tcpdf/tcpdf.php',
    '/var/www/html/tcpdf/tcpdf.php',
    '/usr/local/apache2/htdocs/tcpdf/tcpdf.php',
  );
  foreach ($tcpdf_include_dirs as $tcpdf_include_path) {
    if (@file_exists($tcpdf_include_path)) {
      require_once $tcpdf_include_path;
      break;
    }
  }

  class MYPDF extends TCPDF
  {
    //Page header
    public function Header()
    {
      // get the current page break margin
      $bMargin = $this->getBreakMargin();
      // get current auto-page-break mode
      $auto_page_break = $this->AutoPageBreak;
      // disable auto-page-break
      $this->SetAutoPageBreak(false, 0);
      // set bacground image
      $img_file = K_PATH_IMAGES . "watermark.jpg";
      // die($img_file);
      $this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
      $this->SetAlpha(0.5);

      // restore auto-page-break status
      $this->SetAutoPageBreak($auto_page_break, $bMargin);
      // set the starting point for the page content
      $this->setPageMark();
    }
  }
  $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
  // $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, $pageLayout, true, 'UTF-8', false);
  // set document information
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor("Admin");
  $pdf->SetTitle("Train Bookings " . " Ticket");
  $pdf->SetSubject(SITE_NAME);
  $pdf->SetKeywords("Train Booking System, Rail, Rails, Railway, Booking, Project, System, Website, Portal ");


  // set default monospaced font
  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

  // set margins
  $pdf->SetMargins(PDF_MARGIN_LEFT, 7, PDF_MARGIN_RIGHT);
  // $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
  // $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

  // set auto page breaks
  $pdf->SetAutoPageBreak(true, 5);

  // set image scale factor
  $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

  // set some language-dependent strings (optional)
  if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once dirname(__FILE__) . '/lang/eng.php';
    $pdf->setLanguageArray($l);
  }

  // ---------------------------------------------------------

  // set default font subsetting mode
  $pdf->setFontSubsetting(true);

  // Set font
  // dejavusans is a UTF-8 Unicode font, if you only need to
  // print standard ASCII chars, you can use core fonts like
  // helvetica or times to reduce file size.
  $pdf->SetFont('dejavusans', '', 12, '', true);

  // Add a page
  // This method has several options, check the source code documentation for more information.
  $pdf->AddPage();
  // set text shadow effect
  $pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));
  // Set some content to print
  $html = '<h5 style="text-align:center"><img src="images/trainlg.png" width="80" height="80"/><br/>ONLINE TICKET RESERVATION SYSTEM<br/> LIST OF BOOKINGS  FOR ' . $date . ' (' . $time . ')</h5> <div style="text-align:right; font-family:courier;font-weight:bold"><font size="+1">Train ' . $train . ' (' . $sn . ' Passengers) : ' . $schedule . ' </font></div>' . $result;
  // die($html);
  // Print text using writeHTMLCell()
  $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
  // ---------------------------------------------------------

  // Close and output PDF document
  // This method has several options, check the source code documentation for more information.
  $pdf->Output($file_name, 'D');
  @unlink($src);
}


function sendFeedback($msg)
{
  $me = $_SESSION['user_id'];
  $msg = connect()->real_escape_string($msg);
  $stmt = connect()->query("INSERT INTO feedback (user_id, message) VALUES ('$me', '$msg')");
  if ($stmt)
    return 1;
  return 0;
}

function getFeedbacks()
{
  $me = $_SESSION['user_id'];
  return connect()->query("SELECT * FROM feedback WHERE user_id = '$me'");
}

function replyTo($id, $reply)
{
  $con = connect();
  $reply = $con->real_escape_string($reply);
  $sql = $con->query("UPDATE feedback SET response = '$reply' WHERE id = '$id' ");
  if ($sql)
    return 1;
  return 0;
}