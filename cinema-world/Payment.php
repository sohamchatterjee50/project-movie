<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment</title>
<link rel="stylesheet" type="text/css" href="css/Payment.css">
</head>

<body>
<section>
<form action="Congo.php" method="post">
<div id="box" align="center">
      <fieldset>
        <legend>Payment</legend>
        <table align="center">
        <tr>
        <td width="50%" align="right" class="padtd">
        <label>Method of Payment:</label>
        </td>
        <td width="50%" align="left" class="padtd">
        <select class="select_box" required autofocus>
        <option selected disabled></option>
        <option>Debit Card</option>
        <option>Credit Card</option>
        </select>
        </td>
        </tr>
        <tr>
        <td width="50%" align="right" class="padtd">
        <label>Choose your Bank:</label>
        </td>
        <td width="50%" align="left" class="padtd">
        <select class="select_box" required autofocus>
        <option selected disabled></option>
        <option>State Bank of India</option>
        <option>Punjab National Bank</option>
        <option>UCO Bank</option>
        <option>Allahabad Bank</option>
        <option>Axis Bank</option>
        <option>ICICI Bank</option>
        </select>
        </td>
        </tr>
        <tr>
        <td align="center" colspan="2" class="padtd">
        <input class="input_box" type="text" name="t1" placeholder="Name on Card" required/>
        </td>
        </tr>
        <tr>
        <td align="center" colspan="2" class="padtd">
        <input class="input_box" type="text" maxlength="16" pattern="[0-9]{16}" title="Please enter 16 digits card number!" placeholder="Card Number" required/>
        </td>
        </tr>
        <tr>
        <td width="50%" align="center" class="padtd">
        <label>CVV</label>
        <input id="cvv_box" type="text" maxlength="3" pattern="[0-9]{3}" title="Please enter 3 digits CVV number!" placeholder="CVV" required/>
        </td>
        <td width="50%" align="left" class="padtd">
        <label>Expiry Date:</label>
        <input id="mm_box" type="number" placeholder="MM" required/>
        <input id="yyyy_box" type="number" placeholder="YYYY" required/>
        </td>
        </tr>
        <tr>
        <td align="center" colspan="2" class="padtd">
        <input id="pay_now" type="submit" value="Pay Now"/>
        </td>
        </tr>
        </table>
        </fieldset>
        </div>
        </form>
        <br/>
        <div>
        <p align="center" id="note"><span style="color:red"><strong>Note:-</strong></span> *Internet handling fees 2%.</p>
        </div>
        <br/>
        <div>
        <marquee>
        <table align="center" cellspacing="10px">
        <tr>
        <td>
        <p id="bankpartner">Our Banking partners :</p>
        </td>
        <td><div><img class="banklogo" src="images/bank_logo_images/sbi-logo-english.png"></div></td>
        <td><div><img class="banklogo" src="images/bank_logo_images/Punjab-National-Bank-PNB.jpg"></div></td>
        <td><div><img class="banklogo" src="images/bank_logo_images/thumb.php.jpg"></div></td>
        <td><div><img class="banklogo" src="images/bank_logo_images/1280px-Allahabad_Bank_Logo.svg.png"></div></td>
        <td><div><img class="banklogo" src="images/bank_logo_images/2000px-AXISBank_Logo.svg.png"></div></td>
        <td><div><img class="banklogo" src="images/bank_logo_images/Marketing-mix-of-ICICI-bank.jpg"></div></td>
        </tr>
        </table>
        </marquee>
        </div>
</section>
<?php include_once("footer.php");?>