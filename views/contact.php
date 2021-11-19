<?php

var_dump($args);

?>

<h3>Contact us</h3>
<form action="" method="post">
    <div class="mb-3">
        <label for="subject" class="form-label">Subject</label>
        <input type="text" class="form-control" name="subject" id="subject">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" name="message" id="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>