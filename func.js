function check() {

    if(document.form1.fname.value=="") {
        alert("Please Input First Name") ;
        document.form1.fname.focus() ;
        return false ;
    }
    else if(document.form1.lname.value=="") {
        alert("Please Input Last Name") ;
        document.form1.lname.focus() ;
        return false ;
    }
    else if(document.form1.age.value=="") {
        alert("Please Input Age") ;
        document.form1.age.focus() ;
        return false ;
    }
    else if(document.form1.trestbps.value=="") {
        alert("Please Input the Resting Blood Pressure") ;
        document.form1.trestbps.focus() ;
        return false ;
    }
    else if(document.form1.chol.value=="") {
        alert("Please Input the Serum Cholestrol") ;
        document.form1.chol.focus() ;
        return false ;
    }
    else if(document.form1.thalach.value=="") {
        alert("Please Input the Maximum heart rate achieved") ;
        document.form1.thalach.focus() ;
        return false ;
    }
    else if(document.form1.oldpeak.value=="") {
        alert("Please Input the ST depression") ;
        document.form1.oldpeak.focus() ;
        return false ;
    }
    
    else 
        return true ;
    document.form1.submit();
}

// แบบ fill เอง
// fname
// lname
// trestbps
// chol
// thalach
// oldpeak
