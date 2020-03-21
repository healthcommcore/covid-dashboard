<?php
  $url = $_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html lang="en-US">
  <head>
    <title>COVID-19 Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <style>
      body {
        margin: 0;
        padding: 0;
        background: #FCF6EC;
      }
      .dashboard-header {
        background: #F5A628;
        color: #fff;
        text-align: center;
      }
      .intro-paragraph {
        color: #A85B00;
        font-size: 1.2rem;
      }
      .card-resource {
        border-color: #BAEAFC;
        border-width: 2px;
      }
      .header-resource {
        background: #BAEAFC;
        color: #11476A;
        font-size: 1.2rem;
      }
      .btn-resource {
        background: #FFBE57;
        color: #fff;
      }
    </style>
  </head>
  <body>
    <div class="dashboard-container">
      <h1 class="dashboard-header py-2">COVID-19 Dashboard</h1>
      <div class="container">
        <p class="intro-paragraph p-3">
					Maecenas auctor nulla nisl, sed ornare quam imperdiet nec. Vivamus quam massa, consectetur eget laoreet ultrices, blandit sit amet est. Fusce id iaculis est. Nullam venenatis euismod velit in consequat. Phasellus accumsan, sem dapibus condimentum pulvinar, lacus urna ultricies eros, ac ultricies Leo eros quis metus.
				</p>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card card-resource rounded-0 mb-4">
              <div class="card-header header-resource">
                FAQs
              </div>
              <div class="card-body body-resource">
                <div class="card-text">
                  <p>FAQs content</p>
                </div>
                <a href="#" class="btn btn-lg btn-resource btn-block mt-4 rounded-0">Go to FAQs</a>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card card-resource rounded-0 mb-4">
              <div class="card-header header-resource">
                Important links
              </div>
              <div class="card-body body-resource">
                <div class="card-text">
                  <p>Important links content</p>
                </div>
                <a href="#" class="btn btn-lg btn-resource btn-block mt-4 rounded-0">Go to Important links</a>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card card-resource rounded-0 mb-4">
              <div class="card-header header-resource">
                Visualizations
              </div>
              <div class="card-body body-resource">
                <div class="card-text">
                  <p>Visualizations content</p>
                </div>
                <a href="#" class="btn btn-lg btn-resource btn-block mt-4 rounded-0">Go to Visualizations</a>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card card-resource rounded-0 mb-4">
              <div class="card-header header-resource">
                What you can do
              </div>
              <div class="card-body body-resource">
                <div class="card-text">
                  <p>What you can do content</p>
                </div>
                <a href="#" class="btn btn-lg btn-resource btn-block mt-4 rounded-0">See what you can do</a>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card card-resource rounded-0 mb-4">
              <div class="card-header header-resource">
                Top 10 myths
              </div>
              <div class="card-body body-resource">
                <div class="card-text">
                  <p>Top 10 myths content</p>
                </div>
                <a href="#" class="btn btn-lg btn-resource btn-block mt-4 rounded-0">Go to Top 10 myths</a>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card card-resource rounded-0 mb-4">
              <div class="card-header header-resource">
                Misinformation
              </div>
              <div class="card-body body-resource">
                <div class="card-text">
                  <p>Misinformation content</p>
                </div>
                <a href="#" class="btn btn-lg btn-resource btn-block mt-4 rounded-0">Go to Misinformation</a>
              </div>
            </div><!-- card -->
          </div><!-- col -->
        </div>
      </div>
    </div>
  </body>
</html>
