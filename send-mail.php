<form action="send-mail.php" method="post" enctype="multipart/form-data">

    <div>
        <label>Full Name*</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div>
        <label>Phone Number*</label>
        <input type="tel" name="phone" class="form-control" required>
    </div>

    <div>
        <label>Email Address*</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div>
        <label>Position Applying For*</label>
        <input type="text" name="position" class="form-control" required>
    </div>

    <div>
        <label>Upload Resume (PDF)</label>
        <input type="file" name="resume" class="form-control" accept=".pdf">
    </div>

    <div class="fullwidth">
        <label>Message</label>
        <textarea name="message" class="form-control"></textarea>
    </div>

    <div class="submit-area">
        <button type="submit" class="shop-btn">Submit Application</button>
    </div>

</form>