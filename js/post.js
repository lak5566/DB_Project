function processFormData() {
    var itemData = document.getElementsByName("item").value;
    var quantityData = document.getElementsByName("quantity").value;
    var addressData = document.getElementsByName("address").value;
    var wantData = document.getElementsByName("want").value;
    var dateData = document.getElementsByName("date").value;

}

function formSubmit() {
    document.getElementById("myform").submit();
}