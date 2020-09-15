<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
          <!--include importing page to js and css -->
        <?php include 'pages/import.html'; ?>
    </head>
    <body class="usermodule_body">
        <div class="dash-header">
            <img src="img/hospital_logone1w.png" width="200px" height="80px;" class="login_logo" />
             <!-- include menu page for display options in navigation bar -->
            <?php include './pages/menu.html'; ?>
        </div>
        
         <!-- Invoice adding form -->
        <div class="newInvoice">
            <form method="POST" action="service/billing/saveinvoices.php">
                <img src="img/Document_text_edit.svg.png" width="45px"/>
                <p> Creating Invoice</p>
                <table class="tbl_newinvoivefrom">
                <tr>
                    <td> Invoice Number:</td>
                    <td><input type="text" name="Invoice_no"/></td>
                </tr>
                <tr>
                    <td>Patient Name:</td>
                    <td><?php include'./service/billing/patientNames.php' ?></td>
                </tr>
                </table>
                 <input type="submit" value="save" name="save" class="btnsave_newinv"/>
            </form>
            <button  class="show_InvoItem" onclick="show_InvoiceItem()">Next</button>
        </div>
         
          <!-- Invoices list-->
        <div class="showing_invoices">
            <form method="GET" action="billing.php">
                <img src="img/781777-200.png" width="50px"/>
            <p> Invoices </p>
            <?php include'./service/billing/displayInvoices.php' ?>
            </form>
    </div>
          
   <!-- Invoice items adding form -->
    <div id="InvoiceItems_form">
     <img src="img/Gray_Multiply (1).png" width="12px" class="close_InvoiceItem" onClick="close_InvoiceItem()"/>
            <form method="POST" action="service/billing/saveInvoiceItem.php">
                <p> Invoice Items</p>
                <table class="tbl_invoiceitemform">
                    <tr>
                    <td> Invoice Number:</td>
                    <td><?php include'./service/billing/invoiceNo.php' ?></td>
                </tr>
                <tr>
                    <td>Pateint desies:</td>
                    <td><?php include'./service/billing/patient_decies.php' ?></td>
                </tr>
                <tr>
                    <td>Doctor names:</td>
                    <td><?php include'./service/billing/DoctorNames.php' ?></td>
                </tr>
                <tr>
                    <td>Treatment:</td>
                    <td><?php include'./service/billing/treatements.php' ?></td>
                </tr>
                <tr>
                    <td> Admit date:</td>
                    <td><?php include'./service/billing/admitDates.php' ?></td>
                </tr>
                <tr>
                   <td> Stayed dates:</td>
                   <td><input type="text" name="stayed_dates" /></td> 
                </tr>
                <tr>
                    <td> Ammount:</td>
                    <td><input type="text" name="ammount" /></td>
                </tr>
                </table>
                <input type="submit" value="save" name="save" class="btnsave_newinvItem"/>
            </form>
            
        </div>
         
    </body>
</html>

