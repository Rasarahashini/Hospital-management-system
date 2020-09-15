//NIC checking function
function checkNIC() {
    var nic = document.getElementById("nic").value;
    //check NIC length
    if (nic.length > 10) {
        document.getElementById("nic").style.border = "red solid 1px";  //red textfield border 
        document.getElementById("nic-descriiptor").innerHTML = "Invalid NIC"; //pass message 
    } else {
        document.getElementById("nic").style.border = "#d2d6de solid 1px";  
        document.getElementById("nic-descriiptor").innerHTML = ""; 
    }
}

//forms showing and canceling functions 
function showStaffDialog() {
    document.getElementById("dlg").style.display = "block"; // show staff member adding form
}
function hideStaffDialog() {
    document.getElementById("dlg").style.display = "none";   //  cancel staff member adding form
}
function showSavepatient() {
    document.getElementById("module-content").style.display = "block";  // show patient adding form
}
function cancelSavepatient() {
    document.getElementById("module-content").style.display = "none";  // cancel patient adding form
}
function check_box(){
      document.getElementById("booking_date").style.display = "block";  // show booking form
}
function cancelbooking() {
    document.getElementById("booking_date").style.display = "none";  //  cancel booking form
}
function showAppoinment(){
     document.getElementById("appoinment-form").style.display = "block";  // show appointment adding form
}
function hideAppoinment() {
    document.getElementById("appoinment-form").style.display = "none";  // cancel appointment adding form
}
function show_savePatientDicease() {
    document.getElementById("save-patientdicies").style.display = "block";  // show patient decease adding form
}
function hide_savePatientdicease() {
    document.getElementById("save-patientdicies").style.display = "none";  //  cancel patient decease adding form
}
function show_saveTreatment() {
    document.getElementById("save_Treatements").style.display = "block";  // show treatement adding form
}
function hide_savetreatemnt() {
    document.getElementById("save_Treatements").style.display = "none";  // cancel treatement adding form
}
function show_addroom() {
    document.getElementById("addRoom").style.display = "block";  //show rooms adding form
}
function hide_saveroom() {
    document.getElementById("addRoom").style.display = "none";  // cancel rooms adding form
}
function show_InvoiceItem() {
    document.getElementById("InvoiceItems_form").style.display = "block";  // show invoice item adding form
}
function close_InvoiceItem() {
    document.getElementById("InvoiceItems_form").style.display = "none";  // cancel invoice item adding form
}