<?php
/**
 * Contact Template
 */
?>
<div class="card col-sm-8 col-xs-12">
    <h1>Contact Me</h1>

    <hr>
    <p>

        <form action="sendgrid.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="What is your email?">
        </div>
        <div class="form-group">
            <label for="textarea">Whats up?</label>
            <textarea id="textarea" class="form-control" rows="3"></textarea>

        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox"> Spam me!
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </p>
</div>
