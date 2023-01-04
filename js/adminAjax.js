// Admin Login Function
function adminLogin() {
    var admin_LoginEmail = $("#admin_LoginEmail").val();
    var admin_LoginPassword = $("#admin_LoginPassword").val();

    $.ajax({
        url: './Admin/admin_login.php',
        method: 'POST',
        data: {
            admin_LoginEmail: admin_LoginEmail,
            admin_LoginPassword: admin_LoginPassword
        },
        success: function (data) {
            if (data == 0) {
                console.log(data);
                $("#AdminLoginStatusMessage").html("<small class='alert alert-danger'>Invalid Username or Password</small>");
                setTimeout(() => {
                    $("#AdminLoginStatusMessage").html(" ")
                }, 5000);
            } else if (data == 1) {
                $("#AdminLoginStatusMessage").html('<div class="spinner-border text-success" role="status"></div>');
                console.log(data);
                clearAdminForm();
                setTimeout(() => {
                    window.location.href = "./Admin/admin_dashboard.php";
                }, 1000);
            }
        }
    })

}


// Admin Form Clear Function

function clearAdminForm() {
    $("#adminLoginForm").trigger("reset");
}
