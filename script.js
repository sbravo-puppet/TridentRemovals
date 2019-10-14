function validateFeedbackForm(event) {    
    event.preventDefault();
    let form=document.forms['feedbackform'];
    let feedbackname=document.getElementById('feedbackname').value;
    let suburb=document.getElementById('suburb').value;
    let feedbacktext=document.getElementById('feedbacktext').value;
    if (feedbackname==null || feedbackname=="" || suburb==null || suburb=="" || feedbacktext==null || feedbacktext==""){
            alert("Name, suburb and feedback must be filled out before submitting. Thank you.");            
            return false;
        }    
    form.submit();
    alert("Thank you for your feedback, Trident Removals greatly appreciates all customer feedback.");
    form.reset();
    return true;
}

function validateWorkForm(event) {    
    event.preventDefault();
    let form=document.forms['workinterestform'];
    let workfirstname=document.getElementById('workfirstname').value;
    let worklastname=document.getElementById('worklastname').value;
    let workemail=document.getElementById('workemail').value;
    let workphone=document.getElementById('workphone').value;
    if (workfirstname==null || workfirstname=="" || worklastname==null || worklastname=="" || workemail==null || 
    workemail=="" || workphone==null || workphone==""){
            alert("Please fill all fields before submitting. Thank you.");            
            return false;
        }    
    form.submit();
    alert("Thank you for registering your interest in joining our team.");
    form.reset();
    return true;
}

function validateQuoteForm(event) {    
    event.preventDefault();
    let form=document.forms['quoteform'];
    let quotefirstname=document.getElementById('quotefirstname').value;
    let quotelastname=document.getElementById('quotelastname').value;
    let quoteemail=document.getElementById('quoteemail').value;
    let quotephone=document.getElementById('quotephone').value;
    let quotejobdetails=document.getElementById('quotejobdetails').value;
    if (quotefirstname==null || quotefirstname=="" || quotelastname==null || quotelastname=="" || quoteemail==null ||
    quoteemail=="" || quotephone==null || quotephone=="" || quotejobdetails==null || quotejobdetails==""){
            alert("Please fill out all fields. Thank you.");            
            return false;
        }    
    form.submit();
    alert("Thank you, we will get back to you very shortly.");
    form.reset();
    return true;
}

function validateBookingForm(event) {
    event.preventDefault();
    let form=document.forms['bookingform'];
    let bookingfirstname=document.getElementById('bookingfirstname').value;
    let bookinglastname=document.getElementById('bookinglastname').value;
    let bookingemail=document.getElementById('bookingemail').value;
    let bookingphone=document.getElementById('bookingphone').value;
    let removaldate=document.getElementById('removaldate').value;
    let removaltime=document.getElementById('removaltime').value;
    let servicetype=document.getElementById('servicetype').value;
    let pickupaddress=document.getElementById('pickupaddress').value;    
    let dropoffaddress=document.getElementById('dropoffaddress').value;    
    let extrainformation=document.getElementById('extrainformation').value;
    if (bookingfirstname==null || bookingfirstname=="" ||
    bookinglastname==null || bookinglastname=="" ||
    bookingemail==null || bookingemail=="" ||
    bookingphone==null || bookingphone=="" ||
    removaldate==null || removaldate=="" ||
    removaltime==null || removaltime=="" ||
    servicetype==null || servicetype=="" ||
    pickupaddress==null || pickupaddress=="" ||    
    dropoffaddress==null || dropoffaddress=="" ||    
    extrainformation==null || extrainformation==""){
        alert("Please fill out all fields before submitting. Thank you.");            
            return false;
        }    
    form.submit();
    alert("Thank you for booking with Trident Removals. We will contact you shortly to confirm everything.");
    return true;
}