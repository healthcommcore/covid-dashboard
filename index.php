<?php
/*
	$url = "";
	$path = "";
	if (isset($_GET['current_site'])) {
		$url = $_GET['current_site'];
	}
	if (isset($_GET['current_site'])) {
		$path = $GET['current_path'];
	}
	$absolute = $url . $path;
*/
	$tiles = [
		array(
			"title" => "Frequently Asked Questions",
			"text" => "Frequently Asked Questions about COVID-19",
			"link_text" => "Go to FAQs",
			"endpoint" => "/faqs-about-covid-19"
		),
		array(
			"title" => "Myths vs Facts",
			"text" => "False information about COVID-19 with facts debunking these myths",
			"link_text" => "Go to Myths vs Facts",
			"endpoint" => "/myths-vs-facts"
		),
		array(
			"title" => "Social Media Tips",
			"text" => "How to use social media responsibly during COVID-19",
			"link_text" => "Go to Social Media Tips",
			"endpoint" => "/social-media-tips"
		),
		array(
			"title" => "Resources",
			"text" => "Reliable sources for information on COVID-19",
			"link_text" => "Go to Resources",
			"endpoint" => "/resources-covid19"
		),
		array(
			"title" => "Data Spotlight",
			"text" => "Latest numbers on COVID-19 cases around the world",
			"link_text" => "Go to Data Spotlight",
			"endpoint" => "/data-spotlight"
		)
	];
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
        line-height: 1.57em;
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
        <div class="intro-paragraph p-3 my-3">
       		<p>Welcome to the site. The rapid spread of COVID-19 virus across the globe is affecting millions of people and is at the same time resulting in the spread of information, misinformation (false information spread without malicious intent) and disinformation (false information spread with the intent to deceive). Our intention is not to create additional information but to bring together credible COVID-19 related information that is easy to access, understand and act upon. Here, we try and address how to navigate the large amounts of information and will update this page as more evidence becomes available. Our target audiences are people we have been working with: journalists, non-governmental organizations and members of the communities we are engaging in. Others too may find this useful.</p>
					<p>Over the next few weeks we will expand, modify and update this information. Please visit as often as you can and let us know how this site can be more helpful.</p> 
				</div>
        <div class="row">
<!-- Tiles loop -->
				<?php foreach($tiles as $tile) : ?>
					<?php $full_url = "http://" . $absolute . $tile['endpoint']; ?>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card card-resource rounded-0 mb-4">
              <div class="card-header header-resource">
								<?php echo $tile['title']; ?>
              </div>
              <div class="card-body body-resource">
                <div class="card-text">
                  <p><?php echo $tile['text']; ?></p>
                </div>
                <a target="_parent" href="<?php echo $full_url; ?>" class="btn btn-lg btn-resource btn-block mt-4 rounded-0"><?php echo $tile['link_text']; ?></a>
              </div>
            </div>
          </div>
			<?php endforeach; ?>
<!-- End loop -->
        </div>
      </div>
    </div>
  </body>
</html>
