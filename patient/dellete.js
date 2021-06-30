var result = confirm("Want to delete?");
if (result) {
    window.location.href = 'delete.php';
}
else{
    window.location.href = 'appointment-history.php';
}