
function validate() {
    var numbers = /^[0-9]+$/;
    var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    var letters = /^[A-Za-z]+$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if( document.registration.mssv.value == "" ) {
       alert( "Bạn không được bỏ trống trường này!" );
       document.registration.mssv.focus() ;
       return false;
    }else 
    if( !document.registration.mssv.value.match(numbers)) {
        alert('Mã số sinh viên chỉ được sử dụng kí tự số');
        document.registration.mssv.focus() ;
        return false;
    } else
    if( document.registration.password.value == "" ) {
       alert( "Bạn không được bỏ trống trường này!" );
       document.registration.password.focus() ;
       return false;
    } else 
    if( document.registration.password.value.length < 8) {
        alert( "Mật khẩu cần ít nhất 8 kí tự!" );
        document.registration.password.focus() ;
        return false;
     }
      else 
     if( !regularExpression.test(document.registration.password.value)) {
        alert('Mật khẩu cần phải chứa kí tự IN HOA (A-Z), in thương (a-z), số (0-9) và kí tự đặc biệt (!@#$%^&*)');
        document.registration.password.focus();
        return false;
    } else
    if( document.registration.username.value == "" ) {
       alert( "Bạn không được bỏ trống trường này!" );
       document.registration.username.focus();
       return false;
    } else
    if( document.registration.username.value == "" ) {
        alert( "Bạn không được bỏ trống trường này!" );
        document.registration.username.focus();
        return false;
    } else
    if( document.registration.HoTen.value.length <1 ) {
        alert( "Bạn không được bỏ trống trường này!" );
        document.registration.HoTen.focus();
        return false;
    } else
    if(document.registration.HoTen.value.match(numbers) ) {
        alert( "Không được sử dụng chữ số trong trường này!" );
        document.registration.HoTen.focus();
        return false;
    } else
    if(document.registration.address.value == "") {
        alert( "Bạn không được bỏ trống trường này!" );
        document.registration.address.focus();
        return false;
    } else
    if(document.registration.email.value == "") {
        alert( "Bạn không được bỏ trống trường này!" );
        document.registration.email.focus();
        return false;
    } else
    if(!document.registration.email.value.match(mailformat)) {
        alert( "Vui lòng nhập email hợp lệ!");
        document.registration.email.focus();
        return false;
    }
    return( true );
}
