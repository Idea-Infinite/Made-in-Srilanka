<div style="max-width: none; min-width: 300px;" data-role="popup" id="editprofile" data-theme="a" class="ui-content">
    <div class="header-title" style="margin-top: -10px; display: flex">
        <h3>Edit Profile</h3>
        <img src="../../common/assets/images/icons/registration.png" height="35px" width="35px">
    </div>
    <form>
        <center><p>Edit User details</p></center>
        <div class="edit-user">
            <input type="text" name="firstName" id="firstName" value="Smith">
            <img src="../../common/assets/images/editprof.png">
        </div>
        <div class="edit-user">
            <input type="text" name="lastName" id="lastName" value="Jackson">
            <img src="../../common/assets/images/editprof.png">
        </div>
        <div class="edit-user">
            <input type="text" name="username" id="username" value="smith">
            <img src="../../common/assets/images/editprof.png">
        </div>


        <br/>
        <center><p>Edit User details</p></center>
        <div class="edit-user">
            <input type="password" name="password" id="password" value="" placeholder="New Password">
            <img src="../../common/assets/images/editlock.png">
        </div>
        <div class="edit-user">
            <input type="password" name="rePassword" id="rePassword" value="" placeholder="Re-type New Password">
            <img src="../../common/assets/images/editlock.png">
        </div>


        <button style="opacity: 1">Save</button>
        <center>
            <a href="#login"
               style="font-weight: 100; color: white; font-family: 'Poppins', sans-serif; font-size: 12px;">
                Already have an account?
            </a>
        </center>
    </form>
</div>