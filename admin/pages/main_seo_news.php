<div  style="width: 94%; margin : 0 auto">
<?php

?>
  <h2>SEO Cho Bài Viết</h2>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#main">SEO</a></li>
    <li><a data-toggle="tab" href="#fb">FACEBOOK</a></li>
    <li><a data-toggle="tab" href="#tw">TWITTER</a></li>
  </ul>

  <div class="tab-content">
    <div id="main" class="tab-pane fade in active">
      <h3 class="text-center">SEO Chính</h3>
        <form action="/action_page.php" class="needs-validation" novalidate>
            <div class="form-group">
            <label for="uname">Username:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div id="fb" class="tab-pane fade">
      <h3>SEO facebook</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="tw" class="tab-pane fade">
      <h3>SEO twitter</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>